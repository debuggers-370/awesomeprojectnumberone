<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 10:20 PM
 */

namespace App\Http\Controllers;

use App\Unit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaintenanceRequest extends Controller
{
    /*
     * Create a new user instance.
     *
     * @param  Request $request
     * @return Response
     */

    public function create(Request $request, $id)
    {
        \Cloudinary::config(array(
            "cloud_name" => "dwunmryjy",
            "api_key" => "392581967417787",
            "api_secret" => "Gfvlo-MD4baaYC877MUuglXCVsM"
        ));

        $files = $request->file('picture');

        \Cloudinary\Uploader::upload($files);


            DB::table('units')->where('id', '=', $id)->update(['maintenance' => $request->maintenance]);

/*            DB::table('units')->where('id', '=', $id)->update(['files' => "zombie"]);*/

            $request->session()->flash('status', 'Your maintenance request was submitted');

            return redirect('userhome');
        }



}
