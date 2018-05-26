@extends('Layout.layout1')
  
@section('content')
    <h1>Welcome to Services</h1>
    @if(count($serviceprovided) >0 )
    <ul class="list-group">
        @foreach($serviceprovided as $services)
            <li class="list-group-item">{{$services}}</li>
        @endforeach
    </ul>
    @endif
@endsection
       
