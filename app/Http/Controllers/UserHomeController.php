<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use DB;


class UserHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index(Request $request)
    {

        $propertyid = 1;

        return view('homeUser')->with('propertyid', $propertyid);
    }*/
    public function addUnit(Request $request)
    {
        $user = Auth::user();

        $propertyid = $request->get('property_id');

        $buildingid = $request->get('building_id');

        $unitid = $request->get('unit_id');

        $property = DB::table('properties')->where('id', '=', $propertyid)->first();

        $building = DB::table('buildings')->where('id', '=', $buildingid)->first();

        $unit = DB::table('units')->where('id', '=', $unitid)->first();

        $user->personalunit = $unit->id;

        $user->personalbuilding = $building->id;

        $user->personalproperty = $property->id;

        $user->save();

        return redirect('userhome');

    }
    public function myform()
    {
        $properties = DB::table('properties')->pluck("name","id")->all();
        return view('homeUser',compact('properties'));
    }


    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectBuilding(Request $request)
    {
        if($request->ajax()){
            $buildings = DB::table('buildings')->where('property_id',$request->property_id)->pluck("name","id")->all();
            $data = view('building-select',compact('buildings'))->render();
            return response()->json(['options'=>$data]);
        }
    }
    public function selectUnit(Request $request)
    {
        if($request->ajax()){
            $units = DB::table('units')->where('building_id',$request->building_id)->pluck("name","id")->all();
            $data = view('unit-select',compact('units'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}
