<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateMaintenance extends Controller
{
    public function changeStatus($id){
        DB::table('requests')
            ->where('id', $id)
            ->update(['status' => true]);

        return redirect('viewmaintenance');
    }
    //
}
