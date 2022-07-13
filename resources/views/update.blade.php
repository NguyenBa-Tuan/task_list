@extends('layouts.app')

@section('Title')

@section('content')
    <div class="container">
        
        <h1>Chỉnh sửa công việc</h1>
        <form action="/update/{{$task->id}}" method="POST">
            @csrf
            <input type="text" name="name" id="work" class="form-control" placeholder="{{$task->name}}" value="{{$task->name}}">
            <button type="submit" class="btn btn-primary mg-t-10">Sửa cần làm</button>
        </form>
    </div>
@endsection