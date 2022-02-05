@extends('layouts.layout')
@section('content')
<h3>Blog Post</h3>
<div class="row">
    <div class="col-12">
        {{$post->title}}
    </div>
</div>
<div class="row">
    <div class="col-12">
        {{$post->body}}
    </div>
</div>
@endsection
