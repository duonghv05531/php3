@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('header','Danh mục sản phẩm')
@section('content')
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>
                <a class="btn btn-primary" href="{{route('category.create')}}">Thêm</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($cate as $c)
        <tr>
            <td> <a href="{{route('category.edit',$c->id)}}">{{$c->id}}</a></td>
            <td><a href="{{route('category.edit',$c->id)}}">{{$c->name}}</a></td>
            <td>
                <form action="{{asset('')}}category/{{$c->id}}" method="post">
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