<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>prepinterniew | Register</title>
	<link rel="stylesheet" type="text/css" href="style/register.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
//    if(isset($_POST['cancel'])){
    
//    }
?>
<div id="container">
	<div class="logo">
		<a href="http://localhost/Intervews_site/mysite.php" class="navbar-brands">PrepInterviews</a>
	</div>

	<div class="box">
		<h2>REGISTER</h2>

		<form action="http://localhost/Intervews_site/connection.php" method="get">
			<div class="inputbox">
				<input type="text" name="name" required="valid">
				<label>First Name</label>		
			</div>
			<div class="inputbox">
				<input type="email" name="email" required="valid">
				<label>Email</label>		
			</div>
			<div class="inputbox">
				<input type="text" name="mobile" required="valid">
				<label>Mobile</label>		
			</div>
			<div class="inputbox">
				<input type="password" name="password" required="valid">
				<label>Password</label>		
			</div>
			<input type="submit" name="submit" value="Submit">
			<input type="button" value="Cancel"> 
		</form>
	</div>
</div>
</body>
</html>