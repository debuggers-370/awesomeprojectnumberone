<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 2:08 AM
 */

namespace App\Http\Controllers;

use App\Building;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RegisterBuilding extends Controller
{
    /**
     * Create a new user instance.
     *
     * @param  Request $request
     * @return Response
     */


    public function updateBuilding(Request $request, $id)
    {

        $building = new Building;

        $property = DB::table('properties')->where('id', '=', $id)->first();

        $building->property_id = $property->id;

        $building->name = $request->name;

        //$building->tenant = $request->tenant;

        $building->save();

        return view('manageproperty')->with('property', $property);

    }
}