<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"/>

	<link rel="shortcut icon" href="<?php echo url("assets/images/favicon.ico") ?>" type="image/x-icon"/>

	<title><?php echo $site->title()->html() ?> :: <?php echo $page->title()->html() ?></title>

	<meta name="description" content="<?php echo $site->description()->html() ?>">
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php echo css("assets/css/style.css") ?>
	
	<?php snippet("analytics") ?>

</head>
<body>