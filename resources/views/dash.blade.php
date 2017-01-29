    @extends('layouts.base')



    @section('content')    
        <div class="container" id="main-content">
          <!-- Center Column -->

              <!-- First Row -->
              <div class="row">
                <div class="welcome col-lg-12">
                  <!-- Sales This Month -->
                    <div class="col-md-3">
                      <span class="box-desc">Commissions This Month</span>
                      <p class="box-num">${{$data[3]}}</p>
                    </div>
                  <!-- Sales Last Month -->
                    <div class="col-md-3">
                      <span class="box-desc">Commissions Last Month</span>
                      <p class="box-num">${{$data[4]}}</p>

                    </div>
                  <!-- Sales This Year -->
                    <div class="col-md-3">
                      <span class="box-desc">Commissions This Year</span>
                      <p class="box-num">${{$data[5]}}</p>
                    </div>
                </div>
              </div>

              <div class="dash-content col-lg-10">
             <!-- Row 2 -->
                  <div class="row">
                <div class="col-md-10 chart">
                  <!-- This months sales -->
                    {!! $data[0]->render() !!}
                </div>
             
                 
               </div>
            <!-- Row 3 -->

               <div class="row">
                <div class="col-md-5 chart">
                  {!! $data[1]->render() !!}
                </div>
                  <div class="col-md-5 chart">
                  {!! $data[2]->render() !!}
                </div>
  
              </div>
            </div>
           <!-- End main content container -->
        </div>

     @endsection   

  @section('jQuery')
     $('#menu-toggle').click( function() {
     $('#wrapper').toggleClass(('menuDisplayed'));        
   });

     @endsection