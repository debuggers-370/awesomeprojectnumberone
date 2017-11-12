@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome! 🎉</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://www.w3schools.com/lib/w3.js"></script>

            <!-- Page Container -->
            <div style="max-width:1400px;margin-top:80px">

                <div class="w3-container w3-center">
                    <h1>Dashboard</h1>
                </div>
                <!-- The Grid -->
                <div class="w3-row">
                    <!-- Left Column -->
                    <div class="w3-col m3">
                        <!-- Profile -->
                        <div class="w3-card-2 w3-round w3-white">
                            <div class="w3-container">
                                <h4 class="w3-center">{{Auth::user()->name}}</h4>
                                <p class="w3-center"><?php
                                    \Cloudinary::config(array(
                                        "cloud_name" => "dwunmryjy",
                                        "api_key" => "392581967417787",
                                        "api_secret" => "Gfvlo-MD4baaYC877MUuglXCVsM"
                                    ));

                                    echo cl_image_tag("quintin_itwdco.jpg", array("transformation"=>array(
                                        array("width"=>106, "height"=>106, "radius"=>106),
                                        array("width"=>106, "crop"=>"scale")
                                    )));
                                    ?></p>
                                <hr>
                                <p><a href="profileEdit.html"><i class= "fa-fw w3-margin-right w3-text-theme"></i>Change profile
                                    </a></p>
                                <p><i class="w3-margin-right w3-text-theme"></i> option2</p>
                                <p><i class="fa-fw w3-margin-right w3-text-theme"></i> option3</p>
                            </div>
                        </div>
                        <br>

                        <!-- Accordion -->
                        <div class="w3-card-2 w3-round">
                            <div class="w3-white">
                                <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> modal1</button>
                                <div id="Demo1" class="w3-hide w3-container">
                                    <p>Some text..</p>
                                </div>
                                <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> modal2</button>
                                <div id="Demo2" class="w3-hide w3-container">
                                    <p>Some other text..</p>
                                </div>
                                <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>modal3</button>
                                <div id="Demo3" class="w3-hide w3-container">
                                    <p>Some other text..</p>
                                </div>
                            </div>
                        </div>
                        <br>

                        <!-- Interests -->
                        <div class="w3-card-2 w3-round w3-white w3-hide-small">
                            <div class="w3-container">
                                <p> Current Interests</p>

                                <form class="form-horizontal" method="POST" action="{{ route('updateinterests') }}">
                                    {{ csrf_field() }}

                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests}}</span>
                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests1}}</span>
                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests2}}</span>
                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests3}}</span>
                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests4}}</span>
                                    <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->interests5}}</span>

                                    <input id="interests" type="text" class="form-control" name="interests" value="{{ old('interests') }}" >

                                <button type="submit" class="btn btn-basic">
                                    Add interests
                                </button>
                                </form>
                                </p>
                            </div>
                        </div>
                        <br>

                        <!-- Alert Box -->
                        <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
                            <p><strong>Hey!</strong></p>
                            <p>Quintin sent friend request</p>
                        </div>

                        <!-- End Left Column -->
                    </div>

                    <!-- Middle Column -->
                    <div class="w3-col m7">

                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                            <p>Properties</p>
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

                            <a href= "{{ url('addproperty') }}" class="btn btn-info"> Add a property >></a>

                            <hr class="w3-clear">
                            <p>condo renovation</p>
                            <div class="w3-row-padding" style="margin:0 -16px">
                                <div class="w3-half">
                                    <img src="http://ei.marketwatch.com//Multimedia/2016/11/04/Photos/ZH/MW-EZ493_miami__20161104120841_ZH.jpg?uuid=f41fe4c4-a2a8-11e6-ac14-001cc448aede" style="width:100%" alt="condo1" class="w3-margin-bottom">
                                </div>
                                <div class="w3-half">
                                    <img src="http://www.miamicondoinvestments.com/wp-content/uploads/2017/06/villa-regina-lower-penthouse-condo-768x513.jpg" style="width:100%" alt="condo2" class="w3-margin-bottom">
                                </div>
                            </div>
                            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-check"></i>  accept</button>
                            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-remove"></i>  reject</button>
                        </div>

                        <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                            <img src= alt="buy" class="w3-left w3-circle w3-margin-right" style="width:60px">
                            <span class="w3-right w3-opacity">13 min</span>
                            <h4>James</h4><br>
                            <hr class="w3-clear">
                            <p>best deal of a lifetime</p>
                            <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-check"></i>  accept</button>
                            <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-remove"></i>  reject</button>
                        </div>
                        <!-- End Middle Column -->
                    </div>

                    <!-- Right Column -->
                    <div class="w3-col m2">
                        <div class="w3-card-2 w3-round w3-white w3-center">
                            <div class="w3-container">
                                <p>Unit maintenance</p>
                                <a href="{{ url('maintenance') }}" button type="submit" class="btn btn-primary">Request</a>
                            </div>
                        </div>
                        <br>


                        <div class="w3-card-2 w3-round w3-white w3-padding-16 w3-center">
                            <p>shopping cart</p>
                            <form class="form-horizontal" method="POST" action="{{ route('updateCart') }}">
                                {{ csrf_field() }}

                                <span class="w3-tag w3-small w3-theme-d5">{{Auth::user()->shoppingcart}}</span>

                                <input id="shoppingcart" type="text" class="form-control" name="shoppingcart" value="{{ old('shoppingcart') }}" >

                                <button type="submit" class="btn btn-basic">
                                    Add items
                                </button>

                            </form>
                        </div>
                        <br>

                        <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center">
                            <p><i class="fa fa-bug w3-xxlarge"></i></p>
                        </div>

                        <!-- End Right Column -->
                    </div>

                    <!-- End Grid -->
                </div>

                <footer class="w3-container">
                    <p class="w3-right w3-text-grey">&copy; 2017 {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
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

