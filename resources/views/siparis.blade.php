@extends('layouts.user-master')
@section('content')
   <br> <br>
    <table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Kullanıcı</th>
        <th scope="col">Kullanıcı Maili</th>
        <th scope="col">Ürün</th>
        <th scope="col">Sipariş Tarihi </th>
        <th scope="col">Fiyat</th>
    </tr>
    </thead>
    <tbody>
    <br>
    @foreach($siparisler as $siparis)
        <tr>
            <th scope="row"></th>
            <td>{{$siparis->name}}</td>
            <td>{{$siparis->email}}</td>
            <td>{{$siparis->urun}}</td>
            <td>{{$siparis->created_at}}</td>
            <td>{{$siparis->price}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
@endsection
