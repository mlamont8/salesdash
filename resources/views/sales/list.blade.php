 @extends('layouts.base')

 @section('content') 
	<div class="container">
		<div class="row">
			<h1>Sales List</h1>

		</div>
		<div class="row table">
			<table class="table table-condensed table-striped">
				<tr>
					<th>Sale Date</th>
					<th>Product</th>
					<th>First Name</th>
					<th>Last Date</th>
					<th>Commission</th>
				</tr>
				@foreach($sortedSales as $sale)
				<tr>
					<th>{{$sale->date_sold}}</th>
					<th>{{$sale->product}}</th>
					<th>{{$sale->first_name}}</th>
					<th>{{$sale->last_name}}</th>
					<th>{{$sale->commission}}</th>

				</tr>
				@endforeach

			</table>

		</div>

	</div>



 @endsection


   @section('jQuery')
     $('#menu-toggle').click( function() {
     $('#wrapper').toggleClass(('menuDisplayed'));        
   });

     @endsection
