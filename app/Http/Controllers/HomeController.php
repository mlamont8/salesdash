<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Sales;

use Charts;

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

        /*Laravel Charts*/
         $chart1 = Charts::database($sales,'bar', 'highcharts')
         
            ->responsive(true)
            
            ->groupBy('date_sold');

         $chart2 = Charts::database($sales,'bar', 'highcharts')
         
            ->responsive(false)
            ->width(0)
            ->groupBy('date_sold');

         $chart3 = Charts::database($sales,'pie', 'highcharts')
         
            ->responsive(false)
            ->width(0)
            ->groupBy('product');

            $chart=[$chart1,$chart2,$chart3];


        return view('dash',['chart' => $chart]);

  

       // return view('dash',compact('sales'));


    }
}
