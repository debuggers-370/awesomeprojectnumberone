@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="w3-container w3-center">
                    <h1>Basic Property Information</h1>
                </div>

                <span class="w3-tag w3-small w3-theme-d5">Property Name: {{$property->name}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Property Address: {{$property->address}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Property Owner: {{$property->owner}}</span>
                <br>
                <h1>Buildings</h1>
                <br>
                @php ($buildings =  DB::table('buildings')->get())
                @foreach ($buildings as $building)
                    @if (($building->property_id) === ($property->id) )
                        <a href="{{ route('managebuilding',['id' => $building->id]) }}" class="btn btn-submit"> {{$building->name}} </a>
                        <br>
                    @endif
                @endforeach


                <a href="{{ url('addbuilding',['id' => $property->id]) }}" class="btn btn-info"> Add a Building >></a>

            </div>
        </div>
    </div>
@endsection

<?php
/*\Cloudinary::config(array(
    "cloud_name" => "dwunmryjy",
    "api_key" => "392581967417787",
    "api_secret" => "Gfvlo-MD4baaYC877MUuglXCVsM"
));
echo cl_image_tag("sample.jpg", array( "alt" => "Sample Image" ));

*/?>
