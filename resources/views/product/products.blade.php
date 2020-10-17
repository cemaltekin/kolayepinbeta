@extends('layouts.user-master')

@section('content')
                <table class="table">
                    <h4><i class="fa fa-angle-right"></i> Ürünler </h4>
                    <hr>
                    <thead>
                    <tr>
                        <th> Ürün Adı </th>
                        <th> Fiyatı </th>
                        <th> Güncelle </th>
                        <th> Sil </th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->urun}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil" onclick="location.href='updateproduct/{{$product->id}}'"></i></button>
                                  </td>
                            <td>
                                <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="location.href='/deleteproduct/{{$product->id}}'"></i></button>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
@endsection
