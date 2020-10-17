@extends('layouts.user-master')
@section('content')
    <br> <br>
    <div class="chat-room-head" style="background-color: #4ecdc4;width:445px;margin-left: 370px;margin-right: 15px;"> <center>  <h3> Sevilen Ürünler  </h3> </center> </div> <br>
    @foreach($randoms as $random)
        <div class="col-md-4 col-sm-4 mb" >
            <div class="darkblue-panel pn" style="background-color: #b9bcbc">
                <div class="darkblue-header">
                    <h5>{{$random->urun}}</h5>
                </div>
                    <footer>
                    <div class="centered">
                        <img src="{{asset('/uploads/products/').'/'.$random->photo}}" width="170"/>
                    </div>
                </footer>
            </div>
            <!--  /darkblue panel -->
        </div>
    @endforeach
@endsection
