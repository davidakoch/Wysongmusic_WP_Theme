
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>
	<div class="container">
		<header class="main_header">
			<nav>
				<ul class="main_nav">
					<li class="active">
						<a>Home</a>
					</li>
					<li>
						<a href="bio.html">Bio</a>
					</li>
					<li>
						<a>Listen</a>
							<ul class="sub_music_menu">
								<li><a href="musicOriginal.html">Originals</a></li>
								<li><a href="musicTvfilm.html">TV/Film</a></li>
							</ul>
					</li>	
					<li><a href="credits.html">Credits</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>

				<!-- Creates the banner heading at 700px --> 
			<nav>	
				<ul class="banner_700px">
					<li class="js_click_menu">MENU</li>
				</ul>
			</nav>
				<!--creates the menu at 700px -->
			<nav>
				<ul class="menu_700px">
					<li class="js_click_banner">CLOSE</li>
					<li><a href="index.html">HOME</a></li>
					<li><a href="bio.html"BIO</a></li>
					<li><a href="musicOriginal.html">LISTEN/ORIGINALS</a></li>
					<li><a href="musicTvfilm.html">LISTEN/TV + FILM</a></li>
					<li><a href="credits.html">CREDITS</a></li>
					<li><a href="contact.html">CONTACT</a></li>
				</ul>
			</nav>

				<!--Handles the logo -->
			<div class="header_logo">
				<i class="note_logo fa fa-music fa-5x"></i>
				<h1 class="main_logo">Wysong Music</h1>
			</div>
		</header>