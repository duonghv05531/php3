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
            <input name="image" type="file" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input name="price" type="text" class="form-control" id="" placeholder="Giá">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input name="quantity" type="text" class="form-control" id="" placeholder="Số lượng">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection