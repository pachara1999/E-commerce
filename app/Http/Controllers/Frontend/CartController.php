<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $prod_check = Product::where('id', $product_id)->first();
            if ($prod_check) {
                if (Cart::where('prod_id', $product_id)->where('user_id', Auth::id())->exists()) {
                    return response()->json(['icon' => 'warning' ,'status' => 'Already Added']);
                } else {
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id;
                    $cartItem->user_id = Auth::id();
                    $cartItem->prod_qty = $product_qty;
                    $cartItem->save();
                    return response()->json(['icon' => 'success' ,'status' => 'Product Added Successfully']);
                }
            }
        } else {
            return response()->json(['icon' => 'warning' ,'status' => 'Login to Continue']);
        }
    }

    public function updateCart(Request $request){
        $prod_id = $request->input('prod_id');
        $prod_qty = $request->input('prod_qty');

        if(Auth::check()){
            if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()){ 
                $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cart->prod_qty = $prod_qty;
                $cart->update();

                return response()->json(['icon' => 'success' ,'status' => 'Update price successfully']);
            }
        }
    }

    public function deleteProduct(Request $request){
    
        if(Auth::check()){
            $prod_id = $request->input('prod_id');
            if(Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()){ 
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first() ;
                $cartItem->delete();

                return response()->json(['icon' => 'success' ,'status' => 'Delete product from cart successfully']);
            }
        }else{
            return response()->json(['icon' => 'warning' ,'status' => 'Login to Continue']);
        }
    }

    public function viewcart(){
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart', compact('cartItems'));
    }
}
