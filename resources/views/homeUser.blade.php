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
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

                <!-- Page Container -->
                <div style="max-width:1400px;margin-top:80px">
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
                                    <p class="w3-center"><img src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-space-astronaut.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
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



                            <div class="w3-container w3-card-2 w3-white w3-round w3-margin">
                                Expenses
                                <div id="chart">

                                </div>
                            </div>

                            <?php
                            $perunit = null;
                            ?>

                            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                                <form class="form-horizontal" method="POST" action="{{ route('updateUserUnit') }}">
                                    {{ csrf_field() }}
                                    <p>My Unit</p>
                                    @php ($units =  DB::table('units')->get())
                                    @foreach ($units as $unit)
                                        @if(($unit->id) === (Auth::user()->personalunit) )
                                            @php($perunit = $unit)
                                            <a style="color:blue; font-size:120%;" href="{{ route('manageunit',['id' => $unit->id]) }}"> {{$unit->name}} </a>
                                        @endif
                                   @endforeach
                                    <br>
                                <img src= alt="sell" class="w3-left w3-circle w3-margin-right" style="width:60px">
                                <span class="w3-right w3-opacity"></span>
                                    <br>

                                    {!! Form::open() !!}

                                    <div class="form-group">
                                        <label for="property" class="col-md-4 control-label">Property</label>
                                        {!! Form::select('property_id',[''=>'--- Select Property ---']+$properties,null,['class'=>'form-control']) !!}
                                    </div>


                                    <div class="form-group">
                                        <label for="building" class="col-md-4 control-label">Building</label>
                                        {!! Form::select('building_id',[''=>'--- Select Building ---'],null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="unit" class="col-md-4 control-label">Unit</label>
                                        {!! Form::select('unit_id',[''=>'--- Select Unit ---'],null,['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>

                                    {!! Form::close() !!}
                                </form>
                            </div>

                            <?php
                            if ($perunit == null)
                            {
                                echo "You're unit is not registered";
                            } else {
                                $perunit = Auth::user()->personalunit;
                                $gas = DB::table('units')->select('gas')->where('id', $perunit)->first();
                                $water = DB::table('units')->select('water')->where('id', $perunit)->first();
                                $electricity = DB::table('units')->select('electricity')->where('id', $perunit)->first();
                                $damages = DB::table('units')->select('damages')->where('id', $perunit)->first();



                            $expenses = Lava::DataTable();

                            $expenses->addStringColumn('Monthly Expenses')
                                ->addNumberColumn('$')
                                ->addRow(array('Gas', $gas))
                                ->addRow(array('Water', $water))
                                ->addRow(array('Electricity', $electricity))
                                ->addRow(array('Damages', $damages));
                            $chart = Lava::BarChart('Expenses', $expenses);

                            echo Lava::render('BarChart','Expenses','chart');
                            }
                            ?>

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
                            <div class="w3-card-2 w3-round w3-white w3-center" style="width:150%;">
                                <div class="w3-container">
                                    <p>Unit maintenance</p>
                                    <a href="{{ url('maintenance',['id' => Auth::user()->personalunit]) }}" button type="submit" class="btn btn-primary">Request</a>
                                </div>
                            </div>
                            <br>





                            <div class="w3-card-2 w3-round w3-white w3-padding-32 w3-center" style="width:150%;">
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


            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script type="text/javascript">
        $("select[name='property_id']").change(function(){
            var property_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-building') ?>",
                method: 'POST',
                data: {property_id:property_id, _token:token},
                success: function(data) {
                    $("select[name='building_id']").html('');
                    $("select[name='building_id']").html(data.options);
                }
            });
        });
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <script type="text/javascript">
        $("select[name='building_id']").change(function(){
            var building_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-unit') ?>",
                method: 'POST',
                data: {building_id:building_id, _token:token},
                success: function(data) {
                    $("select[name='unit_id']").html('');
                    $("select[name='unit_id']").html(data.options);
                }
            });
        });
    </script>
@stop

