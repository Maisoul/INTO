<?php include('server.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
  header('location: Login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>INTO THE FUTURE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="sid.css">
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
  .loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #070d0d; /* White */
    color: #555555;
  }
    .containers-fluid {
    padding-top: 40px;
    padding-bottom: 30px;
  }
  .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-vimeo {
  background: #45bbff;
  color: white;
} 
  #DASHBOARD {padding-top:90px;height:650px;color: #fff; background-color: white}
  #CONTACT {padding-top:10px;height:650px;color: #fff; background-color: #302b54;}
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
          <li><a href="idex.php?Logout='1'" style="color: red; font-weight: bold;"> <span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          <li><a href="idex.php"><span class="glyphicon glyphicon-log-in"></span> Change Password</a></li>
        </ul>        
      </li>
    </ul>
    </div>
</div>
</nav>
<div class="sidenav">
  <button style="background-color: #008080"><a href="Reg.html">Transfer<br>Placement</a></button><br>
  <p>&nbsp;</p>
  <a href="quiz.html">FAQ</a><br>
  <a href="#clients">Services</a>
    </div>
  <div id="DASHBOARD" class="container">
    <ul class="nav nav-pills nav-justified">
    <li><a><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span><font style="color: black">CREATE PROFILE</font></button>
    
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Profile</h4>
        </div>
        <div class="modal-body">
          <p><div class="container-fluid">
  <form action="includ.php" method="POST">
    <div class="form-group">
      <label for="Name">Names:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter your full names...." name="Name" required>
    </div>
     <div class="form-group">
     <label for="Tel"><font size="5">Phone No.:</font></label> 
     <input type="tel" id="Tel" name="Tel" placeholder="0723445678" pattern="[0-9]{10}" required><br>
     <small>Format: 0232453678</small><br><br>
    </div>
    <div class="form-group">
      <label for="Birthday">Birthday:</label>
      <input type="date" class="form-control" id="Birthday" name="Birthday">
    </div>
    <div class="form-group">
      <label for="gender">Genger:</label>
      <br>
      <input type="radio" value="Male" name="gender"  required> Male
      <input type="radio" value="Female" name="gender"  required> Female
      <input type="radio" value="Other" name="gender"  required> Other
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="Email" placeholder="Enter email.." name="Email" required>
    </div>  
    <div class="form-group">
      <label for="level">Level:</label>
      <input type="text" class="form-control" id="level" placeholder="Current education level" name="level">
    </div>   
     <div class="form-group">
      <label for="Low_School">Primary:</label>
      <input type="text" class="form-control" id="Low_School" placeholder="Current education level" name="Low_School">
    </div>
    <div class="form-group">
      <label for="High">High:</label>
      <input type="text" class="form-control" id="High" placeholder="Current education level" name="High">
    </div>
    <div class="form-group">
      <label for="Grade">Grade:</label>
      <input type="text" class="form-control" id="Grade" placeholder="Current education level" name="Grade">
    </div>
    <div class="form-group">
      <label for="University">University:</label>
      <input type="text" class="form-control" id="University" placeholder="Current education level" name="University">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" >Submit</button>
  </form>
</div></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Already Created</button>
        </div>
      </div>
      
    </div>
  </div>
</a>
 <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
    </div>
  </div>
  </li>    
    <li><a href="fin.php"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mModal"><font style="color: black">STATUS</font><div class="loader"></div></button></a>
  </li>
  <li class="active"><a data-toggle="pill" href="#home"><font style="color: black" size="6">COMMENTS</font></a>
      <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
    </div>
  </div>
    </li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
       <div class="media">
    <div class="media-left">
      <img src="avatar1.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
      <p style="color: black">Once more guys you came through for me when i almost gave up with school. sasa life ni fiti i know where i belong now</p>
      
      <!-- Nested media object -->
      <div class="media">
        <div class="media-left">
          <img src="avatar3.jpg" class="media-object" style="width:45px">
        </div>
        <div class="media-body">
          <h4 class="media-heading">John Doe <small><i>Posted on February 20, 2016</i></small></h4>
          <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

          <!-- Nested media object -->
          <div class="media">
            <div class="media-left">
              <img src="a.jpg" class="media-object" style="width:45px">
            </div>
            <div class="media-body">
              <h4 class="media-heading">John Doe <small><i>Posted on February 21, 2016</i></small></h4>
              <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          
        </div>
        
        <!-- Nested media object -->
        <div class="media">
          <div class="media-left">
            <img src="b.jpg" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading">Jane Doe <small><i>Posted on February 20, 2016</i></small></h4>
            <p style="color: black">Thankx into the future you are the best. we love you</p>
          </div>
        </div>
        
      </div>
    </div>
    
    <!-- Nested media object -->    
    <div class="media">
      <div class="media-left">
        <img src="ras.png" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading">Jane Doe <small><i>Posted on February 19, 2016</i></small></h4>
        <p style="color: black">Manze mulinijenga saa hii life yangu uko chuo ni fiti cause i got my place, thankx manze, sa jah bless manze.</p>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
<div id="CONTACT" class="container">
  <div class="row">
    <div class="col-sm-5">
      <img src="ceo.png" width="250" height="200"><br>Dr. DAVID MAISOL
     <h3>Make your life a masterpiece; imagine no limitations on what you can do,have or do.</h3>
     <p>You see, the way you think and feel about yourself, including your beliefs and expectations about what is possible for you, determines everything that happens to you.</p>
     <p>When you change the quality of your thinking, you change the quality of your life, sometimes instantly. Just as positive words can make someone smile or a well-timed humorous quote can make someone laugh, our thoughts react to the world in real-time.</p>
     <P>You have complete control over only one thing in the universe — your thinking.</p>
    </div>
    <div class="col-sm-1">
      
    </div>
    <div class="col-sm-3">
      <p>&nbsp;</p>            
      <h3 style="color: black">Contacts</h3>
      <p>P.O BOX 484, Nairobi</p>
    <h3 style="font-weight: bold">Email:</h3>
    <p>info@into.ac.ke</p>
    <p>ceo@into.ac.ke</p>
    <h4>Tel: 0201112000</h4>
    <h4>Phon:</h4><p>0712346789<br>0732000111</p>
    <h3 style="color: black">Address</h3>
    <p>Getboda CBD Station<br>Kimathi Street, Eagle House - 3rd floor, suite 3<br>Opposite Corner House<br>CBD - GPO/City Market/Nation Centre, Nairob</p>
    </div>
    <div class="col-sm-2">
      <p>&nbsp;</p>
      <h3>Like us</h3>  
      <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-thumbs-up"></span> Like
        </a> 
        <p>&nbsp;</p>
        <h3>Follow us</h3>
        <div style="background-color: white">    
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <br>
      <a href="#" class="fa fa-linkedin"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-vimeo"></a>
    </div> 
    </div>
</div>
<!-- Footer -->
<footer class="containers-fluid bg-4 text-center">
  <p>Designed & Developed By <a href="#">DAVID MAISOL</a></p> 
</footer>

 </body>
 <?php endif ?>
 </html>
 
  