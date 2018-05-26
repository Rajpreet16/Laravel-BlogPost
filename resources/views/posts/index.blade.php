@extends('Layout.layout1')
<br><br><br>
@section('content')
    <br><br><br><br><h1>POSTS</h1><br>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class = "container-fluid" style=" border-left: 6px solid lightblue;background-color: lightgrey;border-bottom: 6px solid grey;">
                <div class ="row">
                    <div class ="col-md-4 col-sm-4">
                    <img style="width:100%" src = "/storage/cover_images/{{$post->cover_images}}">
                    </div>  
                    <div class ="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}" style ="color: black;">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>    
                </div>
            </div>
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No Post</p>
    @endif
@endsection