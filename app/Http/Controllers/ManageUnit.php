<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 1:02 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ManageUnit
{
    public function create($id)
    {

        $unit_number = DB::table('Unit')->where('id', '=', $id)->first();

        return view('manageUnits')->with('Unit', $unit_number);

    }
}