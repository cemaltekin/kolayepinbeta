@extends('layouts.user-master')
@section('content')

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Ürünler
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>photo</th>
                        <th>name</th>
                        <th class="text-right">price</th>
                        <th class="text-right">created_by</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>photo</th>
                        <th>gamename</th>
                        <th>urun</th>
                        <th class="text-right">price</th>
                        <th class="text-right">created_by</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td><img src="{{asset('/uploads/products/').'/'.$product->photo}}" alt="{{$product->name}}" width="200px" height="200px"/></td>
                            <td>{{$product->gamename}}</td>
                            <td>{{$product->urun}}</td>
                            <td class="text-right">{{$product->price}}</td>
                            <td class="text-right">{{$product->user[0]->name}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
