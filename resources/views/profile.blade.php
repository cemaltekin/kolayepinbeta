@extends('layouts.user-master')
@section('content')
    <br> <br> <br> <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="/uploads/avatars/{{$user->avatar}}" class="img-circle" style="width:150px;height:150px;float:left;margin-right:25px;">
                <h2> {{$user->name}}'s Profile</h2>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label> Update Profile İmage </label> <br>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">

                </form>

            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="col-md-10 col-md-offset-1">
                <form enctype="multipart/form-data" action="/update/{id}" method="POST">
                  Your Name : <input class="form-control" id="disabledInput" type="text" placeholder="{{$user->name}}" disabled>
<br>                    Your E-Mail Adress : <input class="form-control" id="disabledInput" type="text" placeholder="{{$user->email}}" disabled>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                </form>
            </div>
        </div>
    </div>
@endsection
