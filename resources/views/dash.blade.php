    @extends('layouts.base')



    @section('content')    
        <div class="container" id="main-content">
           
              <div class="row">
                <div class="welcome col-lg-6">
                  
                <p>Welcome Back {{Auth::user()->name}} !</p>
                </div>
              </div>

              <div class="dash-content">
             <!-- Row 1 -->
                  <div class="row">
                <div class="col-md-6">
                  <!-- This months sales -->
                    {!! $chart[0]->render() !!}
                </div>
                <div class="col-md-6">
                    {!! $chart[1]->render() !!}
                 </div>
               </div>
            <!-- Row 2 -->

               <div class="row">
                <div class="col-md-6">
                  {!! $chart[2]->render() !!}
                </div>
                  <div class="col-md-6">
                  {!! $chart[2]->render() !!}
                </div>
              </div>
            </div>
           
        </div>

     @endsection   

     @section('jQuery')
        $('#menu-toggle').click( function() {
        $('#wrapper').toggleClass(('menuDisplayed'));        
      });

     @endsection