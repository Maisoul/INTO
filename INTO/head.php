<?php include('servex.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
	header('location: hedex.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adminstration</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative;
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
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
      <li><a href="orig.html">DASHBOARD</a></li>
       <li class="dropdown">        
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php if (isset($_SESSION['username'])): ?>
    <i style="color: #008080">Welcome <strong><?php echo $_SESSION['username']; ?>  <span class="glyphicon glyphicon-user"></span></strong></i>
    <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="hedex.php?Logout='1'" style="color: red; font-weight: bold;"> <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>        
      </li>
    </ul>
    </div>
</div>
</nav>
<body style="padding-top: 70px">
	<div class="header">
		<h2 style="font-size: 50px">Users' Details</h2>
	</div>
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
				echo $_SESSION['success'];
				unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<?php if (isset($_SESSION['username'])): ?>
		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
			<li><a href="show.php"><font size="5"; color="red">REGISTERED</font></a></li>
			<li><a href="views.php"><font size="5"; color="red">PROFILES</font></a></li>
			<li> <a href="view.php"><font size="5"; color="red">Transfer/Placement</font></a></li>

			<?php endif ?> 
	</div>
</body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<footer class="containers-fluid bg-4 text-center">
  <p>Designed & Developed By <a href="#">DAVID MAISOL</a></p> 
</footer>
<?php endif ?>
</html>