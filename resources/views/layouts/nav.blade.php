
    <style type="text/css">
    .nav {
      padding-left: 201px;
      list-style: none;
      margin-bottom: 20px;
      margin-top: 20px;
    }
    .nav-top-bar {
    background: linear-gradient(to right top, #051937, #1b375d, #2f5886, #437cb1, #55a2dd);
}

    }
    
   .navbar {
    border-radius: 0px;
    margin-bottom: 0px
}
  .a-style{
    font-weight: bold;
    color: #ffff;
    font-size: 15px;
  }
  .hov>li>a:hover {
    text-decoration: none;
    background-color: #000 !important;
    border-radius: 41px !important;
    color: #fff;
}

    </style>


<nav class="navbar nav-top-bar" style="border-radius: 0px;
    margin-bottom: 0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav hov">
        <li><a class="clr a-style" href="#">HOME </a></li>
        <li><a class="clr a-style" href="#">IN-PLAY</a></li>
        <li><a class="clr a-style" href="#">ADVANCE</a></li>
        <li><a class="clr a-style" href="{{ route('login') }}">LOGIN</a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


