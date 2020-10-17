@extends('layouts.user-master')
@section('content')
    <br> <br>
    <div class="main-content">
        <div class="sectioncontent sectioncontent--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card" style="background-color: transparent;width: 250px; height: 50px;">
                        <div class="card-header">
                            <strong>Toplu Ürün Ekleme(Excel) </strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('product.import')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" class="form-control">
                              <center>  <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Yükle
                                  </button> </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
