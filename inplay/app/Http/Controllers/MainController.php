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
       
        $prod = DB::table('products')->where('deleted', '=', 0)->orderBy('created_at', 'desc')->paginate(6);
        
        return view('main.games',  ['products' => $prod]);

        //@TODO Добавить эту функцию!!
        // if(Auth::check()){
        // return view('main/games');
        // }else{
        //     return redirect('/');
        // }
    }

    public function getGame($id){
        $prod = DB::table('products')->find($id);
        return view('main.gameInfo',['product'=>$prod]);
    }

    public function getProfile($id){
        
        $profile = DB::table('users')->find($id);
        return view('main.profile',['user'=>$profile]);
    }


}
