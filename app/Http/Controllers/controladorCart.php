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
    	 return \Session::get('cart');

    }
    public function add(Productos $producto)
    {
    	$cart =\Session::get('cart');
    	$producto->cantidad=1;
    	$cart[$producto->slug]=$producto;
    	\Session::put('cart',$cart);
    	return redirect()->route('cart-show');
    }
}
