@extends('layouts.app')

@section('Title', 'bài viết')

@section('content')
    <div class="post-container">
        @if (session('store'))
            <p style="text-align: center;">{{session('store')}}</p>
        @endif
        <div class="container">
            <a href="/posts/create">Thêm mới</a>
        </div>

        <div class="container">
            <h1>Bài viết</h1>
        </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên</th>
                <th scope="col">ảnh</th>
                <th scope="col">Xóa</th>
                <th scope="col">sửa</th>
              </tr>
            </thead>
            <tbody>
                {{-- {{dd($data)}} --}}
                @foreach ($data as $key => $value)
                    <tr>
                        <th scope="row"> @php
                            echo $key + 1;
                        @endphp</th>
                        <td><a href="{{route('posts.show',$value->id )}}">{{$value->title}}</a></td>
                        <td><img src="{{asset('images/'. $value->images )}}" alt="img" srcset=""> </td>
                        <td>
                            <form action="{{route('posts.destroy',$value->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Xóa <i class="bi bi-x"></i></button>
                            </form>
                        </td>
                        <td><a href="{{route('posts.edit',$value->id )}}" class="btn btn-info">Sửa <i class="bi bi-arrow-counterclockwise"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection