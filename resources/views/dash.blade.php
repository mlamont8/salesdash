    @extends('layouts.base')



    @section('content')    
        <div class="container-fluid">
           <div class="row">
               <div class="dash-header col-lg-12">            
                    <h3><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h3>
                                 
               </div>
            <div class="row">
              <div class="dash-content">
                <div class="col-md-4">
                   @foreach($sales as $sale)
                    {{$sale->user_id}}
                    {{$sale->name}}
                  @endforeach 
                </div>
                <div class="col-md-4">Dash 2</div>
                <div class="col-md-4">Dash 3</div>
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