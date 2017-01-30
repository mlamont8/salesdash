    @extends('layouts.base')



    @section('content')   
	<div class="container">
    <h1>Create Form</h1>

    <form action="/" method="POST">
    	{{csrf_field()}}

    	<div class="form-group"> 
			 	<label for='date_sold'>Sales Date</label>
    			<input class="form-control" type="date" name='date_sold'>
				</input>
				<label for='product'>Product</label>
    			<input class="form-control" type="text" name='product'>
				</input>
				<label for='fName'>First Name</label>
    			<input class="form-control" type="text" name='first_name'>
				</input>
				<label for='lName'>Last Name</label>
    			<input class="form-control" type="text" name='last_name'>
				</input>
				<label for='address'>Address</label>
    			<input class="form-control" type="text" name='address'>
				</input>
				<label for='phone'>Phone Number</label>
    			<input class="form-control" type="tel" name='phone'>
				</input>
				<label for='saleType'>Type of Sale</label>
    			<input class="form-control" type="text" name='sales_method'>
				</input>
				<label for='commission'>Commission</label>
    			<input class="form-control" type="number" min="0.01" step="0.01" max="1000" name='commission'>
				</input>
    	</div>
 				<input class="btn btn-primary" type="submit">
				</input>

    </form>
    </div>
     @endsection   

     @section('jQuery')
     $('#menu-toggle').click( function() {
     $('#wrapper').toggleClass(('menuDisplayed'));        
   });

     @endsection