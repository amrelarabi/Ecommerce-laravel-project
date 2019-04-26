<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index', ['products' => Product::paginate(4)]);
    }

    public function singleProduct($id)
    {
        return view('single', ['product' => Product::find($id)]);
    }
    public function category($id)
    {
        $category_name = Category::find($id)->name;
        return view('category', ['category' => $category_name, 'products' => Product::where('category_id', '=', $id)->paginate(4)]);
    }
    public function search(Request $request)
    {
        $search_keyword = $request->q;
        return view('search', ['search_keyword'=>$search_keyword , 'products' => Product::where('name','LIKE','%'.$search_keyword.'%')->paginate(4)]);
    }
}
