<?php

namespace App\Http\Controllers;

//use App\Channel;

use Illuminate\Http\Request;

class NodeListController extends Controller{

    public function index(Request $request){

        \Log::info('NodeListControler@index');

        //クエリパラメータ取得
        $node_id   = $request->input('n');
        $node_id = gzuncompress(base64_decode($node_id));

        \Log::info('node_id '.$node_id);

// MEMO
//       $param = base64_encode(gzcompress('TW1041865535946752001_1'));
//        \Log::info('param '.$param);

        //記事テーブル取得
        $nodes  = \App\Models\Node::where('node_id',$node_id)->get();

        //子記事テーブル取得
        $childs = \App\Models\Child::where('node_id',$node_id)->get();

        \Log::info(count($nodes));
        \Log::info(count($childs));

//        //channels検索
//        $channels = \App\Models\Channel::all();
//        $results = array();
//        foreach ($channels as $channel) {
//
//            //TODO filter kakeru
//            //growths検索、集計
//            $growths = \App\Models\Growth::where('channel_id',$channel->channel_id)->get();   //where channelid
//
//            $point = 0;
//            foreach ($growths as $growth) {
//
//                $point += $growth->like_count  * 5;
//                $point += $growth->subscribers * 100;
//                $point += $growth->view_count;
//                $point += $growth->comment_count * 2;
//
//                $channel['point'] = $point;
//
//            }
//
//            $results[] = $channel;
//
//        }
//
//        return view('ranking',compact('results'));

        return view('node_list');
    }
}
