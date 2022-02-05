<form action="{{$action}}" method="POST">
    @csrf
    @method($method)
    <div class="row">
        <div class="col-12">
            <input type="text" name="title" value="{{$post->title}}">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <textarea name="body" id="body" cols="30" rows="10">
                {{$post->body}}
            </textarea>
        </div>
    </div>

    <button>{{$text}}</button>
</form>
