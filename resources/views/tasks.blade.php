@extends('layouts.app')

@section('Title', 'Task list')

@section('content')
<div class="container">
    <h2>Thêm việc cần làm</h2>
    <form action="/" method="post">
        @csrf
        <input type="text" name="name" id="work" class="form-control" placeholder="Nhập việc bạn cần làm">
        <button type="submit" class="btn btn-primary mg-t-10">Thêm việc cần làm</button>
    </form>

</div>

<div class="container list">

    <h2>Việc cần làm</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Việc cần làm</th>
            <th scope="col">Xóa</th>
            <th scope="col">sửa</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($data as $key => $value)
                <tr>
                    <th scope="row"> @php
                        echo $key + 1;
                    @endphp</th>
                    <td>{{$value->name}}</td>
                    <td><a href="/delete/{{$value->id}}" class="btn btn-danger">Xóa <i class="bi bi-x"></i></a></td>
                    <td><a href="/update/{{$value->id}}" class="btn btn-info">Sửa <i class="bi bi-arrow-counterclockwise"></i></a></td>
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
@endsection