@extends('layouts.admin')
@section('title','Dịch vụ')
@section('header','Dịch vụ')
@section('content')

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Mô tả</th>
            <th>Giá</th>
            <th>
                <a class="btn btn-primary" href="{{route('service.create')}}">Thêm</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($service as $s)
        <tr>
            <td><a href="{{route('service.edit',$s->id)}}">{{$s->name}}</a></td>
            <td><i class="flaticon-{{$s->image}} display-1 text-primary me-4"></i></td>
            <td>{{$s->desc}}</td>
            <td>{{$s->price}}</td>
            <td>
                <form action="{{asset('')}}service/$s->id" method="POST">
                    {{@csrf_field()}}
                    {{@method_field('PUT')}}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Xác nhận xóa danh mục này?')">
                        Xóa
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection