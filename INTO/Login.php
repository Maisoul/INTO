<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="hm.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative; 
  }
   .bg-4 { 
    background-color: #070d0d; /* White */
    color: #555555;
  }
    .containers-fluid {
    padding-top: 40px;
    padding-bottom: 30px;
</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #008080">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="orig.html">INTO THE FUTURE</a>
    </div>
    <div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="orig.html">INTO THE FUTURE</a>
    </div>  
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="orig.html">DASHBORD</a></li>
       <li class="dropdown" class="active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li class="active"><a href="idex.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav> 
<body style="padding-top: 100px">
	<div class="header">
		<h2>Login</h2>		
	</div>
	<form method="POST" action="Login.php">
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>	
			<input type="text" name="username">	
		</div>
		<div class="input-group">
			<label>Password</label>	
			<input type="password" name="password">	
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php"><font color="red">Sign up</font></a>
		</p>
	</form>
</body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<footer class="containers-fluid bg-4 text-center">
  <p>Designed & Developed By <a href="#">DAVID MAISOL</a></p> 
</footer>
</html>