<?php
//resouces/views/products/index.blade.php
?>
@extends('layouts.main')
@section('title', 'Trang liệt kê')
@section('content')
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Avatar</th>
            <th></th>
        </tr>
        @foreach($products AS $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>
                    <img src="../uploads/{{$product->avatar}}"
                         height="80px"/>
                </td>
                <td>
                    <a href="{{ url('product/update/' . $product->id) }}">
                        Update
                    </a>
                    <a href="{{ url('product/delete/' . $product->id) }}"
                       onclick="return confirm('Are you delete?')">
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{--Hiển thi phân trang --}}
    {{ $products->links() }}
@endsection

