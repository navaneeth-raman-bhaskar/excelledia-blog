<div style="margin-left: 1.5rem">
@foreach($data as $comment)
    <p>{{$comment->comment}}</p>
    @include('admin.posts.partials.comments',['data'=>$comment->replies])
@endforeach
</div>
