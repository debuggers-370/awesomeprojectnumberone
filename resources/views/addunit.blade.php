@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Unit for {{$building->name}}</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST"
                              action="{{ route('updateUnit',$building->id) }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Unit Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>

                                            {{ route('updateUnit',$building->id) }}

                                        </span>

                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="renter" class="col-md-4 control-label">Unit Renter</label>

                                <div class="col-md-6">
                                    <input id="renter" type="text" class="form-control" name="renter" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Unit
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
