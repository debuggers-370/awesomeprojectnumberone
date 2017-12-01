@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Maintenance Request</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="GET" action="{{ route('addmaintenance',['id' => Auth::user()->personalunit])}}" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="maintenance" class="col-md-4 control-label">Maintenance Needed</label>
                                <div class="col-md-6">
                                    <input id="maintenance" type="text" class="form-control" name="maintenance" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fileupload" class="col-md-4 control-label">Pictures of Maintenance to do</label>

                                <div class="col-md-6">
                                    <input id="fileupload" type="file" name="picture" multiple accept="image/gif, image/jpeg, image/png">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Request
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
