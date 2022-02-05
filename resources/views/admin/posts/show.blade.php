@extends('layouts.layout')
@section('content')
    <h3>Blog Post</h3>
    <div class="row">
        <div class="col-2">
            Title:
        </div>
        <div class="col-10">
           {{$post->title}}
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            Body:
        </div>
        <div class="col-10">
            {{$post->body}}
        </div>
    </div>
    <h4>Comments</h4>
    @forelse($post->comments as $comment)
        <p>{{$comment->comment}}</p>
        @include('admin.posts.partials.comments',['data'=>$comment->replies])
    @empty
        <p class="text-muted">No comments yet</p>
    @endforelse
@endsection
