@extends('layouts.user-master')
@section('content')
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Kullanıcı Güncelleme </h4>
            <div class="form-panel" style="width: 400px;height: 350px;background-color:#dee1e6;">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form" method="post" action="/update/{{$user->id}}">
                        <div class="form-group "><br>
                            <center>  <label for="name" class="control-label col-lg-2"><br>Name</label> </center>
                            <div class="col-lg-10"> <br>
                      <center>  <input class=" form-control" id="name" name="name" value="{{$user->name}}" minlength="2"
                                       type="text" required/></center>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="email" class="control-label col-lg-2">E-Mail</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="email" type="email" name="email"
                                       value="{{$user->email}}"
                                       required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                @csrf
                                <button class="btn btn-theme" type="submit">Save</button>
                                <button class="btn btn-theme04" type="button" onclick="location.href='users'">Cancel
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
