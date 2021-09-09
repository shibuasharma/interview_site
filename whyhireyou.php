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
			<h4>Why should we Hire you?</h4>
			<p><ol>
				<li>That's a great question! You have a slight advantage over me since you know what you're looking for and I am still learning about your company. From what I've learned, it sounds like you are looking for someone who will be able to handle customer concerns quickly and effectively, is that accurate? </li><br>
			
				<li>This is a critical question in the process, thank you for asking. Based on what you've said today and from the research I've done, your company is looking for a skilled communicator and experienced marketer to grow your business and help your company stand out from the competition. At my previous company, I increased their activity by 24% by implementing targeted social media advertising. I will bring that innovative and entrepreneurial spirit to your company, and your success will be my top priority.</li><br>

				<li>I believe that my experience with technology, specifically in the web design space, make me the best match for this position. In my previous job, I was responsible for maintaining and updating our company website. This required keeping employee profiles updated and continuously posting information regarding upcoming events. I truly enjoyed what I was doing, which is what drew me to this position with your company. I would love to bring the coding and content skills I learned there to this position.</li><br>


				<li>I’m glad you asked. You explained earlier that leadership qualities are a bonus for this position. In my 10 years of experience as a sales manager, I have effectively managed teams of over 15 people. I developed motivational skills that earned my region the “Region of the Year” five years in a row for consistently meeting and exceeding sales goals. I will bring those leadership abilities to this position. </li><br>

				<li>The job listing states that you are looking for someone with patience and superior communication skills. While volunteering and holding an office for the Special Olympics, I learned how to be patient with the athletes and participants at our state’s Special Olympics. Coordinating the event helped me develop better communication and planning skills which are imperative when performing the responsibilities you described today. </li><br>
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
			<h4>Why should we hire you?</h4>
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