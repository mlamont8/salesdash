<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

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
        $current = Carbon::now();
        $subMonth = $current ->subMonth(2);
        $start = Carbon::now()->startOfMonth();
       
        

        // Total Sales
        $thisMonth = DB::table('sales')
            ->where('user_id',$id)
            ->where('date_sold','>=',Carbon::now()->startOfMonth())
            ->sum('commission');

        // Sales Last Month
            $lastMonth = DB::table('sales')
            ->where('user_id',$id)
            ->where('date_sold','>=',Carbon::now()->subMonth())
            ->sum('commission');

        // Commissions This Year
            $thisYear = DB::table('sales')
            ->where('user_id',$id)
            ->where('date_sold','>=',Carbon::now()->startOfYear())
            ->sum('commission');



       

        /*Laravel Charts*/
         $chart1 = Charts::database($sales,'line', 'morris')->dateColumn('date_sold')
         
            ->title('Items Sold')
            ->Elementlabel('Totals')
            ->groupBy('commission')
            ->groupByMonth('2016',true);

         

                     

         $chart2 = Charts::database($sales,'bar', 'fusioncharts')->dateColumn('date_sold')
         
            ->responsive(false)
            ->title('Total Sales')
            ->width(0)
            ->groupBy('commission')
            ->groupByYear(3)
            ->colors(["#ff0000","#00ff00","#0000ff"]);

         $chart3 = Charts::database($sales,'donut','fusioncharts')
         
            ->responsive(false)
            ->title('Products')
            ->width(0)
            ->groupBy('product')
            ->colors(["#ff0000","#00ff00","#0000ff"]);

            $data=[$chart1,$chart2,$chart3,$thisMonth,$lastMonth, $thisYear];


        return view('dash',['data' => $data]);

  




    }

    public function create(){

        return view('sales.create');
    }

    // Update to insert data correctly into database

    public function store(Request $request){
        $dataInput= $request->all();
        $user= Auth::user();

        // Access the Sales method from User Model
        $user->sales()->create($dataInput);


        return redirect('dash');
    }

    public function list(){
        $user= Auth::user();
        $sales= $user->sales;
        $sortedSales= $sales->sortByDesc('date_sold');
 
        return view('sales.list', compact('sortedSales'));
    }
}
