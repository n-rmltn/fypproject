<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        if($request->input('category')){
            $category = $request->input('category');
            $req += ['category' => $category];
            $array += ['Product_categories' => $category];
        }
        $prod = Product::where($array);
        if($request->input('sort')){
            $sort = $request->input('sort');
            if($sort == 'price_asc'){
                $sorted = $prod->orderby('product_base_price', 'ASC');
            }
            else if($sort == 'price_desc'){
                $sorted = $prod->orderby('product_base_price', 'DESC');
            }
            else if($sort == 'name_asc'){
                $sorted = $prod->orderby('product_name_short', 'ASC');
            }
            else{
                $sorted = $prod->orderby('product_name_short', 'DESC');
            }
            $req += ['sort' => $sort];
        }
        else{
            $sorted = $prod->orderby('product_name_short');
        }
        $products = $sorted->get();
        return view('catalog')->with('products',$products)->with('req',$req);//
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
        return view('product')->with('product',$product);
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
}
