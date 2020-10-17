@extends('layouts.user-master')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Ürün</th>
            <th scope="col">Fiyat</th>
            <th scope="col">İşlem</th>
        </tr>
        </thead>
        <tbody>
        <br>
        @foreach( $contents as $content  )
            <tr>
                <th scope="row"> <img src="{{asset('/uploads/products/').'/'.$content->photo}}" width="70"/> </th>
                <td>{{$content->urun}}</td>
                <td>{{$content->price}}</td>
                <td>    <td>        <button class="button">SİPARİŞ VER &nbsp; -<i class="fa fa-angle-right" onclick="location.href='/siparis/{{$content->id}}'"></i> </button></td></td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
