<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->count();
        $orders = Order::all()->count();
        $categories = Category::all()->count();
        $users = User::all()->count();
        return view('home',[ 'users'=>$users,'products'=> $products, 'orders'=> $orders, 'categories'=> $categories]);
    }
}
