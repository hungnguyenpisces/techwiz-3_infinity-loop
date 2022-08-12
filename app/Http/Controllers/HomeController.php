<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web/index');
    }
    
    public function chart() {
        $chart  = [
            ['x' => 50, 'y' => 88, 'z' => 13, 'axes' => 1],
            ['x' => 23, 'y' => 77, 'z' => 44, 'axes' => 2],
            ['x' => 44, 'y' => 22, 'z' => 88, 'axes' => 3]

        ];
            
        return view('user/user-chart')->with('chart', $chart);
    }
}

