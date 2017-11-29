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
                    <div class="w3-container w3-center" style="color: white">
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

                                </div>
                            </div>
                            <br>

                            <!-- Accordion -->




                            <!-- Interests -->


                            <!-- Alert Box -->


                            <!-- End Left Column -->
                        </div>
                        <!-- Middle Column -->
                        <div class="w3-col m7">



                            <div class="w3-container w3-card-2 w3-white w3-round w3-margin">
                                Expenses
                                <div id="chart">
                                            @if((Auth::user()->personalunit != 0))
                                            <?php
                                            $unit = DB::table('units')->where('id', Auth::user()->personalunit)->first();

                                            $expenses = Lava::DataTable();

                                            $expenses->addStringColumn('Monthly Expenses')
                                                ->addNumberColumn('$')
                                                ->addRow(array('Gas', $unit->gas))
                                                ->addRow(array('Water', $unit->water))
                                                ->addRow(array('Electricity', $unit->electricity))
                                                ->addRow(array('Damages', $unit->damages))
                                                ->addRow(array('Rent', $unit->rent));
                                            $chart = Lava::BarChart('Expenses', $expenses);

                                            echo Lava::render('BarChart','Expenses','chart');
                                            ?>
                                            @endif
                                </div>
                            </div>

                            <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
                                <form class="form-horizontal" method="POST" action="{{ route('updateUserUnit') }}">
                                    {{ csrf_field() }}
                                    <p>My Unit</p>
                                    @php ($units =  DB::table('units')->get())
                                    @foreach ($units as $unit)
                                        @if(($unit->id) === (Auth::user()->personalunit) )
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

                            @php ($units =  DB::table('units')->get())
                            @foreach ($units as $unit)
                                @if(($unit->id) === (Auth::user()->personalunit))
                                   <a> Gas {{$unit->gas}} </a>
                              @endif
                            @endforeach

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


                                <div class="w3-card-2 w3-round w3-white w3-center" style="width:150%;">
                                    <div class="w3-container">
                                        <p>Manage Utilities</p>
                                        <a href="{{ url('expenses',['id' => Auth::user()->personalunit]) }}" button type="submit" class="btn btn-primary">Manage</a>
                                    </div>
                                </div>
                                <br>

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

