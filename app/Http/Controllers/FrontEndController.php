<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Rate;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('index', ['products' => Product::paginate(4)]);
    }

    public function singleProduct($id)
    {
        $rates_count = Rate::where([['product_id','=', $id]])->count();
        $rates_value = Rate::where([['product_id','=', $id]])->sum('rate');
        if($rates_value > 0){
            $rate_value = round($rates_value/ $rates_count);
        }else{
            $rate_value = 0;
        }
        return view('single', ['product' => Product::find($id), 'rate_value'=>$rate_value]);
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
