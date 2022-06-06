<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $array = ['product_status' => 1];
        $req = [];
        $brands = Product_Brand::wherehas('product', function($q)  use ($array){
            $q->where($array);
        })->get();
        if($request->input('category')){
            $category = $request->input('category');
            $req += ['category' => $category];
            $array += ['product_categories' => $category];
            $brands = Product_Brand::wherehas('product', function($q)  use ($array){
                $q->where($array);
            })->get();
        }
        $products = Product::where($array);
        $price_min = Product::where($array)->orderby('product_base_price', 'ASC')->first('product_base_price');
        $price_max = Product::where($array)->orderby('product_base_price', 'DESC')->first('product_base_price');
        if(($price_min || $price_max) != null && $price_min != $price_max){
            $req += ['start_min' => $price_min['product_base_price']];
            $req += ['start_max' => $price_max['product_base_price']];
        }
        else{
            $req += ['start_min' => '0'];
            $req += ['start_max' => '1000'];
        }
        if($request->input('brand')){
            $brand_filter = $request->input('brand');
            $req += ['brand' => $brand_filter];
            $products = $products->whereIn('product_brand_id',$brand_filter);
        }
        if($request->input('price_min') && $request->input('price_max') ){
            $min = $request->input('price_min');
            $max = $request->input('price_max');
            $req += ['price_min' => $min];
            $req += ['price_max' => $max];
            $products = $products->where('product_base_price', '>' ,$min)->where('product_base_price', '<' ,$max);
        }
        if($request->input('sort')){
            $sort = $request->input('sort');
            if($sort == 'price_asc'){
                $products = $products->orderby('product_base_price', 'ASC');
            }
            else if($sort == 'price_desc'){
                $products = $products->orderby('product_base_price', 'DESC');
            }
            else if($sort == 'name_asc'){
                $products = $products->orderby('product_name_short', 'ASC');
            }
            else{
                $products = $products->orderby('product_name_short', 'DESC');
            }
            $req += ['sort' => $sort];
        }
        else{
            $products = $products->orderby('product_name_short');
        }
        $products = $products->paginate(9);

        return view('catalog')->with('products',$products)->with('req',$req)->with('brands',$brands);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $suggestions = Product::where('product_categories',$product->product_categories)->inRandomOrder()->limit(8)->get();
        return view('product')->with('product',$product)->with('suggestions',$suggestions);
    }

    private function sort(){
        $token = csrf_token();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $searchQuery = trim($request->input('search'));
        $requestData = ['product_name_short', 'product_name_long', 'product_description', 'product_categories', 'product_brand_name'];
        $product = Product::join('product_brand', 'product.product_brand_id', '=', 'product_brand.id')->where(
                            function($q) use($requestData, $searchQuery) {
                                foreach ($requestData as $field)
                                $q->orWhere($field, 'like', "%{$searchQuery}%");
                            }
                        )->get();
        return view('ajax.search')->with('product',$product);
    }

    public function admin_list(Request $request)
    {
        $products = Product::paginate(10);

        return view('admin-product')->with('products',$products);//
    }
}
