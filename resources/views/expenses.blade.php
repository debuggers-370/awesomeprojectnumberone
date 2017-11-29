@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Expenses</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="GET" action="{{ route('addexpenses',['id' => Auth::user()->personalunit])}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="gas" class="col-md-4 control-label">Gas</label>

                                <div class="col-md-6">
                                    <input id="gas" type="text" class="form-control" name="gas" required>
                                </div>

                                <label for="water" class="col-md-4 control-label">Water</label>

                                <div class="col-md-6">
                                    <input id="water" type="text" class="form-control" name="water" required>
                                </div>

                                <label for="electricity" class="col-md-4 control-label">Electricity</label>

                                <div class="col-md-6">
                                    <input id="electricity" type="text" class="form-control" name="electricity" required>
                                </div>

                                <label for="damages" class="col-md-4 control-label">Damages</label>

                                <div class="col-md-6">
                                    <input id="damages" type="text" class="form-control" name="damages" required>
                                </div>



                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Expenses
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
