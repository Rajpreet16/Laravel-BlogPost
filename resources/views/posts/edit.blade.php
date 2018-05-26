@extends('Layout.layout1')
<br><br><br>
@section('content')
    <br><br><br><h1>Edit Post</h1><br>
    {!! Form::open(['action' => ['PostController@update' , $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class = "form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class = "form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body',$post->body,['id' => 'article-ckeditor','class' => 'form-control','placeholder' => 'BOdy'])}}
        </div>
        <div class = "forrm-group">
                {{Form::file('cover_image' )}}
        </div><br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection