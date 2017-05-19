<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'as' => 'home',
    'uses' => 'ControladorTienda@index'
]);

Route::get('producto/{slug}',[
    'as' => 'producto-detalle',
    'uses'=> 'ControladorTienda@show'
]);
//Carito
Route::get('cart/show',[
    'as' => 'cart-show',
    'uses'=> 'controladorCart@show'
]);

Route::bind('producto',function($slug)
{
	return App\Productos::where('slug',$slug)->first();
});
Route::get('cart/add/{producto}',[
		'as'=>'cart-add',
		'uses'=>'controladorCart@add'
	]);
Route::get('cart/delete/{producto}',[
        'as'=>'cart-delete',
        'uses'=>'controladorCart@delete'
    ]);
Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses'=> 'controladorCart@trash'
]);
Route::get('cart/update/{producto}/{cantidad?}',[
        'as'=>'cart-update',
        'uses'=>'controladorCart@update'
    ]);