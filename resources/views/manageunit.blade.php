@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="w3-container w3-center">
                    <h1>Basic Maintenance Request Information</h1>
                </div>
                <span class="w3-tag w3-small w3-theme-d5">Property Location: {{$property->name}} </span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Building Location: {{$building->name}} </span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Unit Name: {{$unit->name}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Unit Renter: {{$unit->renter}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Unit Maintenance: {{$request->maintenance}}</span>
                <br>
                @if($request->maintenance ==false)
                <span class="w3-tag w3-small w3-theme-d5">Unit Maintenance Status: {{"unresolved"}}
                    @else <span class="w3-tag w3-small w3-theme-d5">Unit Maintenance Status: {{"resolved"}}
                    @endif
                    </span>
                <br>
                <a href="{{ route('updateMaintenanceRequest',['id' => $request->id]) }}" button type="submit" class="btn btn-primary">Resolved</a>
            </div>
        </div>
    </div>
@endsection