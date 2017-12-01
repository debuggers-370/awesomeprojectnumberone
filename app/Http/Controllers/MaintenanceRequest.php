<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 10:20 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Unit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mrequest;
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

       //DB::table('units')->where('id', '=', $id)->update(['maintenance'=>$request->maintenance]);

       $request->session()->flash('status', 'Your maintenance request was submitted');

        $mrequest = new Mrequest;

        $unit = DB::table('units')->where('id', '=', $id)->first();

        $mrequest->unit_id = $unit->id;

        $mrequest->maintenance = $request->maintenance;

        $mrequest->status = false;

        $mrequest->save();

        return redirect('userhome');

    }
}
