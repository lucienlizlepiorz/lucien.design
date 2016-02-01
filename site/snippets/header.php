<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>

	<link rel="shortcut icon" href="<?php echo url("assets/images/favicon.ico") ?>" type="image/x-icon"/>

	<!-- IE 9 and below -->
	<!--[if IE]><link rel="shortcut icon" href="<?php echo url("assets/images/favicon.ico") ?>"><![endif]-->

	<!-- touch icons - iOS and Android 2.1+  --> 
	<link rel="apple-touch-icon" href="<?php echo url("assets/images/apple-touch-icon.png") ?>">

	<!-- Firefox, Chrome, Safari, IE 11+ and Opera -->
	<link rel="icon" href="<?php echo url("assets/images/favicon.png") ?>">

	<title><?php echo $page->title() ?> :: <?php echo $site->title() ?></title>

	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php echo css("assets/css/style.css") ?>
	
	<?php snippet("analytics") ?>

</head>
<body>

	<div id="name">
		<h1><a href="/" class="no-underline"><span class="mono-bold">Lucien</span> Liz-Lepiorz</a></h1>
		<p><span class="mono-bold secondary">design & develop</span></p>
	</div>
	
	<div id="wrapper">
		<div id="content">