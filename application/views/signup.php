<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>signup </title>

	
</head>
<body>

<div id="container">
	<h1>Sign up</h1>
	
	<?php
		echo form_open('main/signup_validation');
		
		echo validation_errors();
		
		echo "<p>";
		echo "Eamil:". " ". form_input('email', $this->input->post('email'));
		echo "</p>";
		
		echo "<p>";
		echo "Password:". " ". form_password('password');
		echo "</p>";
		
		echo "<p>"; 
		echo "Confirm Password:". " ". form_password('cpassword');
		echo "</p>";
		
		echo "<p>";
		echo form_submit('signup_submit', 'Sign up');
		echo "</p>";
		
		echo form_close();
	?>
		
		
	
	
</div>

</body>
</html>