@extends('layouts.app')
@section('title')
    User Profile
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>My Profile</h1></div>

                    <div class="card-body">
                        <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        <h1>{{ $user->name }}'s Account</h1>
                        <p><span>{{ $user->email }}</span></p>
                        <form enctype="multipart/form-data" action="/profile" method="post">
                            {{ csrf_field() }}
                            <label for="">Update profile</label>
                            <input type="file" name="avatar">
                            <input type="submit" class="pull-right btn  btn-sm btn-primary" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection