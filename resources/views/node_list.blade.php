@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <img src="{{$args[2][0]->avatar}}" class="rounded-circle my-4" width="80" height="80" lt="Cinque Terre">
        </div>
        <div class="col-sm-10">
            <div class="form-group my-5">
                <h4 class="h4">{{$args[0][0]->comment}}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <a href="{{url("/post?n=".base64_encode(gzcompress($args[0][0]->node_id)))}}" class="btn btn-primary btn-lg">Clone</a>
            <i class="fas fa-thumbs-up fa-2x mt-5 ml-3"></i>
        </div>
        <div class="col-sm-10">
            <pre class="prettyprint linenums">
{{$args[0][0]->code}}
            </pre>
        </div>
    </div>

@for ($i = 0; $i < count($args[1]); $i++)
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <img src="{{$args[3][$i]->avatar}}" class="rounded-circle my-4" width="80" height="80" alt="Cinque Terre">
        </div>
        <div class="col-sm-9">
            <div class="form-group my-5">
                <h4 class="h4">{{$args[1][$i]->comment}}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-2">
            <a href="{{url("/post?n=".base64_encode(gzcompress($args[1][$i]->node_id)))}}" class="btn btn-primary btn-lg">Clone</a>
            <i class="fas fa-thumbs-up fa-2x mt-5 ml-3"></i>
        </div>
        <div class="col-sm-9">
        <pre class="prettyprint linenums">
{{$args[1][$i]->code}}
        </pre>
        </div>
    </div>
@endfor

</div>

@endsection