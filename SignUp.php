<?php
    session_start();
    $name=$_POST['name'];
	$UserName=$_POST['UserName'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$Confirmpassword=$_POST['Confirmpassword'];
	

	$link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt insert query execution
	$sql = "INSERT INTO user (name,password,confirmPassword,email, userName) VALUES ('$name','$password','$Confirmpassword','$email','$UserName')";
	if(mysqli_query($link, $sql)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 header("location:Test.php");
	// Close connection
	 $_SESSION['email'] = $email;
	 $_SESSION['password'] = $password;
	mysqli_close($link);
?>