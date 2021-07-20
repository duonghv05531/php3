@extends('layouts.admin')
@section('title','Nhân viên')
@section('header','Nhân viên')
@section('content')
<?php
if (isset($_GET['key'])) {
    $key = $_GET['key'];
} else {
    $key = "";
}
?>
<div class="row">
    <div class="col-md-4">
        <form action="" class="form-inline">
            <div class="form-group">
                <input class="form-control" name="key" placeholder="Tìm kiếm bằng tên " value="{{$key}}">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <br><br>
    </div>


    @if(Session::has('msc'))
    <hr>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo: </strong> {{Session::get('msc')}}
    </div>
    <hr>
    @endif


    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên nhân viên</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Giới tính</th>
                <th>Chức vụ</th>

                <th class="text-right">
                    <a href="{{route('customer.create')}}">
                        <i class="fas fa-plus-square fa-3x"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->address}}</td>
                <td>
                    @if($u->gender === 1)
                    <p>Nam</p>
                    @else
                    <p>Nữ</p>
                    @endif
                </td>
                <td>{{$u->roles->name}}</td>
                <td class="text-right">
                    <a class="btn btn-sm btn-warning" href="{{route('user.edit',$u->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <br><br>
                    <a href="{{route('user.destroy',$u->id)}}" class="btn btn-sm btn-danger btn-delete">
                        <i class="fas fa-trash "></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="" method="post" id="form-delete">
        @csrf
        @method('DELETE')
    </form>
    <hr>
    <div>{{$user->appends(request()->all())->links()}}</div>
</div>
@stop()