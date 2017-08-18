
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css')}}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js')}}"></script>
    <style type="text/css">
      .register{
        float: right;
      }
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      {!! Form::open(array('url'=>'authfreelancer'),['class'=>'form-signin'])!!}
        <h2 class="form-signin-heading">Please Register As Frelancer Desain</h2>
 <!--        <label for="inputEmail" class="sr-only">Email address</label> -->
        {!! Form::text('no_id',null,['class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Number Id']) !!}
        {!! Form::text('username',null,['class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Username']) !!}
        {!! Form::text('email',null,['class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Email Address']) !!}
        {!! Form::text('alamat',null,['class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Your Address']) !!}
        {!! Form::text('password',null,['class'=>'form-control', 'id'=>'inputEmail', 'placeholder'=>'Password']) !!}<!-- 
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
        <!-- <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
        
        {!! Form::submit('simpan data',['class'=>'btn btn-lg btn-primary btn-block']) !!}
        {!! csrf_field() !!}
      {!! Form::close()!!}
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
`