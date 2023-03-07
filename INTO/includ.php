<?php
 $Name = filter_input(INPUT_POST, 'Name');
 $Tel = filter_input(INPUT_POST, 'Tel');
 $Birthday = filter_input(INPUT_POST,'Birthday');
 $Gender = filter_input(INPUT_POST, 'Gender');
 $Email = filter_input(INPUT_POST, 'Email');
 $level = filter_input(INPUT_POST, 'level');
 $Low_School = filter_input(INPUT_POST, 'Low_School');
 $High = filter_input(INPUT_POST, 'High');
 $Grade = filter_input(INPUT_POST, 'Grade');
 $University = filter_input(INPUT_POST, 'University');


 	if (!empty($Name) || !empty($Tel) || !empty($Birthday) || !empty($Gender) || !empty($Email) || !empty($level) || !empty($Low_School) || !empty($High) || !empty($Grade) || !empty($University)) {
 	 	$servername = "localhost";
 	 	$dbUsername = "root";
 	$dbPassword = "davidmaiso";
 	$dbname = "projector";


 	//create connection
 	$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

 	$dup = mysqli_query($conn, "Select * From profile where Tel= '$Tel' ");
if (mysqli_num_rows($dup)>0) {
	echo "Already Registered!";

} else{

 	if (mysqli_connect_error()) {
 		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
 	 } 
 	 else{
 	 	$sql = "INSERT INTO profile (Name, Tel, Birthday, Gender, Email, level, Low_School, High, Grade, University) VALUES('$Name', '$Tel', '$Birthday', 'Gender', '$Email', '$level', '$Low_School', '$High', '$Grade', '$University')";
 	 	
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