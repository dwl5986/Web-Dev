<!DOCTYPE html>
<html>
<head>
<title>Derek Lescarbeau's Final Page</title>
<link href='styles.css' rel='stylesheet' type='text/css'>
<script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

	var slideimages = new Array()
	var slidelinks = new Array()
	function slideshowimages()
	{
		for (i = 0; i < slideshowimages.arguments.length; i++)
		{
			slideimages[i]=new Image()
			slideimages[i].src=slideshowimages.arguments[i]
		}
	}

	function slideshowlinks()
	{
		for (i = 0; i < slideshowlinks.arguments.length; i++)
		slidelinks[i] = slideshowlinks.arguments[i]
	}

	function gotoshow()
	{
		if (!window.winslide||winslide.closed)
			winslide=window.open(slidelinks[whichlink])
		else
			winslide.location=slidelinks[whichlink]
			winslide.focus()
}

//-->
</script>
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
<!-- Javascript -->
	<a href="javascript:gotoshow()"><img src="bruins.jpg" name="slide" width="300" height="325" alt="Bruins Logo"></a>
<script>
<!--
//configure the paths of the images, plus corresponding target links
	slideshowimages("./images/bruinslogo.jpg","./images/patslogo.jpg","./images/soxlogo.jpg")
	slideshowlinks("http://bruins.nhl.com/","http://www.patriots.com/","http://boston.redsox.mlb.com/index.jsp?c_id=bos")

//configure the speed of the slideshow, in miliseconds
	var slideshowspeed=2000

	var whichlink=0
	var whichimage=0
	function slideit(){
		if (!document.images)
		return
		document.images.slide.src=slideimages[whichimage].src
	whichlink=whichimage
		if (whichimage<slideimages.length-1)
			whichimage++
		else
			whichimage=0
			setTimeout("slideit()",slideshowspeed)
	}
slideit()

//-->
</script>
</p>
</div>
<div id="content2">
	<p>Hello, my name is Derek Lescarbeau and welcome to my personal site. I am from Methuen, Massachusetts about 40 minutes outside of Boston. I came to RIT to become a Game Design student and am finishing my first year of college. I am a Boston sports fan, and particularly love the Bruins and the Patriots. In my life, I'd really like to pursue a career creating video games that are fun and enjoyable for people in the ways that games used to be.</p>
	<p>
		<img src="images/mario.jpg" width="400" height="175" alt="Game Background"/>
	</p>
</div>
</div>
</body>
</html>