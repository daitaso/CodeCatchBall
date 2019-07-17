@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="form-group my-5">
                <input type="text" id="text1" class="form-control">
            </div>
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-dark mt-5 w-100">Post</button>
            <button type="button" class="btn btn-dark w-100 mt-3">Preview</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10">
            <div class="md-form">
                <textarea id="form7" class="md-textarea form-control " rows="15"></textarea>
            </div>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
</div>

@endsection