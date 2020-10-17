
@extends('layouts.user-master')
@section('content')

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">İsim</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Kayıt Tarihi</th>
                        <th scope="col">Güncelle</th>
                        <th scope="col">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                <button class="btn btn-primary btn-xs"><i class="fa fa-pencil" onclick="location.href='update/{{$user->id}}'"></i></button>

                            </td>
                        <td> <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o" onclick="location.href='/delete/{{$user->id}}'"></i></button> </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
@endsection
