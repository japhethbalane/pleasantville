<?php
//not yet done
	$host= 'localhost';
	$user= 'root';
	$pass='';
	$db= 'PleasantVille';

	$con = mysqli_connect($host,$user,$pass,$db);

	if($con)
	    echo 'connected successfully to PlasantVille database';

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$contact = $_POST['contact'];

	//naay error ani - piao
	$sql="INSERT INTO member(`FName`, `LName`, `ContactNo`) VALUES ('$fname','$lname','$contact')";


	echo "<br/>$sql<br/>";
	$query=mysqli_query($con,$sql);

	if($query){
		header("Location: ../../../html/admin.html");
	    echo 'Add member complete!';
	}
	else
	    echo ' A problem has been encountered. Check add member.';
?>