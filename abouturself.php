<!DOCTYPE html>
<html>
<head>
	<title>Tell me about yourself |</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/aboutself.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
		<a href="http://localhost/Intervews_site/mysite.php" class="navbar-brands">PrepInterviews</a>
		<h6 class="top-head">INDIA'S FIRST INTERVIEWS SITE</h6>
	</div>
	<nav class="navbar navbar-expand-sm">
		<div class="container">
			
			<button class="navbar-toggler navbar-dark bg-info ml-auto" data-toggle="collapse" data-target="#navbarid">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="navbar navbar-collapse" id="navbarid">
		<ul class="navbar-nav text-center ml-auto">
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/mysite.php" class="nav-link"> Home </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/HRinterviews.php" class="nav-link"> HR Interviews </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_siteTechnical.php" class="nav-link"> Technical Interviews </a>
			</li>
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/gov.php" class="nav-link"> Government Job </a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link"> Blogs </a>
			</li>
		</ul>
	</div>
		</div>
	</nav>
	<section>
		<div class="container">
			<h4>How to introduce yourself in interview.</h4>
			<p><ul>
				<li>Start with an important strength the hiring manager is drooling for.</li>
				<li>Tell how that skill or quality helped your recent employer.</li>
				<li>Give metrics to show it helped a past employer too.</li>
				<li>Tell how this new opportunity will help you grow your talents even more.</li>
				<li><a href="#reviews">Post your answer now</a></li><hr>
			</ul></p>
		</div>

			<?php
			$servername = 'localhost';
			$username = "root";
			$password = "";

			$database = "interviewsite";

			// mysql i is a driver who creating connection
			$conn = new mysqli($servername, $username, $password, $database);

			// check conncetion
			if ($conn->connect_error){
				die("Conncetion failed: " . $conn->connect_error);
			}

			// echo "connected successfully"

			$sql = "SELECT * FROM feedback";

			?>
			
		<div class="container post_div pl-3 mb-2" style="background: #efef;">
				
				<?php
				$result = $conn->query($sql);
				while ($rowsdata = $result->fetch_assoc()) {
				?>

				<p id="name" style="font-size: 17px;"><?php echo $rowsdata['name']; ?> &nbsp;<span class="time"><?php echo date("Y/m/d h:i:s A"); ?> </span></p>
				
				<p id="comments" style="overflow-wrap: break-word;padding-left: 20px;">
					<?php echo $rowsdata['comment']; ?></p>
			<?php } ?>
			<!-- </div> -->
		</div>
	</section>

	<a name="reviews">     <!-- this is used for anchor to click on "post on ans now" -->
	<section class="resume-div">
		<form action="http://localhost/Intervews_site/feedbacksubmit.php" method="get">

			<h4>Tell me about yourself</h4>

			<textarea cols="60" rows="5" name="comment" required></textarea><br>
			
			Name*:<input type="input" name="name" required><br><br>

			Email :<input type="Email" name="email"><br>

			<p>Note: Your Comments will be display after Approval.</p>
			<input type="submit" value="Submit" id="submit">

		</form>
	</section>
</form>

</body>
</html>