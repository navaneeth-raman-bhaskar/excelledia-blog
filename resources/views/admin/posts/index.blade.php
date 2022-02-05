@extends('layouts.layout')
@section('content')
    <h3>Blog Posts</h3>
    <a class="btn btn-primary" href="{{route('admin.posts.create')}}">Create Post</a>

    <table class="table">
        <thead>
        <tr>
            <th>Sl. No.</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="posts">
        @foreach($posts as $post)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->render_body}}</td>
                <td>
                    <a href="{{route('admin.posts.show',$post)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('admin.posts.edit',$post)}}" class="btn btn-success">Edit</a>
                    <a class="delete btn btn-danger" href="{{route('admin.posts.destroy',$post)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col">
            {{$posts->links()}}
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function () {
            $('.posts').on('click', '.delete', function (e) {
                e.preventDefault();
                let button = $(this);
                $.post(button.attr('href'),
                    {
                        _method: "DELETE",
                    },
                    function (data, status) {
                        //alert("Data: " + data + "\nStatus: " + status);
                        button.closest('tr').remove();
                    });
            })
        })
    </script>
@endpush
