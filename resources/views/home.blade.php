@extends('Layout.layout1')
<br><br><br>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a><br>
                    <br><h3>Your Blog Posts</h3>
                    @if(count($posts) >0 )
                        <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action' => ['PostController@destroy' , $post->id], 'method' => 'Post' , 'class' => 'btn btn-default'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                    @else
                                You Have No Post
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
