@extends('layouts.layout')
@section('content')
<h3>Blog Posts</h3>
<table class="table">
    <thead>
    <tr>
        <th>Sl. No.</th>
        <th>Title</th>
        <th>Body</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$lopp->iteration}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->render_body}}</td>
            <td>
                <a href="{{route('admin.posts.show',$post)}}">View</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>

    </tfoot>
</table>
@endsection
