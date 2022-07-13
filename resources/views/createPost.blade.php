@extends('layouts.app')

@section('Title')

@section('content')
    <div class="container">
        
        <h1>Thêm bài viết mới</h1>
        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title" class="form-label">
                Title
            </label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" value="">

            <label for="content" class="form-label">
                Content
            </label>
            <input type="text" name="content" id="content" class="form-control" placeholder="" value="">

            <label for="slug" class="form-label">
                Slug
            </label>
            <input type="text" name="slug" id="slug" class="form-control" placeholder="" value="">

            <label for="file" class="form-label">
                Images
            </label>
            <input type="file" name="images" id="images" class="form-control" placeholder="" value="">
            
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary mg-t-10">Thêm bài viết</button>
        </form>
    </div>
@endsection