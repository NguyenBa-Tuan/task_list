@extends('layouts.app')

@section('Title', 'Đăng Nhập')

@if (session('logout'))
    {{session('logout')}}
@endif

@section('content')
    <div class="container">
        <a href="{{route('login.logout')}}">Đăng xuất</a>
        <h1>Đăng Nhập</h1>
        <form action="{{route('login.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title" class="form-label">
                Username
            </label>
            <input type="text" name="name" id="title" class="form-control" placeholder="" value="">

            <label for="content" class="form-label">
                Password
            </label>
            <input type="text" name="password" id="content" class="form-control" placeholder="" value="">
            
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary mg-t-10">Đăng nhập</button>
        </form>
        
    </div>
@endsection 