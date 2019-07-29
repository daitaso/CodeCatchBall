<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Node;

use Illuminate\Http\Request;

class NodePostController extends Controller{

    //
    public function index(Request $request){

        \Log::info('NodePostControler@index');

        //認証チェック
        if (!\Auth::check()) {
            echo "未認証！ログインへ";
            return redirect()->to('/login');
        }

        //クエリパラメータ取得
        $node_id = $request->input('n');

        $nodes = array();
        if(!is_null($node_id)){
            //node_idあり
            $node_id = gzuncompress(base64_decode($node_id));

            //記事テーブル取得
            $nodes  = \App\Models\Node::where('node_id',$node_id)->get();

        }

        return view('node_post',compact('nodes'));
    }

    public function post(Request $request){

        \Log::info('NodePostControler@post');

        $parent_node_id  = $request->query('pn');

        $node = new Node();

        // node_id採番
        $node->node_id    = \Auth::user()->login_id.'_'.substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 4);
        $node->comment    = $request->comment;
        $node->code       = $request->code;
        $node->user_id    = \Auth::user()->login_id;
        $node->good_num   = 0;

        if(!is_null($parent_node_id)){

            $parent_node_id = gzuncompress(base64_decode($parent_node_id));

            //親がいる場合
            $node->parent_node_id = $parent_node_id;

            $child = new Child();
            $child->node_id = $parent_node_id;
            $child->child_node_id = $node->node_id;

            $child->save();
        }
        $node->save();


        return redirect()->to('/home');

    }


}
