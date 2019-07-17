<?php

namespace App\Http\Controllers;

//use App\Channel;

use Illuminate\Http\Request;

class NodeListController extends Controller{

    public function index(Request $request){

        //クエリパラメータ取得
        $thread_id = $request->input('t');
        $node_id   = $request->input('n');

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
