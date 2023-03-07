<?php include('server.php'); 

// if user is not logged in, they cannot access this page
if (empty($_SESSION['username'])) {
  header('location: Login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>STATUS REPORT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="stylo.css">  
  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.colum {
  float: left;
  width: 25%;
  padding: 0 10px;
}
/* Float four columns side by side */
.cola {
  float: left;
  width: 75%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
.cardo {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.buttn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

.buttn:hover, a:hover {
  opacity: 0.7;
}
</style>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #008080">
    
<div class="container-fluid">
   <a class="navbar-brand" href="orig.html" style="background-color: black; padding: 16px"><font color="white">INTO THE FUTURE</font></a>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="idex.php"><font color="white">HOME</font></a>
    </li>
   
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Welcome<i style="color: green"> <strong><?php echo $_SESSION['username']; ?></strong></i>
             </a>
      <div class="dropdown-menu">
        <a class="dropdown-item fa fa-log-in" href="idex.php?Logout='1'"><font color="red"><i class="fa fa-log-in"></i>Logout</font></a>
        <a class="dropdown-item fa fa-plus" href="#myModal"> Add Profile</a>
        <a class="dropdown-item fa fa-log-in" href="#"><i class="fa fa-log-in"></i>Change Password</a>
      </div>
    </li>
  </ul>
   <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>
</div>
</nav>
<br>

<div class="container-fluid">

<div class="row">
  <div class="colum">
    <div class="card">
      
<h2 style="text-align:center">Profile Card</h2>

<div class="cardo">
  <img src="avax.png" alt="John" style="width:100%">
  <h1><?php echo $_SESSION['username']; ?></h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p class="buttn">DOWNLOAD</p>
</div>
    </div>
  </div>

  <div class="cola">
    <div class="card">
      <dir>
         <div class="container-fluid px-1 px-md-4 py-5 mx-auto">
    <div class="row d-flex justify-content-center">        
            <div class="card card0 border-0">
                <div class="row">
                    <div class="col-12">
                        <div class="card card00 m-2 border-0">
                            <div class="row text-center justify-content-center px-3">
                                <p class="prev text-danger"><span class="fa fa-long-arrow-left"> Go Back</span></p id="back">
                                <h3 class="mt-4">Status Report</h3>
                            </div>
                            <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                <div class="col-md-6">
                                    <div class="card1">
                                        <ul id="progressbar" class="text-center">
                                            <li class="active step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                            <li class="step0"></li>
                                        </ul>
                                        <h6 class="mb-5">Request Made</h6>
                                        <h6 class="mb-5">Request Review</h6>
                                        <h6 class="mb-5">Pending Confirmation</h6>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card2 first-screen show ml-2">
                                        <div class="row text-center px-3 mr-2">
                                            <div class="mb-2 col-2"> <span class="fa fa-reddit social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-facebook social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-linkedin social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-google-plus social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-twitter social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-dropbox social"></span> </div>
                                        </div>
                                        <div class="row px-3 mt-4">
                                           <div class="form-group mt-1 mb-1">
                                             <p class="mb-0" style="font-weight: bold; font-size: 7">You made a transfer/placement request</p>
                                           </div> 
                                           <div class="next-button text-center mt-1 ml-2"><p style="font-size: 10px;" id="demo"></p><span class="fa fa-arrow-right"></div>
                                            <script>
        $(document).ready(function(){

var current_fs, next_fs, previous_fs;

// No BACK button on first screen
if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}

// Next button

// Set the date we're counting down to
var countDownDate = new Date( "now"1617695090680 ).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date(1617695090680);
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    $(".next-button").click(function(){

current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(".prev").css({ 'display' : 'block' });

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

$("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
  });

});

}


}, 1000);
});
</script>

                                           </div>                                                                             
                                        <div class="row px-3 mt-1 mb-5">
                                            <div class="custom-control custom-checkbox"> <input checked id="customCheck1" type="checkbox" class="custom-control-input"> <label for="customCheck1" class="custom-control-label">I want to receive email notification on status reports</label> </div>
                                        </div>
                                    </div>
                                    <div class="card2 ml-2">
                                      <div class="row text-center px-3 mr-2">
                                            <div class="mb-2 col-2"> <span class="fa fa-reddit social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-facebook social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-linkedin social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-google-plus social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-twitter social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-dropbox social"></span> </div>
                                        </div>                
                                        <div class="row px-3 mt-3">
                                            <div class="form-group mt-1 mb-1">
                                              <p class="mb-0" style="font-weight: bold; font-size: 17px">We are reviewing your request and get back to you as sson as possible.
                                                <font size="2" color="red">Usually this step takes 14days from the day the request was made.</font></p>
                                            </div>
                                            <div class="next-button text-center mt-1 ml-2"><p style="font-size: 10px;" id="dem"></p> <span class="fa fa-arrow-right"></span>
                                               <script>
        $(document).ready(function(){

var current_fs, next_fs, previous_fs;

// No BACK button on first screen
if($(".show").hasClass("first-screen")) {
$(".prev").css({ 'display' : 'none' });
}

// Next button

// Set the date we're counting down to
var countDownDate = new Date("April 6, 2021 10:33:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("dem").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    $(".next-button").click(function(){

current_fs = $(this).parent().parent();
next_fs = $(this).parent().parent().next();

$(".prev").css({ 'display' : 'block' });

$(current_fs).removeClass("show");
$(next_fs).addClass("show");

$("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

current_fs.animate({}, {
step: function() {

current_fs.css({
'display': 'none',
'position': 'relative'
});

next_fs.css({
'display': 'block'
});
}
  });

});

}


}, 1000);
});
</script>

                                             </div>
                                        </div>                                       
                                    </div>
                                    <div class="card2 ml-2">
                                      <div class="row text-center px-3 mr-2">
                                            <div class="mb-2 col-2"> <span class="fa fa-reddit social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-facebook social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-linkedin social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-google-plus social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-twitter social"></span> </div>
                                            <div class="mb-2 col-2"> <span class="fa fa-dropbox social"></span> </div>
                                        </div> 
                                        <div class="row px-3 mt-3">
                                            <p class="mb-0" style="font-weight: bold; font-size: 17px">In communicatiopn with the institution requeste to join.</p>
                                            <div class="form-group mt-3 mb-4">
                                                <p class="mb-0" style="font-weight: bold; font-size: 17px">Almost there.<font color="red">Patience pays!</font></p>
                                            </div>
                                            <div class="next-button text-center mt-3 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                                        </div>
                                    </div>
                                    <div class="card2 ml-2">
                                        <div class="row px-3 mt-2 mb-4 text-center">
                                            <h2 class="col-12 text-danger"><strong><a style="background-color: purple" href="#" class="btn btn-info btn-lg">CONGRATULATIONS !!!</a></strong></h2>
                                            <p>&nbsp;</p>
                                            <div class="col-12 text-center"><img class="tick" src="https://i.imgur.com/WDI0da4.gif"></div>
                                            <h6 class="col-12 mt-2"><i>...Download your admission letter from profile; also sent to email...</i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row px-3">
                                <h2 class="text-muted get-bonus mt-4 mb-5">Approved</h2>
                                <img class="pic ml-auto mr-3" src="https://i.imgur.com/NFodZjZ.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </dir>

    </div>
  </div> 
</div>
</div>
</body>
</html>