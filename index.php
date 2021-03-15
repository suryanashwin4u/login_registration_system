<!DOCTYPE html>
<html>
<head>
	<title>Login|Registration|Forgot Password</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./ajax_req.js"></script>
	<script type="text/javascript" src="./functions.js"></script>

</head>
<body>
<center>
<div class="container">
  <h2>Login & Registration System</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#register">Register</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#forgot">forgot password</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="register" class="container tab-pane active"><br>
			<form id="reg_submit">
			<h3>Registration Form</h3>
			<label >First Name: &nbsp &nbsp &nbsp &nbsp</label>
			<input type="text" id="reg_fname" >
			<br>
			<br>
			<label  >Last Name: &nbsp &nbsp &nbsp &nbsp</label>
			<input type="text" id="reg_lname" >
			<br>
			<br>
			<label >Email address: &nbsp </label>
			<input type="text" id="reg_email" >
			<br>
			<br>
			<label  >Type Password: &nbsp</label>
			<input type="Password" id="reg_password" >
			<br>
			<br>
			<label  >Phone Number:</label>
			<input type="text" id="reg_phone" >
			<br>
			<br>
			<button type="submit" class="btn-primary btn">Submit</button>
			<br>
			<br>
		</form>      
    </div>
    <div id="login" class="container tab-pane fade"><br>
			<form id="login_submit">
			<h3>Login Form</h3>
			<label  >Email Address:</label>
			<input type="text" id="login_email">
			<br>
			<br>
			<label >Type Password:</label>
			<input type="Password" id="login_password">
			<br>
			<br>
			<button type="submit" class="btn-primary btn">Login</button>
			<br>
			<br>
		</form>      
    </div>
    <div id="forgot" class="container tab-pane fade"><br>
		<form id="forgot_submit">
			<h3 >Forgot Password Form</h3>
			<label  >Email Address:</label>
			<input type="text" id="forgot_email">
			<br>
			<br>			
			<button type="submit" onclick="get_otp()" class="btn-primary btn">Send Email</button>
			<br>
			<br>
		</form>      
    </div>
  </div>
</div>
</center>
</body>
</html>
