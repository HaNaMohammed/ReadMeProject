<?php

    $OldBookName=$_POST['OldBookName'];
    $BookName=$_POST['BookName'];
	$BookCategory=$_POST['BookCategory'];
	$BookLink=$_POST['BookLink'];
	$AuthorName=$_POST['AuthorName'];
	$ImageLink=$_POST['ImageLink'];
    echo $BookName ;
       $link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt update query execution
$sql = "UPDATE bookinfo SET name='$BookName' ,authorName='$AuthorName' ,category='$BookCategory' ,link='$BookLink', image='$ImageLink' WHERE name='$OldBookName'";
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);


?>