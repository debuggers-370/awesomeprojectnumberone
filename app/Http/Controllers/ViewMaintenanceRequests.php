<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/15/2017
 * Time: 7:52 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ViewMaintenanceRequests
{
    public function create()
    {
        $id = Auth::user()->id;

        $properties = DB::table('properties')->where('user_id', '=', $id)->get();

        $buildings = DB::table('buildings')->get();

        $units = DB::table('units')->get();

        $requests = DB::table('requests')->get();

        return view('viewmaintenance')->with('properties', $properties)->with('buildings', $buildings)->with('units', $units)->with('requests',$requests);
    }

}