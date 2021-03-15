$(document).ready(function(){
$("#reg_submit").submit(function(event){
	event.preventDefault();
	var fname=$('#reg_fname').val();
	var lname=$('#reg_lname').val();
	var email=$('#reg_email').val();
	var password=$('#reg_password').val();
	var phone=$('#reg_phone').val();
	var datastring={'reg_fname':fname,'reg_lname':lname,'reg_email':email,'reg_password':password,'reg_phone':phone};
		$.ajax({
		            type        :'POST', 
		            url         :'register_data.php',
		            data        :datastring,
		            cache		:false,
		            encode      :true,
		            success		:function(data)
		            {
					
						alert(data);

					}
				});
				})});



$(document).ready(function(){
$("#login_submit").submit(function(event){
	event.preventDefault();
	var email=$('#login_email').val();
	var password=$('#login_password').val();
	var datastring={'login_email':email,'login_password':password};
		$.ajax({
		            type        :'POST', 
		            url         :'login_check.php',
		            data        :datastring,
		            cache		:false,
		            encode      :true,
		            success		:function(data)
		            {
					
						window.location.href = "my_account.php";

					}
				});
				})});
