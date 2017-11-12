<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 8:33 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ManageUnit
{
    public function create($id)
    {

        $unit = DB::table('units')->where('id', '=', $id)->first();

        return view('manageunits')->with('unit', $unit);

    }
}