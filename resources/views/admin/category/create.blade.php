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
            @error('name')
            <small>{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('category.index')}}"><i class="far fa-window-close"></i></a>
    </form>
</div>

@endsection