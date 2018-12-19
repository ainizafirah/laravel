<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><i style="font-size:24px" class="fa">&#xf015;</i>  

MY GROCERIES</a>
    </div>
    
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <ul class="nav navbar-nav">
      <li class="active"><a href="#"><i style="font-size:24px" class="fa">&#xf218; </i> My cart</a></li>
        </ul>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i style="font-size:24px" class="fa">&#xf2bd; </i> My Profile <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href=""><span class="#"  ></span> Logout</a></li>
    </ul>
  </div>
</nav>
