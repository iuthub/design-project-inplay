<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class MainController extends Controller
{
    public function index(){
        return view('main/index');
    }

    public function games(){
       
        $prod = DB::table('products')->where('deleted', '=', 0)->orderBy('created_at', 'desc')->paginate(3);

        if(Auth::check()){
            return view('main.games',  ['products' => $prod]);
        }else{
            return redirect('/');
        }
    }

    public function getGame($id){
        $prod = DB::table('products')->find($id);
        return view('main.gameInfo',['product'=>$prod]);
    }

    public function getProfile($id){
        
        $profile = DB::table('users')->find($id);
        return view('main.profile',['user'=>$profile]);
    }

    public function buy($id){
        $key = DB::table('keys')->where('product_id',$id)->where('user_id',null)->limit(1)->update(['user_id' => Auth::id()]);
        return redirect('/games');
    }


}
