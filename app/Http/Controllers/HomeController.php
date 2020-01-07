<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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
        return view('home');
    }
    
     public function clickets()
    {
        return view('clickets');
    }
    
     public function casperbosma()
    {
        return view('casperbosma');
    }
    
      public function test()
    {
        return view('test');
    }
}
