<?php
/**
 * Created by IntelliJ IDEA.
 * User: Owen
 * Date: 11/28/2017
 * Time: 9:48 PM
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class updateExpenses extends Controller
{
    public function create(Request $request, $id)
    {

        //DB::table('units')->where('id', '=', $id)->update(['maintenance'=>$request->maintenance]);

        $request->session()->flash('status', 'Your expense report was submitted');

        DB::table('units')->where('id', '=', $id)->update(['gas'=>$request->gas]);
        DB::table('units')->where('id', '=', $id)->update(['water'=>$request->water]);
        DB::table('units')->where('id', '=', $id)->update(['electricity'=>$request->electricity]);
        DB::table('units')->where('id', '=', $id)->update(['damages'=>$request->damages]);

        return redirect('userhome');
    }
}

