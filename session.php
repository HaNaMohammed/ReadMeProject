<?php
   
   session_start();
    $link = mysqli_connect("localhost", "root", "hanaa12300", "readme");
   //$user_check = $_SESSION['login_user'];
   $myemail=$_SESSION['email'];
   $mypassword=$_SESSION['password'];
   $ses_sql = mysqli_query($link,"select name FROM user WHERE  email ='$myemail' and password = '$mypassword'" );
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $_SESSION['login_user']=$login_session;
   if(!isset($_SESSION['login_user'])){
      header("location:index.html");
   }
?>