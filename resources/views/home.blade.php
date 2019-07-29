@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card mt-5">
                <div class="card-header">新しいコード</div>
                <div class="card-body">
                    <a href="{{url("/post")}}" class="btn btn-primary btn-block">コードを書く</a>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <img src="{{Auth::user()->avatar}}" class="rounded-circle mx-1" width="30" height="30" alt="Cinque Terre">
                    <span class="text-primary">{{Auth::user()->name}}</span>のコード一覧
                </div>
                <div class="card-body">
                    <div class="list-group">
                        @foreach($nodes as $node)
                            <a href="{{url('/?n='.base64_encode(gzcompress($node->node_id)))}}" class="list-group-item list-group-item-action">{{$node->comment.' '.$node->created_at}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

