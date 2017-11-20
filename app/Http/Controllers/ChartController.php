<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
class ChartController extends Controller
{
    public function chart(){

        $lava = new Lavacharts;

        $reasons = $lava->DataTable();

        $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Check Reviews', 5))
            ->addRow(array('Watch Trailers', 2))
            ->addRow(array('See Actors Other Work', 4))
            ->addRow(array('Settle Argument', 89));

        $lava -> DonutChart('Reasons', $reasons);

        return view('Chart', [
            'lava'      => $lava
        ]);
    }
}