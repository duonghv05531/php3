@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('content')

<div class="col-md-6" style="margin: auto;">
    <form action="{{route('category.store')}}" method="POST" role="form">
        @csrf
        <legend>Thêm danh mục</legend>
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input name="name" type="text" class="form-control" id="">
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>

@endsection