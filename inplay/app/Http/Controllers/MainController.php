<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use DateTime;

class MainController extends Controller
{
    public function index(){
        return view('main/index');
    }

    public function games(){

        $action = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'action')->orderBy('created_at', 'desc')->paginate(12);
        $adventure = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'adventure')->orderBy('created_at', 'desc')->paginate(12);
        $fighting = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'fighting')->orderBy('created_at', 'desc')->paginate(12);
        $platform = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'platform')->orderBy('created_at', 'desc')->paginate(12);
        $racing = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'racing')->orderBy('created_at', 'desc')->paginate(12);
        $role_playing = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'role-playing')->orderBy('created_at', 'desc')->paginate(12);
        $shooter = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'shooter')->orderBy('created_at', 'desc')->paginate(12);
        $simulation = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'simulation')->orderBy('created_at', 'desc')->paginate(12);
        $sports = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'sports')->orderBy('created_at', 'desc')->paginate(12);
        $strategy = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'strategy')->orderBy('created_at', 'desc')->paginate(12);
        $misc = DB::table('products')->where('deleted', '=', 0)->where('genre', '=', 'misc')->orderBy('created_at', 'desc')->paginate(12);
        

        if(Auth::check()){
            return view('main.games',  ['actions' => $action,
                                        'adventures' => $adventure,
                                        'fightings' => $fighting,
                                        'platforms' => $platform,
                                        'racings' => $racing,
                                        'role_playings' => $role_playing,
                                        'shooters' => $shooter,
                                        'simulations' => $simulation,
                                        'sports' => $sports,
                                        'strategys' => $strategy,
                                        'miscs' => $misc,
                                        
                                        ]);
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
        $games = DB::table('keys')->join('products', 'keys.product_id', '=', 'products.id')
                                ->where('user_id',$id)
                                ->select('products.name','keys.id', 'keys.date')
                                ->get();
        
        return view('main.profile',['user'=>$profile, 'games' => $games]);
    }

    public function buy($id){
        $key = DB::table('keys')->where('product_id',$id)
                                ->where('user_id',null)
                                ->limit(1)
                                ->update(['user_id' => Auth::id(), 'date' => new DateTime()]);
                                
        return redirect('/games');
    }


}
