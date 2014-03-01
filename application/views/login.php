<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login </title>

	
</head>
<body>

<div id="container">
	<h1>login page</h1>
	
	<?php
		echo form_open('main/login_validation');
		
		echo validation_errors();
		
		echo "<p>";
		echo "Email:". "  ". form_input('email', $this->input->post('email'));
		echo "</p>";
		
		echo "<p>";
		echo "Password:". " ". form_password('password');
		echo "</p>";
		
		echo "<p>";
		echo form_submit('login_submit', 'Login');
		echo "</p>";
		
		form_close();
	?>
	
	<a href='<?php echo base_url()."main/signup"; ?>'>Sign Up</a>
	
</div>

</body>
</html>