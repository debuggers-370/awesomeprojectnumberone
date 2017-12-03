@extends('layouts.app')



@section('content')
    <div class="container w3-white">
        <div class="row w3-white">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default border border-primary" >
                <div class="panel-heading">
                    <h1>Basic Building Information</h1>
                </div>
                <div class="panel-body">
                <span class="w3-tag w3-small w3-theme-d5">Property Location: {{$property->name}} </span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Building Name: {{$building->name}} </span>
                {{--<br>--}}
                {{--<span class="w3-tag w3-small w3-theme-d5">Building Tenant: {{$building->tenant}}</span>--}}
                    {{--<br>--}}
                    <h1>Units</h1>
                @php ($units =  DB::table('units')->get())
                @foreach ($units as $unit)
                    @if (($unit->building_id) === ($building->id) )
                        <a href="{{ route('manageunit',['id' => $unit->id]) }}" class="btn btn-submit"> {{$unit->name}} </a>
                        <br>
                    @endif
                @endforeach
                </div>
                    <a href="{{ url('addunit',['id' => $building->id]) }}" class="btn btn-info"> Add a Unit >></a>
                </div>
            </div>
        </div>
    </div>
@endsection