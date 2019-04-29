<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function save(){

        $prod = new Product();
 
        $prod->name = request('name');
        $prod->janre = request('janre');
        $prod->price = request('price');
        $prod->date = request('date');
        $prod->description = request('description');
        $prod->imageSource = request('imageSource');
        $prod->deleted = false;
       
        $prod->save();

        return redirect('/games');
 
    }

    
}
