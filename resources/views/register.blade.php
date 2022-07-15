@extends('layouts.app')

@section('Title', 'Đăng Kí')

@if (session('register'))
    <p style="text-align: center;">{{ session('register') }}</p>
@endif 

@section('content')
    <div class="container">
        
        <h1>Đăng Kí</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="Username" class="form-label">
                Username
            </label>
            <input type="text" name="name" id="Username" class="form-control" placeholder="" value="">
            <label for="email" class="form-label">
                email
            </label>
            <input type="text" name="email" id="email" class="form-control" placeholder="" value="">

            <label for="Password" class="form-label">
                Password
            </label>
            <input type="text" name="password" id="Password" class="form-control" placeholder="" value="">
            
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary mg-t-10">Đăng kí</button>
        </form>
    </div>
@endsection 