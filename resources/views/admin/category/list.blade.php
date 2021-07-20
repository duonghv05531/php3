@extends('layouts.admin')
@section('title','Danh mục sản phẩm')
@section('header','Danh mục sản phẩm')
@section('content')

<div class="row">
    <div class="col-md-4">
        <form action="" class="form-inline">
            <div class="form-group">
                <input class="form-control" name="key" placeholder="Tìm kiếm bằng tên sản phẩm">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </form>
        <br><br>
    </div>
    <hr>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Số lượng sản phẩm</th>
                <th>Ngày tạo</th>
                <th>
                    <a class="btn btn-primary" href="{{route('category.create')}}">Thêm</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($cate as $c)
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->product->count()}}</td>
                <td>{{$c->created_at->format('m-d-y')}}</td>
                <td>
                    <a class="btn btn-small btn-warning" href="{{route('category.edit',$c->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('category.destroy',$c->id)}}" class="btn btn-sm btn-danger btn-delete">
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
</div>
@stop()