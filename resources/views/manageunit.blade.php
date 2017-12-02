@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default border border-primary" >
                <div class="w3-container w3-center">
                    <h1>Basic Unit Information</h1>
                </div>
                <span class="w3-tag w3-small w3-theme-d5">Property Location: {{$property->name}} </span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Building Location: {{$building->name}} </span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Unit Name: {{$unit->name}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Unit Renter: {{$unit->renter}}</span>
                <br>
                @php ($mrequests =  DB::table('requests')->get())
                    @foreach($mrequests as $mrequest)
                        @if($mrequest->unit_id === $unit->id && $mrequest->status === 0)
                            <span class="w3-tag w3-small w3-theme-d5">Unit Maintenance: {{$mrequest->maintenance}}  <a href="{{ route('updateMaintenanceRequest',['id' => $mrequest->id]) }}" button type="submit" class="btn btn-primary">Resolve</a></span>
                            <br>
                        @endif
                    @endforeach

                <br>
                </div>
            </div>
        </div>
    </div>
@endsection