<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class NodeListController extends Controller{

    public function index(Request $request){

        \Log::info('NodeListControler@index');

        if (is_null($request->input('n'))) {
            //node_idが渡されない場合はホームへ
            echo "parameter nai home he";
            return redirect()->to('/home');
        }

        //クエリパラメータ取得
        $node_id   = $request->query('n');
        \Log::info($node_id);
        \Log::info(base64_decode($node_id));
        $node_id = gzuncompress(base64_decode($node_id));

        //記事テーブル取得
        $nodes  = \App\Models\Node::where('node_id',$node_id)->get();

        //記事のユーザー取得
        $users  = \App\User::where('login_id',$nodes[0]->user_id)->get();

        //子記事テーブル取得
        $childs = \App\Models\Child::where('node_id',$node_id)->get();

        //子記事のユーザー取得
        $child_nodes = array();
        $child_users = array();

        foreach ($childs as $child){
            $work_nodes     = \App\Models\Node::where('node_id',$child->child_node_id)->get();
            $child_nodes[]  = $work_nodes[0];
            $child_users[]  = \App\User::where('login_id',$work_nodes[0]->user_id)->get()[0];
        }

        $args = [$nodes,$child_nodes,$users,$child_users];

        return view('node_list',compact('args'));

    }
}
