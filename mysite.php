<!DOCTYPE html>
<html>
<head>
	<title>Interviews | Home</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style/site.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style>
		button{
			padding: 10px;
			border: none;
			border-radius: 5px;
			width: 150px;
			color: #fff;
			background: linear-gradient(57deg, #00c6a7, #1e4d92)
		}
		button:hover{
			background: linear-gradient(57deg, #1e4d92, #00c6a7);
		}
	</style>

</head>
<body onload="myFunction()">

	<div id="loading"></div>

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
				<a href="mysite.php" class="nav-link"> Home </a>
			</li>
			<li class="nav-item">
				<a href="HRinterviews.php" class="nav-link"> HR Interviews </a>
			</li>
			<li class="nav-item">
				<a href="Technical.php" class="nav-link"> Technical Interviews </a>
			</li>
			<li class="nav-item">
				<a href="mnc.php" class="nav-link"> MNC Companies </a>
			</li>
			<li class="nav-item">
				<a href="http://www.sarkariresult.com" class="nav-link"> Government Job </a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link"> Blogs </a>
			</li>
		</ul>
	</div>
		</div>
	</nav>

	<div class="afternav col-sm-12 h-110">
		<div class="row">
			<div class="leftdiv col-lg-5 col-md-5 col-sm-12 align-item-center text-center justify-content-center p-5">
				<img src="img/logo_img.png">
			</div>
			<div class="rightdiv col-lg-7 col-md-7 col-sm-12 align-item-center text-center justify-content-center">
				<h2 class="covertext">INTERVIEWS WITH INDUSTRY EXPERTS</h2>
				<h6 class="covertext pb-2">On-demand | Anywhere</h6>
				<a href="http://localhost/Intervews_site/register.php"><button>REGISTER</button></a>&nbsp;&nbsp;
				<a href="http://localhost/Intervews_site/login.php"><button>Login</button></a>
			</div>
		</div>
	</div><br>

    <div class="container mb-5">
    	<div class="row">
    		<h2 class="page-title pb-2">JobPreperation - The Best Portal to preparing for Interviews.</h2>
    		<div class="col-lg-6 col-md-6 col-sm-12 ">
    			<p>
 				JobPreperation portal provide the facility to make prepared for the jobs interviews and it provide the best way for MNC Companies, HR Interviews, Technical Interviews, Non-Technical Interviews, Government Jobs and many more companies. It is the complete site for the interview preperations and it pvide the views of experianced persons. For more visit JobPreperation <a href="#">training.jobpreperation.com</a>
 		    </p>
 		    <p>
 		    	Interviews are crucial moments in one’s career. Theoretical knowledge of interview questions isn't enough when you actually face an interview. Too often fear takes over our performance in job interviews.
 		    </p>
    		</div>
    		<div class="col-lg-6 col-md-6 col-sm-12 pt-5" style="background: linear-gradient(57deg, #00c6a7, #1e4d92); color:#fff;">
    			<h3>What We Do</h3>
 				<p>InterviewBuddy is built on the premise that practice & preparation are crucial to get over your anxieties when attending an interview.</p>
    		</div>
    	</div>
    </div>

    <div class="container p-3 text-center mb-2" style="background: #f1f2f6">
    	<h2 style="text-transform: uppercase;">About US</h2>
    	<div class="row">
    		<div class="left-div col-6">
    			<img src="https://ak.picdn.net/shutterstock/videos/1026490796/thumb/5.jpg" style="height: auto;width: 500px;">
    		</div>
    		<div class="aboutus col-md-6 col-12 p-2">
    			<p style="text-align: justify;text-align-last:auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    		</div>
    	</div>
    </div>

	<div class="text-center pt-3 pb-1" style="background: #22a6b3; color: #fff;">
		<p>&copy; Copyright 2019-2020 www.jobpreperation.com. All rights reserved. Developed by JobPreperation.</p>
	</div>



<script>

	var preloader = document.getElementById('loading');

	function myFunction(){
		preloader.style.display = 'none';
	}

</script> 

</body>
</html>