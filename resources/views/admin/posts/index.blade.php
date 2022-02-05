@extends('layouts.layout')
@section('content')
    <h3>Blog Posts</h3>
    <a href="{{route('admin.posts.create')}}">Create Post</a>

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
                    <a href="{{route('admin.posts.edit',$post)}}?_method=DELETE">Edit</a>
                    <a class="delete" href="{{route('admin.posts.destroy',$post)}}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>

        </tfoot>
    </table>
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
