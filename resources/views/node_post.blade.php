@extends('layout')
@section('content')

<div class="container">
    @if (count($nodes) === 1)
    <form action="{{ url('/post/post?pn='.base64_encode(gzcompress($nodes[0]->node_id)))}}" method="POST" class="form-horizontal">
    @else
    <form action="{{ url('/post/post')}}" method="POST" class="form-horizontal">
    @endif
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group my-5">
                    @if (count($nodes) === 1)
                        <input type="text" name="comment" id="text1" class="form-control" value="{{$nodes[0]->comment}}">
                    @else
                        <input type="text" name="comment" id="text1" class="form-control">
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-dark mt-5 w-100">Post</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <div class="md-form">
                    @if (count($nodes) === 1)
                        <textarea id="form7" name="code" class="md-textarea form-control " rows="15">{{$nodes[0]->code}}</textarea>
                    @else
                        <textarea id="form7" name="code" class="md-textarea form-control " rows="15"></textarea>
                    @endif
                </div>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </form>
</div>

@endsection