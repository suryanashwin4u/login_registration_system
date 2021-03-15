<?php
include "config.php";

$login_email=$login_password="";

if(isset($_POST['login_email']) && isset($_POST['login_password'])){
			$login_email    = $_POST['login_email'];
			$login_password = $_POST['login_password'];
}

$sql_query="select * from registration_details where email='$login_email' and password='$login_password'";

$result=mysqli_query($conn,$sql_query);

$count = mysqli_num_rows($result);
if($count==1){
	     	
	     	session_start();
	        $_SESSION['user_name']=$login_email;
	        mysqli_close($conn);
	     	header("location:my_account.php");
	     	exit;
	     }     
else{
	echo "invalid credentials,please retype correct email and password";
}

?>