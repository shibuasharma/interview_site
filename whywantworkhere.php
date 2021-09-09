<!DOCTYPE html>
<html>
<head>
	<title>Why do you want to work at our company? |</title>
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

	<link rel="stylesheet" type="text/css" href="aboutComment.css">
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
				<a href="http://localhost/Intervews_site/Technical.php" class="nav-link"> Technical Interviews </a>
			</li>
			<!-- <li class="nav-item">
				<a href="NonTech.php" class="nav-link"> Non-Technical Interview </a>
			</li> -->
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
			<h4>Why do you want to work at our company?</h4>
			<p><ol>
				<li>I firmly believe in taking a collaborative approach to each project so when I saw a position with your company to join the production team I knew I had to apply. I've seen your work in theatrical production, and your behind-the-scenes video really inspired me because I saw the teamwork in action. I love working with a team to achieve a common goal, and I know my background in production has prepared me for this role. I look forward to becoming a valued contributor to this phenomenal team.</li><br>
			
				<li>I read an article a few months back on the outreach your company does within the community. Giving back and volunteering is a significant part of my own personal values, and I remember feeling excited that a company values the community as much as I do. That excitement grew when I saw there was a job opening in my field here. I would really love coming to work each day, knowing that I am helping to make a difference in the community through my work here.  </li><br>

				<li>I have used your software for many years and am consistently impressed with the innovation and developments made in the space. I also appreciate your dedication to education, providing your customers with free demos to learn how to use your products effectively. I would love to be a part of this innovative team and use my skills to continue the groundbreaking work you are doing here.</li><br>


				<li>I've seen your company consistently listed as one of the top places to work. I've read employee testimonials and heard of your enthusiasm for encouraging employee growth through education, training, and vast resources. I already know that engaged employees produce better work, and that is evident in the most recent campaign you created. I would love to join your innovative team, continue to create great work, and grow within the company by learning new skills.</li><br>

				<li>I saw an article about your new CEO John Smith and the company’s renewed investment in innovation. As a natural innovator, this drew me to the position with your company because I know that I will thrive in a situation where innovation is at the forefront of everything we do.</li><br>
				<li><a href="#reviews">Post your answer now</a></li><hr>
			</ol></p>
		</div>

		<div id="comment">
			<h6 id="name"></h6>
			<p id="comments" style="overflow-wrap: break-word;"></p>
		</div>
	</section>

	<a name="reviews">     <!-- this is used for anchor to click on "post on ans now" -->
	<section class="resume-div">
		<form id="f1">
			<h4>Why do you want to work at our company?</h4>
			<textarea cols="60" rows="5" name="body" id="body" required></textarea><br>
			Name*:<input type="input" name="name" id="name"><br><br>
			Email :<input type="Email" name="email"><br>
			<p>Note: Your Comments will be display after Approval.</p>
			<input type="button" value="Submit" id="submit" onclick="comments()">
		</form>
	</section>
</form>
<!-- style="word-wrap: break-word; -->



<script type="text/javascript">
	function comments()
	{
		var bodyy = f1.body.value
		var body = "&nbsp;&nbsp;&nbsp;"+bodyy
		var nam = f1.name.value
		var d = Date()
		var name = "&nbsp;&nbsp;"+nam+" :"+" ("+d+")"
		
		document.getElementById('comments').innerHTML=body;
		document.getElementById('name').innerHTML=name;

	}
</script>
</script>
</body>
</html>