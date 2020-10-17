@extends('layouts.user-master')
@section('content')
    <br> <br>
    <div class="main-content">
        <div class="sectioncontent sectioncontent--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card" style="width: 300px;background-color: transparent;">
                        <div class="card-header">
                            <strong>Ürün Ekleme </strong> Formu
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleName">Ürün Adı</label>
                                    <input type="text" name="urun"  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Oyun Adı</label>
                                    <input type="text" name="gamename" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="exampleName">Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                                @csrf
                                <input type="file" name="photo" class="form-control">
                                <input type="submit" class="btn btn-block btn-input au-btn--blue" style="background-color: gray;color:black;width: 80px;" value="Yükle"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
