<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SalesDash</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>

 <!--Navbar  -->
     <nav class="navbar navbar-default">
         <div class="container-fluid">
                <div class="navbar-brand bars">
                <i class="fa fa-bars fa-lg" id="menu-toggle"></i>                
                 </div>
             <div class="navbar-header">
                  <div class="navbar-brand">
                     SalesDash
                 </div>
              
               

              </div>  
                 @if(Auth::user())
                <ul class="nav navbar-nav navbar-right">
                     <li>{{Auth::user()->name}}</li>
                
                 </ul>

                 @endif
             


             </div>



         </div>
     </nav>
 <!-- End Navbar -->
 <div id="wrapper">
    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-name">NAME</div>
            <ul class="sidebar-nav">
                <li><a href="#"><i class="fa fa-tachometer fa-lg"></i>Dashboard</a></li>
                <li><a href="#">
<i class="fa fa-usd fa-lg"></i>Enter Sales</a></li>
                <li><a href="#"> <i class="fa fa-user fa-lg"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-sign-out fa-lg"></i>Logout</a></li>
            </ul>

        </div>
    <!-- End Sidebar Menu -->
    <div id="content-wrapper">
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            @yield('jQuery')
        });
    </script>        
    </body>
</html>