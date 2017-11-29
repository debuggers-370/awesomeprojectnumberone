@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Maintenance Requests</div>
                        <div class="panel-body">
                            @foreach($properties as $property)
                                <p style="font-size:160%;">Property: {{$property->name}} </p>
                                    @foreach($buildings as $building)
                                        @if($building->property_id === $property->id)
                                        <p style="font-size:120%;"> {{$building->name}} </p>
                                        @endif
                                            @foreach($units as $unit)

                                                   @foreach($requests as $request)
                                                        @if($request->unit_id === $unit ->id && $unit->building_id === $building->id && $building->property_id === $property->id)
                                                            @if($request->status == false)
                                                             {{$unit->name}}: {{$request->maintenance}} {{"-------requests unresolved"}}
                                                                <br>
                                                                @else
                                                                 {{$unit->name}}: {{$request->maintenance}} {{"------requests resolved"}}
                                                                <br>
                                                            @endif
                                                        @endif
                                                   @endforeach

                                            @endforeach
                                    @endforeach
                                    <br>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection







