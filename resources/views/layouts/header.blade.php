<section class="navAndhead">
  <div class="uper-nav">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
              <a class="logo" href="#"><img src="img/logo.png" alt="" width="100" height="80" style="margin-top: 0px;"></a>
          </div>
          <div class="col-md-6">
              <form accept="#"  name="loginform" role="form" method="post" accept-charset="utf-8">
                  <input placeholder="Username" name="uname" class="form-control-cust" type="text" autofocus="">
                  <input placeholder="Password" name="password" class="form-control-cust" type="password" value="">
                  <br>
                  <a class="badge badge-primary" style="background-color: #005184" href="{{ route('login') }}">Login</a>
                  <a class="badge badge-primary" style="background-color: #005184" href="{{ route('register') }}">Join Now</a>
              </form>
          </div>
      </div>
    </div>      
  </div>
 
 
</section>