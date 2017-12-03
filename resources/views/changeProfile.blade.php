@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Change Profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('changeProfilePicture')}}" >
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="fileupload" class="col-md-4 control-label">Change Profile Picture</label>

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
