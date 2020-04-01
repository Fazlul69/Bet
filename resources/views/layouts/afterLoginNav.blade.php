 <style type="text/css">
        .nav {
    padding-left: 201px;
    margin-bottom: 0;
    list-style: none;
    }
    .nav-top-bar{
    background: linear-gradient(to right top,#2b3826,#1b5a14,#04540e,#72b51b);
    }
    .clr{
      font-size: 14px;
      color: #ffffff;
      margin-top: 25px;
      margin-bottom: 25px;
      font-weight: bold;
    }
    .clr:hover {
      color: #64b000;
    }
    .dropdown-menu{
      background-color: #0A5610;
    }
    .aclr>li>a{
      color: #ffffff;
      padding: 10px;
      margin-left: 20px;
      margin-right: 25px;
      font-weight: bold;
    }

    .aclr>li>a:hover{
      background-color: transparent;
      color: #64b000;
      /*text-decoration: underline;*/
      font-weight: bold;
      padding-bottom: 2px;
    }
    </style>


<nav class="navbar nav-top-bar">
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
      <ul class="nav navbar-nav">
        <li><a class="clr" href="#">HOME </a></li>
        <li><a class="clr" href="#">IN-PLAY</a></li>
        <li><a class="clr" href="#">ADVANCE</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle clr" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MY ACCOUNT <span class="caret"></span></a>
          <ul class="dropdown-menu aclr">
            <li><a href="facebook.com">VIEW PROFILE</a></li>
            <li><a href="#">EDIT PROFILE</a></li>
            <li><a href="#">CHANGE CLUB</a></li>
            <li><a href="#">MY FOLLOWERS</a></li>
            <li><a href="#">BET HSITORY</a></li>
            <li><a href="#">STATEMENT</a></li>
            <li><a href="#">CHANGE PASSWORD</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle clr" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MY WALLET <span class="caret"></span></a>
          <ul class="dropdown-menu aclr">
            <li><a href="#">MAKE DEPOSIT</a></li>
            <li><a href="#">DEPOSIT HISTORY</a></li>
            <li><a href="#">COIN TRANSFER</a></li>
            <li><a href="#">WITHDRAW</a></li>
            <li><a href="#">WITHDRAW HISTORY</a></li>
          </ul>
        </li>

        <li><a class="clr" href="#">LOGOUT</a></li>
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>