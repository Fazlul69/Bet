<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>practise</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    
    @yield('style')

    <style type="text/css">
        .uper-nav{
            background-color: #0C4570/*2A2A2A*/; 
        }
        .badge {
        display: inline-block;
        padding: 3px 8px;
        font-family: "Kanit", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        font-size: 12px;
        font-weight: 600;
        line-height: 14px;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        background: #e1e1e1;
        border-radius: 4px;
        margin-top: 5px;
        margin-bottom: 20px;
     }
    .badge-primary {
        background: #64b000;
        border: 0;
     }
    .form-control-cust {
        border: 2px solid #ffffff;
        border-radius: 7px;
        padding: 4px;
        font-size: 14px;
        line-height: 1.25;
        margin-top: 20px;
        background-color: #000;
     }
    .logo{
        margin-left: 300px;
    }
    </style>
</head>
<body>
  <!-- header section -->
  @include('layouts.header')
  @include('layouts.nav')
  @include('layouts.slider')
  @yield('content')


  @include('layouts.footer')

  @yield('script')

</body>
</html>