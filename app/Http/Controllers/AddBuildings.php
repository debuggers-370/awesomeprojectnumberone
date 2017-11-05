<?php

/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/5/2017
 * Time: 1:02 AM
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class AddBuildings
{
    public function create($id)
    {

        $property = DB::table('properties')->where('id', '=', $id)->first();

        return view('addbuilding')->with('property', $property);

    }
}