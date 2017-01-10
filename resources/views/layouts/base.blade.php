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
     <nav class="navbar navbar-inverse">
         <div class="container-fluid">
             <div class="navbar-header">
<!--                  <div class="navbar-brand">
                     <a href="#">SalesDash<a/>
                 </div> -->
                 <button class="btn btn-success" id="menu-toggle">Toggle Menu</button>

             </div>

         </div>
     </nav>
 <!-- End Navbar -->
 <div id="wrapper">
    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li><a href="#">First</a></li>
                <li><a href="#">Second</a></li>
                <li><a href="#">Third</a></li>

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