@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="w3-container w3-center">
                    <h1>Basic Building Information</h1>
                </div>
                <span class="w3-tag w3-small w3-theme-d5">Property Name: {{$building->name}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Property Name: {{$building->tenant}}</span>

            </div>
        </div>
    </div>
@endsection