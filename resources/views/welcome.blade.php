<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link href="build/css/bootstrap.min.css" rel="stylesheet">
        <link href="build/css/font-awesome.min.css" rel="stylesheet">
        <link href="build/css/prettyPhoto.css" rel="stylesheet">
        <link href="build/css/price-range.css" rel="stylesheet">
        <link href="build/css/animate.css" rel="stylesheet">
        <link href="build/css/main.css" rel="stylesheet">
        <link href="build/css/responsive.css" rel="stylesheet">
        

        <title>Technographic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">       

     
       
    </head>
    <body>
        <div id="app">
        
               
        </div>
        <script src="build/js/jquery.js"></script>
        <script src="build/js/bootstrap.min.js"></script>
        <script src="build/js/jquery.scrollUp.min.js"></script>
        <script src="build/js/price-range.js"></script>
        <script src="build/js/jquery.prettyPhoto.js"></script>
        <script src="build/js/main.js"></script> 
        <script src="{{mix('/js/app.js')}}"></script>
    </body>
</html>
