@extends('layouts.admin')
@section('title','Web Setting')
@section('header','Web Setting')
@section('content')

<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Logo</th>
            <th>Hotline</th>
            <th>Email</th>
            <th>Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($set as $s)
        <tr>
            <td>{{$s->logo}}</td>
            <td>{{$s->hotline}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->address}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection