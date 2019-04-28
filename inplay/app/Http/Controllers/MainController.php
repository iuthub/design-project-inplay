<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index(){
        return view('main/index');
    }

    public function games(){

        return view('main/games');

        //@TODO Добавить эту функцию!!
        // if(Auth::check()){
        // return view('main/games');
        // }else{
        //     return redirect('/');
        // }
    }


}
