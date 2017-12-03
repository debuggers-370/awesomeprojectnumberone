<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChangeProfile extends Controller
{

    public function create()
    {
        return view('changeProfile');
    }
    public function up(Request $request){

        $id = Auth::user()->id;

        \Cloudinary::config(array(
            "cloud_name" => "dwunmryjy",
            "api_key" => "392581967417787",
            "api_secret" => "Gfvlo-MD4baaYC877MUuglXCVsM"
        ));

        $files = $request->file('picture');
        $uploaded = \Cloudinary\Uploader::upload($files,array( "use_filename" => TRUE));

        DB::table('users')->where('id', '=', $id)->update(['user_profile' => $uploaded['public_id']]);;


/*        DB::table('units')->where('id', '=', $id)->update(['water'=>$request->water]);*/

        return redirect('home');
    }
}
