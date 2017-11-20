<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 1:02 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ManageBuilding
{
    public function create($id)
    {

        $building = DB::table('buildings')->where('id', '=', $id)->first();

        $property = DB::table('properties')->where('id', '=', $building->property_id)->first();

        return view('managebuildings')->with('building', $building)->with('property', $property);

    }
}