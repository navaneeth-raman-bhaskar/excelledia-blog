@extends('layouts.layout')
@section('content')
<h3>Edit Blog Post</h3>
@include('admin.posts.partials.post_form',['text'=>'Save','action'=>route('admin.posts.update',$post),'method'=>'PUT'])
@endsection
