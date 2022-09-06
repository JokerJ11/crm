<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BET ADMIN | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
 <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/AdminLTE.css') }}"> 

<link rel='stylesheet' id='theme-style-css' href="{{ URL::asset('css/nameofthefiler.css') }}" type='text/css' media='all' />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
  <div class="container">
    @yield('content')
  </div>

  {{-- <script type='text/javascript' src='{{ url("js/jsfilename.js") }}'></script> --}}
</body>
</html>