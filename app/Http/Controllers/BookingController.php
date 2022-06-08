<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Booking_item;
use App\Models\Booking_item_option;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking (Request $req) {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $booking = Booking::create([
            'user_id' => auth()->user()->id,
            'address_1' => $req->address_1,
            'address_2' => $req->address_2,
            'city' => $req->city,
            'state' => $req->state,
            'postal' => $req->postal,
            'phone' => $req->phone
        ]);

        if(!empty($cart_data) && count($cart_data)>0){
            foreach($cart_data as $item){
                $arr = $item['arr'];
                $prod_id = $item['product_id'];

                $item = Booking_item::create([
                    'booking_id' => $booking->id,
                    'product_id' => $prod_id
                ]);

                foreach ($arr as $opt){
                    $opt_name = $opt['name'];
                    $opt_sel = $opt['selected'];
                    $item_opt = Booking_item_option::create([
                        'booking_item_id' => $item->id,
                        'option_id' => $opt_sel
                    ]);
                }
            }
        }

        Cookie::queue(Cookie::forget('shopping_cart'));

        return redirect()->route('orders', ['msg' => 'success']);
    }
    public function admin_order_list(Request $request)
    {
        $booking = Booking::paginate(10);

        return view('admin-orders')->with('booking',$booking);//
    }
    public function admin_order_detail(Request $request, $id)
    {
        $booking = Booking::find($id);

        return view('admin-orders-details')->with('booking',$booking);//
    }

    public function user_order(Request $request)
    {
        // How in the fuck
        $booking = Booking::where('user_id', auth()->user()->id)->get();

        return view('user-orders')->with('booking',$booking);//
    }
    public function user_order_detail(Request $request, $id)
    {
        $booking = Booking::find($id);

        return view('user-orders-details')->with('booking',$booking);//
    }
}
