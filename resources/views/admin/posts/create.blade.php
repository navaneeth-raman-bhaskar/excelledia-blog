@extends('layouts.layout')
@section('content')
<h3>Create Blog Post</h3>
@include('admin.posts.partials.post_form',['text'=>'Save','action'=>route('admin.posts.store'),'method'=>'POST'])
@endsection
