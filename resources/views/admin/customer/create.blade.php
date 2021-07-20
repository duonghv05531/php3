@extends('layouts.admin')
@section('title','Create a customer')
@section('content')


<div class="col-md-6" style="margin: auto;">
    <form action="{{route('customer.store')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <legend>Create a customer</legend>
        <div class="form-group">
            <label for="">Tên</label>
            <input name="name" type="text" class="form-control" id="" placeholder="Tên">
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input name="phone_number" type="text" class="form-control" id="" placeholder="Số điện thoại">
            @error('phone_number')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input name="email" type="text" class="form-control" id="" placeholder="Email">
            @error('email')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input name="address" type="text" class="form-control" id="" placeholder="Địa chỉ">
            @error('address')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('product.index')}}"><i class="far fa-window-close"></i></a>
    </form>
</div>

@endsection