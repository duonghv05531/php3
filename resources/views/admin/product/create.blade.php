@extends('layouts.admin')
@section('title','Create a product')
@section('content')


<div class="col-md-6" style="margin: auto;">
    <form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        <legend>Create a product</legend>
        <div class="form-group">
            <label for="">Tên</label>
            <input name="name" type="text" class="form-control" id="" placeholder="Tên">
            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Category</label><br>
            <select name="cate_id" id="input" class="form-control" required="required">
                @foreach($cate as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input name="file_upload" type="file" class="form-control" id="">
            @error('file_upload')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input name="price" type="text" class="form-control" id="" placeholder="Giá">
            @error('price')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input name="quantity" type="text" class="form-control" id="" placeholder="Số lượng">
            @error('quantity')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô tả tóm tắt</label>
            <input name="sort_desc" type="text" class="form-control" id="" placeholder="Tóm tắt">
            @error('sort_desc')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Mô tả chi tiết</label>
            <input name="detail" type="text" class="form-control" id="" placeholder="Chi tiết">
            @error('detail')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
        <a class="btn btn-danger" href="{{route('product.index')}}"><i class="far fa-window-close"></i></a>
    </form>
</div>

@endsection