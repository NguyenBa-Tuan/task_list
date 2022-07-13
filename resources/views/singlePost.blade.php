@extends('layouts.app')

@section('Title')

@section('content')
    <div class="container">
        
        <h1>{{$post->title}}</h1>

        <img src="{{asset('images/' . $post->images)}}" alt="" srcset="">

        <p>{{$post->content}}</p>

    </div>
@endsection