<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>REGISTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative; 
  }
  #DASHBORD {padding-top:80px;height:1000px;color: #fff; background-color: silver}
  #CONTACT {padding-top:10px;height:500px;color: #fff; background-color: #302b54;}
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
      <li><a href="orig.html">DASHBORD</a></li>
      <li><a href="#CONTACT">CONTACT</a></li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNT
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="idex.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav> 
<body style="padding-top: 80px">
	<div class="header">
		<h2>Register</h2>		
	</div>
	<form method="POST" action="register.php">
		<!--display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>	
			<input type="text" name="username" value="<?php echo $username; ?>">	
		</div>
		<div class="input-group">
			<label>Email</label>	
			<input type="text" name="email" value="<?php echo $email; ?>">	
		</div>
		<div class="input-group">
      <label>Level of Education</label>
			<input type="text" name="level" value="<?php echo $level; ?>">			
		</div>
		<div class="input-group">
			<label>Password</label>	
			<input type="password" name="password_1">	
		</div>
		<div class="input-group">
			<label>Confirm Password</label>	
			<input type="password" name="password_2">	
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="Login.php"><font color="red">Sign in</font></a>
		</p>
	</form>
</body>
</html>