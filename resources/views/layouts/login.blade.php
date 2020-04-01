<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
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
            background-color: #2A2A2A; 
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
        border: 2px solid #a0d87e;
        border-radius: 7px;
        padding: 4px;
        font-size: 14px;
        line-height: 1.25;
        margin-top: 20px;
     }
    .logo{
        margin-left: 300px;
    }

	.reg{
        	padding-top: 20px;
        	padding-bottom: 60px;
        	background-color: #64905A;
        }
    /*footer*/
      .ssc-srg{
        margin-top: 50px;
        margin-bottom: 50px;
      }
      .first_part{
        background-color: #383838;
        color: #fff;
      }
    </style>
</head>
<body>
  @include('layouts.header')
  @include('layouts.nav')
  @include('layouts.breadcrumb')
 <section class="reg">      
	<div class="container">
    	<div class="row">
       		<div class="col-md-4 col-md-offset-4">
            	<form action="/action_page.php">
				  <div class="form-group">
				    <input type="username" class="form-control" id="name" placeholder="User Name">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="pwd" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary" style="margin-left: 155px;">Login</button>

				  <div style="padding-top: 10px;">
                      <a href="#">
                      	<label style="cursor: pointer;color: #EAF607;">Forgot Password</label>
                      </a> 
                      <a href="#" class="pull-right">
                      	<label style="cursor: pointer; color: #EAF607;">Register</label>
                      </a>
                   </div>
				</form>
       		</div>
    	</div>
	</div>
 </section>
@include('layouts.footer')
</body>
</html>
