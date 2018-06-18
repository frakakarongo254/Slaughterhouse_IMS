<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $user_level = $_SESSION['login_user_level'];
   
   $ses_sql = mysqli_query($conn,"select * from user where `email` = '".$user_check."' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $login_session_password = $row['password'];
   $login_session_email = $row['email'];
   $login_session_user_level = $row['level'];
   
   if(!isset($_SESSION['login_user']) and $_SESSION['login_user_level'] !='0' ){
      header("location:../index.php");
   }
    function isNonAdmin()
{
	if (isset($_SESSION['login_user']) && $_SESSION['login_user_level']== 'Normal User' ) {
		return true;
	}else{
		return false;
	}
}
?>