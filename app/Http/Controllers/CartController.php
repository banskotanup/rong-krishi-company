<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function getCart(){
        $data['meta_title'] = 'Shopping Cart';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        $cartItems = Cart::content();
        return view('cart.cart',compact('cartItems'), $data);
    }

    public function add_to_Cart(Request $request){
        $getProduct = Product::getSingle($request->product_id);
        $total = $getProduct->price * $request->qty;
        Cart::add([
            'id' => $getProduct->id,
            'name' => $getProduct->title,
            'price' => $total,
            'qty' => $request->qty,
        ]);
        return redirect()->back();
    }

    public function cart_delete($rowId){

        Cart::remove($rowId);
        
        return redirect()->back();
    }

    public function update_cart(Request $request){

        foreach($request->cart as $cart){
            Cart::update($cart['rowId'], array(
                'qty' => $cart['qty'],
            ));
        }

        return redirect()->back();
    }

    public function checkout(){
        $data['meta_title'] = 'Checkout';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';
        return view('cart.checkout', $data);
    }
}
