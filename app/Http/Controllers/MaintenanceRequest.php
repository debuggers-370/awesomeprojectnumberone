<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 10:20 PM
 */

namespace App\Http\Controllers;

use App\Unit;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

       DB::table('units')->where('id', '=', $id)->update(['maintenance'=>$request->maintenance]);

       $request->session()->flash('status', 'Your maintenance request was submitted');

       return redirect('userhome');
    }
}
