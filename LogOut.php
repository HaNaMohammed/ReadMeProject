<?php
   session_start();
   echo 'sorry';
   echo $email;
   echo $mypassword;
   echo $login_session;
   unset($_SESSION['email']);
   unset($_SESSION['password']);
   session_destroy();
   header("Location: index.html");
   exit;
?>