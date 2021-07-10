@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('content')

<div class="col-md-6" style="margin: auto;">
    <form action="{{route('category.update',$cate->id)}}" method="POST" role="form">
        @csrf
        @method('PUT')
        <legend>Sửa danh mục {{$cate->name}}</legend>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input name="name" type="text" class="form-control" id="" value="{{$cate->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>

@endsection