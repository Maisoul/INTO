<?php
session_start();
$username = "";
$email = "";
$level = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'davidmaiso', 'projector');

//if the register button is clicked
if (isset($_POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$level = mysql_real_escape_string($_POST['level']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);

	//ensure that form fields are filled properly
	if (empty($username)) {
		array_push($errors,"Username is required");
			}
			if (empty($email)) {
		array_push($errors,"Email is required");
			}
			if (empty($level)) {
		array_push($errors, "Level is required");
						}			
			if (empty($password_1)) {
		array_push($errors,"Password is required");
			}

			if ($password_1 != $password_2) {
				array_push($errors, "They passwords do not match");
				} 


			// if there are no errors, save user to database
			if (count($errors) ==0) {
				$password = md5($password_1);//encrypt password before storeing in database (security)
				$sql = "INSERT INTO user (username, email, level, password) VALUES('$username', '$email', '$level', '$password')";
				mysqli_query($db,$sql);
				 $_SESSION['username'] = $username;
				        $_SESSION['success'] = "You are now logged in";
				        header('location: idex.php'); // redirect to home page
		
			}
		
		}
		
			//log user in from login page
			if(isset($_POST['login'])) {
				$username = mysql_real_escape_string($_POST['username']);
	            $password = mysql_real_escape_string($_POST['password']);
	        

	//ensure that form field are field properly
	if (empty($username)) {
		array_push($errors,"Username is required");
			}
			if (empty($password)) {
				array_push($errors,"Password is required");
				}
				if (count($errors) == 0 ) {
					$password = md5($password); //encrypt password before comparing with that from database
				    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
				    $result = mysqli_query($db,$query);

				    if (mysqli_num_rows($result) == 1) {
				    	// log user in
					    $_SESSION['username'] = $username;
				        $_SESSION['success'] = "You are now logged in";
				        header('location: idex.php'); // redirect to home page
				    }
			
				else{
					array_push($errors, "Wrong username/password combination");
					}
					}
					}	
				
				
			

			//logout
			if (isset($_GET['Logout'])){
				session_destroy();
				unset($_SESSION['username']);
				header('location: idex.php');
			}


?>