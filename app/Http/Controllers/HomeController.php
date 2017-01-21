<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

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

        //Sales for currently authenticated user
        $sales = $user->sales;

        // Total Sales
        $totSales = DB::table('sales')
            ->where('user_id',$id)
            ->sum('commission');

        // Sales Last Month
            $lastMonth = DB::table('sales')
            ->where('user_id',$id)
            ->whereMonth('date_sold',date('n'))
            ->sum('commission');

        // Sales This Year
            $lastMonth = DB::table('sales')
            ->where('user_id',$id)
            ->whereYear('date_sold',date('Y'))
            ->sum('commission');



        $all = Sales::all();

        /*Laravel Charts*/
         $chart1 = Charts::database($sales,'line', 'highcharts')->dateColumn('date_sold')
         
            ->responsive(true)
            ->groupBy('commission');

                     

         $chart2 = Charts::database($sales,'bar', 'highcharts')->dateColumn('date_sold')
         
            ->responsive(false)
            ->width(0)
            
            ->groupByYear(3);

         $chart3 = Charts::database($sales,'donut', 'highcharts')
         
            ->responsive(false)
            ->width(0)
            ->groupBy('product');

            $chart=[$chart1,$chart2,$chart3,$totSales,$lastMonth];


        return view('dash',['chart' => $chart]);

  

       // return view('dash',compact('sales'));


    }
}
