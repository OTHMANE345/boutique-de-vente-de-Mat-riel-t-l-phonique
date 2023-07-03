<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use \App\Http\Controllers\Cart;
class CartController extends Controller
{
    public function index(){
        return view("Cart.index")->with([
            "items" => \Cart::getContent()
        ]);
    }

    public function addProductToCart(Request $request,Product $product){
        \Cart::add(array(
            "id" => $product->id,
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => $request->quantity,
            "attributes" => array(),
            "associatedModel" => $product
        ));
        return redirect()->route("cart.index");
    }

    public function updateProductToCart(Request $request,Product $product){
        \Cart::update($product->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
          ));
        return redirect()->route("cart.index");
    }

    public function removeProductToCart(Request $request,Product $product){
        \Cart::remove($product->id);
        return redirect()->route("cart.index");
    }
}
