<!DOCTYPE html>
<html>
<head>
	<title>What are your Strength & Weakness |</title>
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
			<h4>What are your Strength & Weakness?</h4>
			<p>

				<h5>How to answer your Stregth.</h5><ol>
				<li> Whenever new software is released, I’m always the first one to test and get familiar with it. I love pushing the edge and learning every aspect of the new software. In fact, just last week I found a software issue with one of my video games. I called the developer, and they fixed it right away. This position will give me the opportunity to apply my passion and help make programs better for your company. </li><br>
			
				<li>I’ve always preferred to work in groups and find that my collaborative nature is one of my strongest attributes. On projects that I directed, I work well to inspire diverse team members and work side by side with them to achieve the project goals. In fact, I’ve increased productivity by ten percent over the course of two years. </li><br>

				<li>My greatest strength is my writing skills. I work well under pressure, and I've never missed a deadline. One specific example that comes to mind is when I was asked to complete a project that a fellow colleague forgot about. My editor didn’t realize this until two hours before the deadline. It was an important piece, so I got to work, and with feverish precision, I was able to complete the article. Not only was it finished on time, but it was received very well by readers of the publication.</li><br>


				<li>I’m relatively new to the finance industry, but I find that I’m good at working with numbers and I truly love it. I love helping people save money and finding new investment opportunities for my clients. Learning about their needs and finding ways to help them achieve the lifestyle they want is so gratifying to me, and I’ve helped my clients increase their net worth by 10% collectively. </li><br>

				<li> I’m an empathetic person who is skilled at relating to people and understanding their needs. At my internship over the summer, I was working the support line and received a call from a disgruntled customer who had been dropped from our service. While the company couldn’t find a solution for her, I walked her through other options she might have so she walked away with a positive interaction with the company. I know the importance of a happy customer, and I'm willing to remain upbeat and solutions-oriented.</li><br>

				<h4>How to answer your Weakness.</h4>
				<li> I tend to be overly critical of myself. Whenever I complete a project, I can’t help but feel that I could have done more even if my work received a positive response. This often leads me to overwork myself and leaves me feeling burned out. Over the past few years, I’ve tried to take time to look at my achievements objectively and celebrate those wins. This has not only improved my work and my confidence, but it has helped me to appreciate my team and other support systems that are always behind me in everything I do.</li><br>

				<li>I am incredibly introverted, which makes me wary of sharing my ideas in a group setting or speaking up during team meetings. I feel that I had good intentions, I just wasn't always comfortable speaking up. After my team didn’t meet expectations on two consecutive projects, I decided to start making changes to get more familiar with sharing my ideas for the benefit of my team. I took local improv classes and started trying to get comfortable discussing my thoughts. It's still a work in progress, but it's something that I've improved dramatically over the past year.</li><br>

				<li>I'm not familiar with the latest version of the software that you use. I’ve spent my time recently focused on generating a positive user experience and have always been willing to learn new things. Throughout my career software has always changed and I’ve always been willing to adapt to changing technology. I will put in the time it takes to learn this new software. </li><br>

				<li> I always try to avoid confrontation, in both my personal and professional life. This caused me to compromise sometimes on the quality of my work or what I needed to complete a project just to keep the peace. This became a real problem when I became a manager. One of the most critical aspects of managing people is telling them what they need to hear and not what they want to hear. I recognized this weakness and had been actively working to voice my opinions constructively and helpfully for the betterment of the team.</li><br>

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
			<h4>What are your Strength & Weakness?</h4>
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