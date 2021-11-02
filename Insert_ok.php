<?php

    $BookName=$_POST['BookName'];
	$BookCategory=$_POST['BookCategory'];
	$BookLink=$_POST['BookLink'];
	$AuthorName=$_POST['AuthorName'];
	$ImageLink=$_POST['ImageLink'];
	 if(isset($_POST['ok'])){
     echo $BookName;
      }
	 

	$link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Attempt insert query execution
	$sql = "INSERT INTO bookinfo (name,authorName,category,link, image) VALUES ('$BookName','$AuthorName','$BookCategory','$BookLink','$ImageLink')";
	if(mysqli_query($link, $sql)){
		echo "Records inserted successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
?>