@extends('Layout.layout1')

@section('content')


<div class = "container-fluid" style=" border-left: 6px solid lightblue;background-color: lightgrey;border-bottom: 6px solid grey;">
    <br><br><br><br><h1>{{$post->title}}</h1>
    <img style="width:100%" src = "/storage/cover_images/{{$post->cover_images}}"><br>
    <a href="/posts" class="btn btn-default">Go Back</a>
</div>
<div class = "container-fluid" style=" border-left: 6px solid lightblue;background-color: lightgrey;border-bottom: 6px solid grey;">
    {!!$post->body!!}<br>
    <hr>Written on {{$post->created_at}} by {{$post->user->name}}</hr>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostController@destroy' , $post->id], 'method' => 'Post' , 'class' => 'btn btn-default'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    </hr>
</div> 

@endsection