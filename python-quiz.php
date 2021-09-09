<!DOCTYPE html>
<html>
<head>
	<title>Python Quiz | PrepInterviews</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/python-quiz.css">
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
				<a href="http://localhost/Intervews_site/Technical.php" class="nav-link"> Technical Interview </a>
			</li>
			<!-- <li class="nav-item">
				<a href="NonTech.php" class="nav-link"> Technical Interview </a>
			</li> -->
			<li class="nav-item">
				<a href="http://localhost/Intervews_site/mnc.php" class="nav-link"> MNC Companies </a>
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



	<div class="container">
		<div class="parent-div d-flex justify-content-center">
			<div class="child-div" style="width: 700px; height: auto;">
		<h1>Python Quiz</h1>
		<p>Check your Python learning progress and take your skills to the next level with PrepInterviews interactive quizzes.</p>
		
		<p><img src="img/Quiz-python-img.webp" class="python-img"></p>

		<p class="p-div">The quiz contains 40 questions and there is no time limit. You’ll get 1 point for each correct answer. At the end of the quiz, you’ll receive a total score. The maximum score is 100%. Good luck!</p>

		<form name="mcq" class="quizform">
			<ol>
			<li>Is Python case sensitive when dealing with identifires?</li>
			<input type="radio" name="bird" value="a"> yes<br>
			<input type="radio" name="bird" value="b"> no<br>
			<input type="radio" name="bird" value="c"> machine depemdent<br>
			<input type="radio" name="bird" value="c"> none of the mentioned<br>
			<li>National Animal of India?</li>
			<input type="radio" name="animal" value="a"> Lion<br>
			<input type="radio" name="animal" value="b"> Elephant<br>
			<input type="radio" name="animal" value="c"> Tiger<br>
			<li>Prime Minister of India in 2019?</li>
			<input type="radio" name="pm" value="a"> Manmohan Singh<br>
			<input type="radio" name="pm" value="b"> Narendra Modi<br>
			<input type="radio" name="pm" value="c"> Atal Bihari<br>
			<li>National Sweet of India?</li>
			<input type="radio" name="sweet" value="a"> Kaju Katli<br>
			<input type="radio" name="sweet" value="b"> Gulab Jamun<br>
			<input type="radio" name="sweet" value="c"> Jalebi<br>
			<li>National Flower of India?</li>
			<input type="radio" name="flower" value="a"> Lotus<br>
			<input type="radio" name="flower" value="b"> Jasmin<br>
			<input type="radio" name="flower" value="c"> Champa<br><br>
			<input type="button" value="submit" id="submit" onclick="check()"></button>
			Result:<h3 id="result"></h3>
			</ol>
		</form>
		</div>
		</div>
	</div>
	



	<script type="text/javascript">
		function check(){
			var q1 = document.mcq.bird.value;
			var q2 = document.mcq.animal.value;
			var q3 = document.mcq.pm.value;
			var q4 = document.mcq.sweet.value;
			var q5 = document.mcq.flower.value;	
			var count=0;

			if(q1=="a"){
				count++;
			}
			if (q2=="c") {
				count++;
			}
			if (q3=="b") {
				count++;
			}
			if (q4=="c") {
				count++;
			}
			if (q5=="a") {
				count++;
			}
			document.getElementById('result').innerHTML=count;
			alert("You got "+count+" marks");


		}
		
	</script>
</body>
</html>
