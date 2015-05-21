<!DOCTYPE html>
<html>
<head>
<title>My Work</title>
<link href='styles.css' rel='stylesheet' type='text/css'>
</head>
	<body>
	<?php include 'head.inc'; ?> <!-- doesn't close wrapper or content div -->
	<div id="wrapper">
	<header>
			<img src="images/masthead.jpg" alt="Masthead"/>
		</header>
		<div id="navbar">
			<p>
				<a href="about.php">About Me</a>
				<a href="work.php">Work</a>
				<a href="contact.php">Contact</a>
			</p>
		</div>
	<div id="content1">
		<p>
			<img src="images/NS.jpg" width="400" height="230" alt="Natural Selection"/>
		</p>
		<p>Natural Selection is a side-scrolling 2D Platformer that draws many of its basic fundamentals from the original Super Mario Bros. My task during this project was to make the level. Included in that were level loading, level drawing, and level scrolling.</p>
	</div>
	<div id="content2">
		<p>
			<img src="images/tanks.jpg" width="400" height="230" alt="Tanks"/>
		</p>
		<p>Tanks was the first game I made in Game Software Development II. It is a simple two player game in which each player controls a tank and tries to destroy the opposing tank.</p>
		<p>
			<a href="resume.html"><img src="images/resume.jpg" height="30" alt="Resume"/></a>
		</p>
	</div>
	<div id="homelink">
		<footer>
			<p>
				<a href="index.php">Back to Home</a>
			</p>
		</footer>
	</div>
</div>
</body>
</html>