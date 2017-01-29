    @extends('layouts.base')



    @section('content')   
	<div class="container">
    <h1>Create Form</h1>

    <form action="/" method="POST">
    	{{csrf_field()}}

    	<div class="form-group"> 
			 	<label for='date'>Sales Date</label>
    			<input class="form-control" type="date" name='salesDate'>
				</input>
				<label for='date'>Product</label>
    			<input class="form-control" type="text" name='product'>
				</input>
				<label for='date'>First Name</label>
    			<input class="form-control" type="text" name='fName'>
				</input>
				<label for='date'>Last Name</label>
    			<input class="form-control" type="text" name='lName'>
				</input>
				<label for='date'>Address</label>
    			<input class="form-control" type="text" name='address'>
				</input>
				<label for='date'>Phone Number</label>
    			<input class="form-control" type="tel" name='phone'>
				</input>
				<label for='date'>Type of Sale</label>
    			<input class="form-control" type="text" name='saleType'>
				</input>
				<label for='date'>Commission</label>
    			<input class="form-control" type="number" min="0.01" step="0.01" max="1000" name='commission'>
				</input>
    	</div>
 				<input class="btn btn-primary" type="submit">
				</input>

    </form>
    </div>
     @endsection   