<?php
 $Firstname = filter_input(INPUT_POST, 'Firstname');
 $Surname = filter_input(INPUT_POST, 'Surname');
 $Lastname = filter_input(INPUT_POST, 'Lastname');
 $StudentID = filter_input(INPUT_POST, 'StudentID');
 $Birthday = filter_input(INPUT_POST,'Birthday');
 $Gender = filter_input(INPUT_POST, 'Gender');
 $email = filter_input(INPUT_POST, 'email');
 $Transfer_From = filter_input(INPUT_POST, 'Transfer_From');
 $Transfer_to = filter_input(INPUT_POST, 'Transfer_to');
 $Program = filter_input(INPUT_POST, 'Program');
 $Indoors = filter_input(INPUT_POST, 'Indoors');
 $Outdoors = filter_input(INPUT_POST, 'Outdoors');
 $Science = filter_input(INPUT_POST, 'Science');
 $General = filter_input(INPUT_POST, 'General');
 $Societies = filter_input(INPUT_POST, 'Societies');
 $Comments = filter_input(INPUT_POST, 'Comments');

 	if (!empty($Firstname) || !empty($Surname) || !empty($Lastname) || !empty($StudentID) || !empty($Birthday) || !empty($Gender) || !empty($email) || !empty($Transfer_From) || !empty($Transfer_to) || !empty($Program)|| !empty($Indoors) || !empty($Outdoors) || !empty($Science) || !empty($General) || !empty($Societies) || !empty($Comment)) {
 	 	$servername = "localhost";
 	 	$dbUsername = "root";
 	$dbPassword = "davidmaiso";
 	$dbname = "projector";


 	//create connection
 	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

 	$dup = mysqli_query($conn, "Select * From register where Email= '$email' ");
if (mysqli_num_rows($dup)>0) {
	echo "Already Registered!";

} else{

 	if (mysqli_connect_error()) {
 		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
 	 } 
 	 else{
 	 	$sql = "INSERT INTO register (Firstname, Surname, Lastname, StudentID, Birthday, Gender, email, Transfer_From, Transfer_to, Program, Indoors, Outdoors, Science, General, Societies, Comments) VALUES('$Firstname', '$Surname', '$Lastname', '$StudentID', '$Birthday', '$Gender', '$email', '$Transfer_From', '$Transfer_to', '$Program', '$Indoors', '$Outdoors', '$Science', '$General', '$Societies', '$Comments')";
 	 	
 	 		if ($conn ->  query($sql)) {
 			echo "New record added successfully!";
 			
 		}
 		else {
 			echo "Error: ". $sql . "<br>". $conn -> error;
 		}
 		$conn -> close();
 	}
 }
}
?>