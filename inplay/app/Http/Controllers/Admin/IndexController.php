<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Key;
use Auth;
class IndexController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function save(){

        $prod = new Product();
        $prod->id =  guid();
        $prod->name = request('name');
        $prod->genre = request('genre');
        $prod->price = request('price');
        $prod->date = request('date');
        $prod->description = request('description');
        $prod->imageSource = request('imageSource');
        $prod->deleted = false;
        $prod->created_at = now();
       
        $prod->save();

        return redirect('/games');
 
    }

    public function addKey($id){
        $prod = DB::table('products')->find($id);
        return view('admin.keys',['product'=>$prod]);
    }

    public function keysave(){

        $key = new Key();
        $key->id =  request('id');
        $key->product_id =  request('product_id');
        
       
        $key->save();

        return redirect('/games');
 
    }

    
    
}
