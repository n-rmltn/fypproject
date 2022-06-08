<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;
use App\Models\Product_Images;
use App\Models\Product_Option_List;

class option
{
    public $name;
    public $selected;
}
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Cookie::get('shopping_cart') !== null){
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else{
            $cart_data = array();
        }
        return view('cart')->with('cart',$cart_data);//
    }

    public function ajax(){
        if(Cookie::get('shopping_cart') !== null){
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else{
            $cart_data = array();
        }
        return view('ajax.cart')->with('cart',$cart_data);//
        /*return response()->json($cart_data);*/
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
        $prod_id = $request->input('product_id');
        $products = Product::find($prod_id);
        $option_array = array();
        $prod_name = $products->product_name_short;
        $prod_image = $products->product_cart_images_name;
        $priceval = $products->product_base_price;
        $arr = [];

        foreach($products->option as $option){
            $opt = new option();
            $option_name = $option->product_option_name;
            $opt->name = $option_name;
            $option_selected = $request->input('product-option-'.$option_name);
            $option_array[$option_name] = $option_selected;
            foreach($option->list as $list){
                if($list->product_option_list_name == $option_selected){
                    $opt->selected = $list->id;
                    $priceval += $list->product_option_list_additional_price;
                }
            }
            array_push($arr,$opt);
        }


        if(Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        }
        else
        {
            $cart_data = array();
        }

        if($products)
        {
            $item_array = array(
                'product_id' => $prod_id,
                'product_image' => $prod_image,
                'item_name' => $prod_name,
                'item_price' => $priceval,
                'options' => $option_array,
                'arr' => $arr,
            );
            $cart_data[] = $item_array;

            $item_data = json_encode($cart_data);
            $minutes = 1440;
            Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
            return redirect(route('cart.index'));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Request $request)
    {
        $cart_item_id = $request->input('cart_item_id');//
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        foreach($cart_data as $keys => $values)
        {
            if($keys == $cart_item_id)
            {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                return response()->json(['status'=>'Item Removed from Cart']);
            }
        }
    }
}
