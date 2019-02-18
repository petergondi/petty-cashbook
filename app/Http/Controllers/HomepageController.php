<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topup;
class HomepageController extends Controller
{
    
    public function index()
    {
        //
        $total_topup=Topup::sum('topup');        
        return view('welcome')->with(compact('total_topup'));
    }

}   