@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">

                    @if(Auth::guest())
                            <div class="panel-heading">Welcome to ManageIT! 🏡🏡🏡</div>
                    @endif
                    @if(Auth::check())
                            <div class="panel-heading">Welcome, {{Auth::user()->name}}!</div>
                    @endif
                </div>
                <div>
                @if(Auth::guest())
                    <a href= "{{ URL::route('login')}}" class="btn btn-info"> Login>></a>
                @endif
                @if(Auth::check())
                    <a href= "{{ url('home') }}" class="btn btn-info"> Go to Dashboard 💼 >></a>
                @endif
                <a href= "{{ url('about') }}" class="btn btn-info"> Learn more about us! 📖 >></a>
                </div>

                <img src = {{asset('img/old-house-hotel-exterior.jpg')}} width="75%" >
            </div>
        </div>
    </div>
@endsection