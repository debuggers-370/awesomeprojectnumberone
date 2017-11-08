@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="w3-container w3-center">
                    <h1>Basic Building Information</h1>
                </div>
                <span class="w3-tag w3-small w3-theme-d5">Building Name: {{$building->name}}</span>
                <br>
                <span class="w3-tag w3-small w3-theme-d5">Building tenant: {{$building->tenant}}</span>

                <br>
                <h1>Units</h1>
                <br>
               {{-- @php ($units =  DB::table('units')->get())
                @foreach ($units as $unit)
                    @if (($unit->building_id) === ($building->id) )
                        <a href="{{ route('manageUnits',['id' => $building->id]) }}" class="btn btn-submit"> {{$unit->unit_number}} </a>
                        <br>
                    @endif
                @endforeach


                <a href="{{ url('addunit',['id' => $building->id]) }}" class="btn btn-info"> Add a Unit >></a>
--}}
            </div>
        </div>
    </div>
@endsection