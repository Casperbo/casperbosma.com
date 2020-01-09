<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DutchHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/dutch/home');
    }
    
     public function clickets()
    {
        return view('/dutch/clickets');
    }
    
     public function casperbosma()
    {
        return view('/dutch/casperbosma');
    }
}
