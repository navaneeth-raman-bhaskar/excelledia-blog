<div class="container">
<form action="{{$action}}" method="POST">
    @csrf
    @method($method)
    <div class="row">
        <div class="col form-group">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" value="{{ old('title') ?? $post->title}}">
            @error('title')<p class="text-danger">{{$errors->first('title')}}</p>@enderror
        </div>
    </div>
    <div class="row">
        <div class="col form-group">
            <label for="">Body</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{ old('body') ?? $post->body}}</textarea>
            @error('body')<p class="text-danger">{{$errors->first('body')}}</p>@enderror
        </div>
    </div>

    <button class="btn btn-primary">{{$text}}</button>
    <a class="btn btn-secondary" href="{{route('admin.posts.index')}}">Back</a>
</form>
</div>
