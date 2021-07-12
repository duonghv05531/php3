@extends('layouts.admin')
@section('title','Sửa sản phẩm')
@section('content')
<div class="col-md-6" style="margin: auto;">
    <form action="{{route('product.update',$pro->id)}}" method="POST" role="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <legend>Sửa sản phẩm: {{$pro->name}}</legend>

        <div class="form-group">
            <label for="">Tên</label>
            <input name="name" type="text" class="form-control" id="" placeholder="Tên" value="{{$pro->name}}">
        </div>
        <div class="form-group">
            <label for="">Category</label><br>
            <select name="cate_id" id="input" class="form-control" required="required">
                @foreach($cate as $c)
                @if($c->id == $pro->cate_id)
                <option selected value="{{$c->id}}">{{$c->name}}</option>
                @else
                <option value="{{$c->id}}">{{$c->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Ảnh</label><br>
            <img class="w-100" src="{{asset("$pro->image")}}" alt=""><br><br>
            <input name="image" type="file" class="form-control" id="">
            <input name="image" type="hidden" value="{{$pro->image}}">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input name="price" type="text" class="form-control" id="" placeholder="Giá" value="{{$pro->price}}">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input name="quantity" type="text" class="form-control" id="" placeholder="Số lượng" value="{{$pro->quantity}}">
        </div>


        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection