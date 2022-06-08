<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Product_Brand;
use App\Models\Product_Details;
use App\Models\Product_Images;
use App\Models\Product_Option;
use App\Models\Product_Option_List;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
    public function admin_edit_product(Request $request, $id)
    {
        $product = Product::find($id);

        return view('admin-product-alter')->with('product',$product);//
    }
    public function admin_add_prod(Request $request)
    {
        $brand = Product_Brand::where('product_brand_name', $request->product_brand)->first();
        $name = trim($request->product_name_short, " ");
        $option = json_decode($request->option);
        $product = Product::create([
            'product_name_short' => $request->product_name_short,
            'product_name_long' => $request->product_name_long,
            'product_brand_id' => $brand->id,
            'product_categories' => $request->product_categories,
            'product_description' => $request->product_description,
            'product_base_price' => $request->product_base_price,
            'product_stripe_id' => $request->stripe_id,
        ]);

        $det_1 = Product_Details::create([
            'product_id' => $product->product_id,
            'product_details_header' => $request->detail_name_1,
            'product_details_content' => $request->detail_desc_1
        ]);

        $det_2 = Product_Details::create([
            'product_id' => $product->product_id,
            'product_details_header' => $request->detail_name_2,
            'product_details_content' => $request->detail_desc_2
        ]);

        if (!empty($option) && count($option) > 0){
            foreach($option as $opt){
                $option_q = Product_Option::create([
                    'product_id' => $product->product_id,
                    'product_option_name' => $opt->option_name
                ]);
                foreach($opt->variation as $var){
                    $var_q = Product_Option_List::create([
                        'product_option_id' => $option_q->id,
                        'product_option_list_name' => $var->var_name,
                        'product_option_list_additional_price' => $var->var_price,
                    ]);
                }
            };
        }

        $validatedData = Validator::make($request->all(), [
            'cart_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'prod_img' => 'required',
            'prod_img.*' => 'mimes:jpeg,png,jpg,gif,svg,webp'
        ]);
        $i = 0;
        $cat = '';
        if($request->hasfile('prod_img'))
        {
            foreach($request->file('prod_img') as $file)
            {
                $i++;
                $name = 'product-'.$name.'-'.$i.'.'.$file->extension();
                $file->move(public_path('assets/images/products'), $name);
                $data[] = $name;
                if ($i == 1){
                    $cat = $name;
                }
                $images = Product_Images::create([
                    'product_id' => $product->product_id,
                    'product_images_name' => $name,
                    'product_images_priority' => $i
                ]);
            }
        }

        $imageName = 'product-cart-'.$product->product_id.'.'.$request->file('cart_img')->extension();

        $request->file('cart_img')->move(public_path('assets/images/products'), $imageName);

        $prod = Product::findOrFail($product->product_id);
        $prod->fill([
            'product_cart_images_name' => $imageName,
            'product_catalog_images_name' => $cat
        ]);
        $prod->save();

        return redirect()->route('admin-product-alter', $product->product_id)->with('success', 'Product Added Successfully');
    }
    public function admin_alter_prod(Request $request, $id){
        $brand = Product_Brand::where('product_brand_name', $request->product_brand)->first();
        $name = trim($request->product_name_short, " ");

        $prod = Product::findOrFail($id);
        $i = 0;

        $imageName = $prod->product_cart_images_name;
        $catimageName = $prod->product_catalog_images_name;
        if(!empty($request->cart_img)){
            $imageName = 'product-cart-'.$id.'.'.$request->file('cart_img')->extension();

            $request->file('cart_img')->move(public_path('assets/images/products'), $imageName);
        }

        if(!empty($request->catalog_img)){
            $catimageName = 'product-catalog-'.$id.'.'.$request->file('catalog_img')->extension();

            $request->file('catalog_img')->move(public_path('assets/images/products'), $catimageName);
        }

        if(!empty($request->option)){
            Product_Option::where('product_id', $id)->delete();
            $option = json_decode($request->option);

            if (count($option) > 0){
                foreach($option as $opt){
                    $option_q = Product_Option::create([
                        'product_id' => $id,
                        'product_option_name' => $opt->option_name
                    ]);
                    foreach($opt->variation as $var){
                        $var_q = Product_Option_List::create([
                            'product_option_id' => $option_q->id,
                            'product_option_list_name' => $var->var_name,
                            'product_option_list_additional_price' => $var->var_price,
                        ]);
                    }
                };
            }
        }

        $prod->fill([
            'product_name_short' => $request->product_name_short,
            'product_name_long' => $request->product_name_long,
            'product_brand_id' => $brand->id,
            'product_categories' => $request->product_categories,
            'product_description' => $request->product_description,
            'product_base_price' => $request->product_base_price,
            'product_stripe_id' => $request->stripe_id,
            'product_cart_images_name' => $imageName,
            'product_catalog_images_name' => $catimageName
        ]);
        $prod->save();

        $det_1 = Product_Details::findOrFail($request->detail_id_1);
        $det_1->fill([
            'product_details_header' => $request->detail_name_1,
            'product_details_content' => $request->detail_desc_1
        ]);
        $det_2 = Product_Details::findOrFail($request->detail_id_2);
        $det_2->fill([
            'product_details_header' => $request->detail_name_2,
            'product_details_content' => $request->detail_desc_2
        ]);

        if($request->hasfile('prod_img'))
        {
            foreach($request->file('prod_img') as $file)
            {
                $i++;
                $name = 'product-'.$name.'-'.time().'-'.$i.'.'.$file->extension();
                $file->move(public_path('assets/images/products'), $name);
                $data[] = $name;
                $images = Product_Images::create([
                    'product_id' => $id,
                    'product_images_name' => $name,
                    'product_images_priority' => $i
                ]);
            }
        }

        return redirect()->route('admin-product-alter', $id)->with('success', 'Product Details Updated');
    }
    public function admin_del_prod_image(Request $request, $id) {
        //$prod = Product_Images::findOrFail($id);
        Product_Images::where('id', $id)->delete();
        //$prod->delete();
        return redirect()->back()->with('success', 'Image has been deleted');

    }
}
