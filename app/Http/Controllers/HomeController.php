<?php

namespace App\Http\Controllers;

//use App\Channel;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function index(Request $request){

        \Log::info('HomeControler@index');

        //認証チェック
        if (!\Auth::check()) {
            echo "未認証！ログインへ";
            return redirect()->to('/login');
        }

        $nodes  = \App\Models\Node::where('user_id',\Auth::user()->login_id)->get();

        return view('home',compact('nodes'));

    }
}
