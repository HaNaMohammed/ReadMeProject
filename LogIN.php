 <?php
	session_start();

       $link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
      $myemail = mysqli_real_escape_string($link,$_POST['emaill']);
      $mypassword = mysqli_real_escape_string($link,$_POST['passwordd']); 
       $sql = "SELECT id FROM user WHERE email = '$myemail' and password = '$mypassword'";

      $result = mysqli_query($link,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
	if($count == 1){
		
		 //session_register("emaill");
         $_SESSION['email'] = $myemail;
		 $_SESSION['password'] = $mypassword;
		 
         header('location: Test.php');
		exit();
	}
	else {
		header('location: index.html');
		echo "Your Login Name or Password is invalid";
		
          
      }


?>