@extends('layouts.admin')
@section('title','Sản phẩm')
@section('header','Sản phẩm')
@section('content')
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>
                <a class="btn btn-primary" href="{{route('product.create')}}">Thêm</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($pro as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>
                <a href="{{route('product.edit',$p->id)}}">{{$p->name}}</a> <br><br>
            </td>
            <td><img src="{{asset("$p->image")}}" alt="" width="100"></td>
            <td>{{$p->price}}</td>
            <td>{{$p->quantity}}</td>
            <td>
                <form action="{{asset('')}}product/{{$p->id}}" method="post">
                    {{@csrf_field()}}
                    {{@method_field('delete')}}
                    <button class="btn btn-danger" type="submit">Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection