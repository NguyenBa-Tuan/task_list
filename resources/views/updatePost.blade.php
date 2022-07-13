@extends('layouts.app')

@section('Title')

@section('content')
    <div class="container">
        
        <h1>Sửa bài viết</h1>
        <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <label for="title" class="form-label">
                Title
            </label>
            <input type="text" name="title" id="title" class="form-control" placeholder="{{$post->title}}" value="{{$post->title}}">

            <label for="content" class="form-label">
                Content
            </label>
            <input type="text" name="content" id="content" class="form-control" placeholder="{{$post->content}}" value="{{$post->content}}">

            <label for="slug" class="form-label">
                Slug
            </label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="{{$post->slug}}" value="{{$post->slug}}">

            <label for="file" class="form-label">
                Images
            </label>
            <input type="file" name="images" id="images">
            
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary mg-t-10 form-control">Thêm bài viết</button>
        </form>
    </div>
@endsection