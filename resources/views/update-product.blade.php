@extends('layouts.user-master')
@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Ürün Güncelle </h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form" method="post" action="/updateproduct/{{$product->id}}">
                        <div class="form-group ">
                            <label for="name" class="control-label col-lg-2">Ürün Adı</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="urun" name="urun" value="{{$product->urun}}" minlength="2"
                                       type="text" required/>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">Price</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="price" type="text" name="price"
                                       value="{{$product->price}}"
                                       required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                @csrf
                                <button class="btn btn-theme" type="submit">Save</button>
                                <button class="btn btn-theme04" type="button" onclick="location.href='products'">Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>
@endsection
