<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv=X-UA-Compatible>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hi, I'm Jordan. A designer &amp; developer from the UK.">
    <title>Made by Jordan</title>
    <link rel="canonical" href="#"/>
    <meta property="og:site_name" content="Made by Jordan"/>
    <meta property="og:url" content="#"/>
    <meta property="og:type" content="website"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>

    <link rel="stylesheet" href="static/styles/master.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="static/styles/normalize.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="static/styles/mobile.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="static/styles/flexboxgrid.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="static/styles/animate.css" media="screen" charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
    <link href="https://file.myfontastic.com/btYzNteK66bSboFzt9YVUR/icons.css" rel="stylesheet">

</head>
<body>

  <div id="sidebar">
    <a class="icon-branding" href="index.php"></a>

		<ul>
			<li><a class="icon-home" href="index.php"><br>Home</a></li>
			<li><a class="icon-user" href="about.php"><br>About</a></li>
      <li><a class="icon-brush" href="work.php"><br>Work</a></li>
      <li><a class="icon-book-open" href="blog.php"><br>Blog</a></li>
      <li><a class="icon-mail" href="contact.php"><br>Contact</a></li>
		</ul>

		<div class="icon-menu">
		</div>

	</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>

	$(document).ready(function(){
		$('.icon-menu').click(function(){
			$('#sidebar').toggleClass('visible');
		});
	});

	</script>
