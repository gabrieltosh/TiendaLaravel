<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Productos;

class controladorCart extends Controller
{
    public function __construct()
    {
    	if(!\Session::has('cart')) \Session::put('cart',array());
    }

    public function show()
    {
    	 $cart = \Session::get('cart');
         return view('tienda.cart',compact('cart'));
    }
    public function add(Productos $producto)
    {
    	$cart =\Session::get('cart');
    	$producto->cantidad=1;
    	$cart[$producto->slug]=$producto;
    	\Session::put('cart',$cart);
    	return redirect()->route('cart-show');
    }
    public function delete(Productos $producto)
    {
        $cart = \Session::get('cart');
        unset($cart[$producto->slug]);
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
    }
    public function update(Productos $producto, $cantidad)
    {
        $cart=\Session::get('cart');
        $cart[$producto->slug]->cantidad=$cantidad;
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');   
    }
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }


}
