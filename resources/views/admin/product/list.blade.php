@extends('layouts.admin')
@section('title','Sản phẩm')
@section('header','Sản phẩm')
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
    </div>


    <hr>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Số lượng</th>
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
                <td><img src="{{asset("$p->image")}}" alt="" width="100"></td>
                <td>{{$p->price}}</td>
                <td>{{$p->quantity}}</td>
                <td class="text-right">
                    <a class="btn btn-sm btn-warning" href="{{route('product.edit',$p->id)}}">
                        <i class="fas fa-edit"></i>
                    </a> <br><br>


                    <a href="{{route('product.destroy',$p->id)}}" class="btn btn-sm btn-danger btn-delete" onclick="del()">
                        <i class="fas fa-trash "></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="" method="post" id="form-delete">
        @csrf_field @method_field('DELETE')
    </form>
    <hr>
    <div>{{$pro->appends(request()->all())->links()}}</div>
</div>
@endsection

@section('js')

<script>
    function del() {
        var _href = $('.btn-delete').attr('href');
        $('form#form-delete').attr('action', _href);
        var action = $('form#form-delete').attr('action');
        if (confirm('Bạn có muốn xóa ?')) {
            $('form#form-delete').submit();
        }
    }
</script>

@stop()