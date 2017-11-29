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
        $request = DB::table('requests')->where ('id','=',$id)->first();

        $unit = DB::table('units')->where('id', '=', $request->unit_id)->first();

        $building = DB::table('buildings')->where('id', '=', $unit->building_id)->first();

        $property = DB::table('properties')->where('id', '=', $building->property_id)->first();


        return view('manageunit')->with('unit', $unit)->with('building', $building)->with('property', $property)->with('request', $request);

    }
}