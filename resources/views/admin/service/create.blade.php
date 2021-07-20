@extends('layouts.admin')
@section('title','Dịch vụ')
@section('content')
<div class="col-md-6" style="margin:auto">
    <form action="{{route('service.store')}}" method="POST" role="form">
        @csrf
        <legend>Thêm mới dịch vụ</legend>

        <div class="form-group">
            <label for="">Tên dịch vụ</label>
            <input name="name" type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Ảnh dịch vụ</label>
            <input name="image" type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input name="desc" type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input name="price" type="text" class="form-control" id="" placeholder="Input field">
        </div>

        <button class="btn btn-primary" type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>


@endsection