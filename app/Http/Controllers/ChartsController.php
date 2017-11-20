<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Charts;
use Khill\Lavacharts\Lavacharts;
use Lava;

class ChartsController extends Controller
{
    public function chart(){

        $reasons = Lava::DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Check Reviews', 5))
            ->addRow(array('Watch Trailers', 2))
            ->addRow(array('See Actors Other Work', 4))
            ->addRow(array('Settle Argument', 89));

    }
}