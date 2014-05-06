<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>Cameron Zaas | Web Developer and Designer in San Luis Obispo, CA</title>
	<meta charset="utf-8">
	<meta name="description" content="Web Developer and designer in San Luis Obispo California.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript">
	// google analytics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-47549861-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	</script>	
</head>
<body>
	<header id="header">
		<div class="nameTitle">
			<span class="name">C<span class="sm-caps">ameron</span> Z<span class="sm-caps">aas</span></span>
			<span class="title">W<span class="sm-caps">eb</span> D<span class="sm-caps">eveloper</span></span>
		</div>
		<span id="menu" class="nav">&#9776;</span>
		<nav>
			<ul id="nav">
				<li><a href="index.php">Portfolio</a></li>
				<li><a href="writing.php">Writing</a></li>
				<li><a href="About.php">About</a></li>
				<li>
					<form action="mail.php" method="POST">
						<input type="text" placeholder="Your name" name="name">
						<input type="tel", placeholder="Your phone number" name="number">
						<input type="email" placeholder="Your email" name="email">
						<textarea placeholder="Your message" name="message"></textarea>
						<input id="submit" type="submit" value="Send Message">
					</form>
				</li>
			</ul>
		</nav>
	</header>
	<script type="text/javascript">
		toggleMenu();
	</script>