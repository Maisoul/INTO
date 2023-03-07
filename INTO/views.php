<?php  include('server.php');

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
  header('location: Login.php');
}

  $mysqli = new mysqli ('localhost', 'root', 'davidmaiso', 'projector') or die(mysqli_error($mysqli));
  $result = $mysqli -> query("SELECT * FROM profile");
  //pre_r($result);
  ?>
   <!DOCTYPE html>
<html>
<head>
  <title>DATA</title>
  <link rel="stylesheet" type="text/css" href="log.css">
  <link rel="stylesheet" type="text/css" href="table.css">
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
      <li><a href="head.php">HOME</a></li>
      <li class="active"><a href="show.php">Std. Profiles</a></li>
      </ul>
    </div>
</div>
</nav>
  <table id="customers" bgcolor="silver" style="margin-top: 100px; font-size: 19px; border-style: ridge; color: black" border="5" >
      <thead>
        <tr>
          <th>Name</th>
          <th>PhoneNo.</th>          
          <th>Birthday</th>
          <th>Gender</th>
          <th>Email</th> 
          <th>Level</th>         
          <th>Primary</th>
          <th>O Level</th>
          <th>Grade</th>
          <th>Higher Learning</th>
          </tr>
      </thead>
      <?php
      while ($row = $result ->fetch_assoc()): ?> 
        <tr>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['Tel']; ?></td>
          <td><?php echo $row['Birthday']; ?></td>
          <td><?php echo $row['Gender']; ?></td>         
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['level']; ?></td>        
          <td><?php echo $row['Low_School']; ?></td>
          <td><?php echo $row['High']; ?></td>
          <td><?php echo $row['Grade']; ?></td>
          <td><?php echo $row['University']; ?></td>         
        </tr>
      <?php endwhile; ?>
      </table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<footer class="containers-fluid bg-4 text-center">
  <p>Designed & Developed By <a href="#">DAVID MAISOL</a></p> 
</footer>
</html>
  