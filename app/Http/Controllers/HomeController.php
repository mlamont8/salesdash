<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Sales;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get currently authenticated user
        $user= Auth::user();

        // Get currently authenticated user id
        $id = Auth::id();

        //Get Sales for currently authenticated user
        $sales = $user->sales;

        $all = Sales::all();

        return view('dash',compact('sales'));

    }
}
