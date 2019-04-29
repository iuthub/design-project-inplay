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

        $prod = DB::table('products')->get();
        
        return view('main.games',  ['products' => $prod]);

        //@TODO Добавить эту функцию!!
        // if(Auth::check()){
        // return view('main/games');
        // }else{
        //     return redirect('/');
        // }
    }


}
