@extends('layouts.admin')
@section('title','Sản phẩm')
@section('header','Sản phẩm')
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
                <input class="form-control" name="key" placeholder="Tìm kiếm bằng tên sản phẩm" value="{{$key}}">
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
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
                <th>Mô tả tóm tắt</th>
                <th>Mô tả</th>
                <th>Lượt xem</th>
                <th>Đánh giá</th>
                <th>Người tạo</th>
                <th class="text-right">
                    <a href="{{route('product.create')}}">
                        <i class="fas fa-plus-square fa-3x"></i>
                    </a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($pro as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>
                    {{$p->name}}</a>
                </td>
                <td>{{$p->category->name}}</td>
                <td><img src="{{asset($p->image)}}" alt="" width="100"></td>
                <td>{{$p->price}}</td>
                <td>{{$p->quantity}}</td>
                <td>{{$p->sort_desc}}</td>
                <td>{{$p->detail}}</td>
                <td>{{$p->view}}</td>
                <td>{{$p->star}}</td>
                <td>{{$p->created_by}}</td>
                <td class="text-right">
                    <a class="btn btn-sm btn-warning" href="{{route('product.edit',$p->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <br><br>
                    <a href="{{route('product.destroy',$p->id)}}" class="btn btn-sm btn-danger btn-delete">
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
    <div>{{$pro->appends(request()->all())->links()}}</div>
</div>
@endsection