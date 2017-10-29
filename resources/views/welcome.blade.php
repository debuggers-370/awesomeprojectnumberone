@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">Welcome to ManageIT! 🏡🏡🏡</div>

                </div>
                @if(Auth::guest())
                    <a href= "{{ URL::route('login')}}" class="btn btn-info"> Login>></a>
                @endif
                @if(Auth::check())
                    <a href= "profile.html" class="btn btn-info"> Go to Profile>></a>
                @endif

                <img src = {{asset('img/old-house-hotel-exterior.jpg')}}>
            </div>
        </div>
    </div>
@endsection