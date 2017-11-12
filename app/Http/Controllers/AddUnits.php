<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/11/2017
 * Time: 8:50 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AddUnits
{
    public function create($id)
    {

        $building = DB::table('buildings')->where('id', '=', $id)->first();

        return view('addunit')->with('building', $building);
    }

}