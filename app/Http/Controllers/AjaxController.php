<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rate;
use Auth;

class AjaxController extends Controller {
    public function rate(Request $request) {

        if(Auth::check() ){
            $user_id = Auth::id();

            $rates_count = Rate::where([['user_id','=',$user_id],['product_id','=', $request->id]])->count();

            if($rates_count > 0){
                $msg = "You have aleady rated this product.";
                $msg = array('info'=> $msg);
            }else{
                $rate = new Rate;
                $rate->rate = $request->rate;
                $rate->product_id = $request->id;
                $rate->user_id = $user_id;
                $rate->save();
                $msg = "Thanks you have rated this product.";
                $msg = array('success'=> $msg);
            }
            
        }else{
            $msg = "Sorry login first.";
            $msg = array('info'=> $msg);
        }

        return response()->json($msg, 200);
    }
}