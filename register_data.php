<?php
include "config.php";

$reg_fname=$reg_lname=$reg_email=$reg_password=$reg_phone="";

if(isset($_POST['reg_fname']) && isset($_POST['reg_lname'])  && isset($_POST['reg_email']) && isset($_POST['reg_password']) && isset($_POST['reg_phone'])){
			$reg_fname=$_POST['reg_fname'];
			$reg_lname=$_POST['reg_lname'];
			$reg_email=$_POST['reg_email'];
			$reg_password=$_POST['reg_password'];
			$reg_phone=$_POST['reg_phone'];
		}

$sql="insert into registration_details (fname,lname,email,password,phone) values('$reg_fname','$reg_lname','$reg_email','$reg_password','$reg_phone')";

if(mysqli_query($conn,$sql))
{
	echo "registration successfull, please login now";
}
else
{
	echo "registration unsuccessfull";
}
mysqli_close($conn);

?>
