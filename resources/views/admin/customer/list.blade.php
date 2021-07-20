@extends('layouts.admin')
@section('title','Khách hàng')
@section('header','Khách hàng')
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
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th class="text-right">
                    <a href="{{route('customer.create')}}">
                        <i class="fas fa-plus-square fa-3x"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>
                    {{$c->name}}</a>
                </td>
                <td>{{$c->phone_number}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->address}}</td>
                <td class="text-right">
                    <a class="btn btn-sm btn-warning" href="{{route('customer.edit',$c->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <br><br>
                    <a href="{{route('customer.destroy',$c->id)}}" class="btn btn-sm btn-danger btn-delete">
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
    <div>{{$customer->appends(request()->all())->links()}}</div>
</div>
@stop()