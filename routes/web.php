<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/product/{id}', [
    'uses' => 'FrontEndController@singleProduct',
    'as' => 'product.single'
]);

Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('cart/incr/{id}/{qty}', [
    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'
]);

Route::get('cart/decr/{id}/{qty}', [
    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'
]);

Route::get('/cart/rapid/add/{id}', [
    'uses' => 'ShoppingController@rapid_add',
    'as' => 'cart.rapid.add'
]);

Route::get('/cart/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout',
    'middleware' => 'user'
]);

Route::post('/cart/checkout', [
    'uses' => 'CheckoutController@pay',
    'as' => 'cart.checkout'
]);

Route::get('/paypal/record', [
    'uses' => 'PaypalController@paypalRecord',
    'as' => 'paypal.record'
]);
Route::get('/paypal/cancel', [
    'uses' => 'PaypalController@paypalCancel',
    'as' => 'paypal.cancel'
]);
Route::get('/category/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'product.category'
]);

Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');

Auth::routes();

Route::get('/admin', 'HomeController@index')->middleware('check_user_role:'.\App\Role\UserRole::ROLE_ADMIN);

Route::get('/user/auth', [
    'uses' => 'UserLogin@auth',
    'as' => 'user.auth'
]);

Route::get('/user/login', [
    'uses' => 'UserLogin@login',
    'as' => 'user.login'
]);

Route::get('/user/register', [
    'uses' => 'UserLogin@register',
    'as' => 'user.register'
]);
Route::get('/user/error', [
    'uses' => 'UserLogin@error',
    'as' => 'user.error'
]);

Route::get('/users', [
    'uses' => 'UsersController@index',
    'as' => 'users.index'
]);

Route::get('/orders', [
    'uses' => 'OrdersController@index',
    'as' => 'orders.index'
])->middleware('check_user_role:'.\App\Role\UserRole::ROLE_ADMIN);;



Route::post('/paypal/checkout',[
    'uses' => 'PaypalController@payWithpaypal',
    'as' => 'paywithpaypal'
]);


Route::any('/search', [
    'uses' => 'FrontEndController@search',
    'as' => 'product.search'
]);


 Route::post('/rate','AjaxController@rate');