<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Charts;
use ConsoleTVs\Charts\Facades\Charts;
use App\Charts\SampleChart;
class ChartController extends Controller
{
    //
    public function charts(){
        //$chart = new SampleChart;
        //$chart->labels(['One', 'Two', 'Three', 'Four']);
        //$chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        //$chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);
        //return view('Reports.graphs',compact('chart'));
$chart = Charts::new('line', 'highcharts')
                       ->setTitle('My nice chart')
                       ->setLabels(['First', 'Second', 'Third'])
                       ->setValues([5,10,20])
                       ->setDimensions(1000,500)
                       ->setResponsive(false);
           return view('Reports.graphs')->withChart($chart);
    }
}
