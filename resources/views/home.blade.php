@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://www.w3schools.com/lib/w3.js"></script>


            <!-- Page Container -->
            <div style="max-width:1400px;margin-top:80px">
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Welcome! 🎉</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--You are logged in!--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-offset-5">
                    <h1 class="w3-text-white">Dashboard</h1>
                </div>
                <!-- The Grid -->
                <div class="w3-row">

                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-xlarge" >
                            <div class="w3-container" style="font-size: 15px">
                                <h4 class="w3-center" style="font-size: 15px">{{Auth::user()->name}}</h4>
                                <p class="w3-center" ><?php
                                    \Cloudinary::config(array(
                                        "cloud_name" => "dwunmryjy",
                                        "api_key" => "392581967417787",
                                        "api_secret" => "Gfvlo-MD4baaYC877MUuglXCVsM"
                                    ));
                                    echo cl_image_tag(Auth::user()->user_profile, array("transformation"=>array(
                                        array("width"=>106, "height"=>106, "radius"=>106),
                                        array("width"=>106, "crop"=>"scale")
                                    )));
                                    ?></p>
                                <hr>
                                <p>
                                    <a href="{{ route('changeProfile')}}"><i class= "fa-fw w3-margin-right w3-text-theme"></i>Change profile
                                    </a></p>

                            </div>
                        </div>
                        <br>

                        <!-- Accordion -->




                        <!-- Interests -->


                        <!-- Alert Box -->


                        <!-- End Left Column -->
                    </div>

                <?php

                $total = DB::table('units')->sum('rent');

                ?>

                    <!-- Middle Column -->

                    <div class="w3-col m7">

                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-xlarge"><br>
                            <ul>
                                <li style="font-size: 15px"> Monthly Income: ${{$total}}</li>
                                <li style="font-size: 15px"> Quarterly Income(Projected): ${{$total*3}}</li>
                                <li style="font-size: 15px"> Yearly Income(Projected): ${{$total*12}}</li>
                            </ul>

                        </div>
                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-xlarge"><br>
                            <p>Properties </p>
                            <img src= alt="sell" class="w3-left w3-circle w3-margin-right" style="width:60px">
                            <span class="w3-right w3-opacity"></span>

                            @php ($properties =  DB::table('properties')->get())
                                @foreach ($properties as $property)
                                    @if (($property->user_id) === (Auth::user()->id) )
                                    <a href="{{ route('manageproperty',['id' => $property->id]) }}" class="btn btn-submit"> {{$property->name}} </a>
                                        <br>
                                    @endif
                                @endforeach

                            <br>

                            <a href= "{{ url('addproperty') }}" class="btn btn-info"> Add a property 🏡</a>

                            <hr class="w3-clear">

                        </div>


                        <!-- End Middle Column -->
                    </div>

                    <!-- Right Column -->
                    <div class="w3-col m2">
                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-xlarge" style="width:150%;">
                        <div class="container" style="font-size: 15px">
                                <p>Unit Maintenance</p>
                                <a href="{{ route('viewmaintenance') }}" button type="submit" class="btn btn-info">View
                                    requests</a>
                            </div>
                        </div>
                        <br>







                        <!-- End Right Column -->
                    </div>

                    <!-- End Grid -->
                </div>

                <footer class="w3-container">
                    <p class="w3-text-white" style="text-align: center">&copy; 2017 {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                </footer>
                <!-- End Page Container -->
            </div>
            <br>


            <script>
                w3.includeHTML();
                // Accordion
                function myFunction(id) {
                    var x = document.getElementById(id);
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                        x.previousElementSibling.className += " w3-theme-d1";
                    } else {
                        x.className = x.className.replace("w3-show", "");
                        x.previousElementSibling.className =
                            x.previousElementSibling.className.replace(" w3-theme-d1", "");
                    }
                }
                // Used to toggle the menu on smaller screens when clicking on the menu button
                function openNav() {
                    var x = document.getElementById("navDemo");
                    if (x.className.indexOf("w3-show") == -1) {
                        x.className += " w3-show";
                    } else {
                        x.className = x.className.replace(" w3-show", "");
                    }
                }
            </script>






        </div>
    </div>
</div>


@endsection

