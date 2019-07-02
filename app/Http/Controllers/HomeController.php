<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\periodo;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodo = periodo::all();
        return view('home', compact('periodo'));
    }

    public function welcome()
    {
        return view('welcome');
    }
}
