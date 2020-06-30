<!DOCTYPE html>
<html id="<?php echo $page->uid() ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" lang="en">
<head>  
																																																							
	<!--               LLLLLL                            LLLL           LLLLL                                        
					  LLLLLLLL                          LLLLLL         LLLLLLLL                                      
					 LLL   LLLL                        LLLLLLLL       LLLLLLLLL                                      
					 LLL   LLL                        LLL   LLL      LLL    LLLL                                     
					LLL    LLL                       LLLL    LLL    LLLL    LLLL                                     
					LL    LLL                       LLL      LLL    LLL     LLLL                                     
				   LLL   LLL                        LLL     LLLL   LLLL     LLLL                                     
				   LLL  LLL                        LLLL     LLL    LLLL     LLL                                      
				   LLLLLLL                         LLLL     LLL    LLLL     LLL                                      
				   LLLLL                           LLL     LLLL    LLL     LLLL                                      
				  LLLLLLLLLL              LL       LLL     LLL     LLL     LLL            LLL                        
				 LLLLLLLLLLLLL          LLLLLL     LLL     LLL     LLL     LLL         LLLLLLLL     LLLL             
				LLLLLLLLLLLLLLLL       LLLLLLLLL    LLL    LLL      LLL    LLL        LLLLLLLLLLL  LLLLLL             
			  LLLLLLLLLL     LLLL     LLLL   LLL    LLLL  LLLL      LLL   LLL       LLLL      LLLLLLLLLL              
		   LLLLLL LLLLL       LLL     LLL     LL    LLLL LLLL       LLLL LLLL      LLLL        LLLLL                  
		LLLLLL   LLLLL       LLLL    LLL     LLL     LLLLLLL        LLLLLLLL       LLL         LLL                    
	 LLLLLLLL    LLLL        LLL     LLL    LLLL     LLLLLL          LLLLLL        LLL         LLL                    
	LLLLL       LLLL         LLL      LLL  LLLL       LLLL           LLLLL         LLL        LLL                     
				LLLL         LLL      LLLLLLLL      LLLLLL          LLLLLLL      LLLLL        LLL                     
				LLL          LLL      LLLLLL     LLLLLLLLLLLLLLLLLLLLLLLLLLLL LLLLLLLLL     LLLL               
				LLL          LLLLLLLLLLLLLLLLLLLLLLLL    LLLLLLLLLLLL    LLLLLLLLLL  LLLLLLLLLL                   
				LLLL         LLLLLLLLLL    LLLLLLLL        LLLLLLLL         LLLLL     LLLLLLLL   I am Macintosh. -->            
				                                                                                                            
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>	
	<meta property="og:image" content="<?php
		if ($thumbnail = $page->image("thumb.png")) {
			echo $page->image("thumb.png")->url();
		} else {
			echo url("assets/images/og-image.png");
		}
	?>"/>

	<!-- icons for IE 9 and below -->
	<!--[if IE]><link rel="shortcut icon" href="<?php echo url("assets/images/favicon.ico") ?>"><![endif]-->

	<!-- icons for touch - iOS and Android 2.1+  --> 
	<link rel="apple-touch-icon" href="<?php echo url("assets/images/apple-touch-icon.png") ?>">

	<!-- icons for Firefox, Chrome, Safari, IE 11+ and Opera -->
	<link rel="icon" href="<?php echo url("assets/images/favicon.png") ?>">

	<title><?php echo smartypants($page->title()) ?> :: <?php echo smartypants($site->title()) ?></title>

	<meta name="description" content="<?php echo $site->description()->html() ?>">	
	<meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

	<?php echo css("assets/css/style.css") ?>
	
	<!-- css for IE 9 and below -->
	<!--[if IE]>
		<style type="text/css">
			#name h1 {
				padding-right: 0;
				border-right: none;
			}
		</style>
	<![endif]-->
	
	<?php snippet("analytics") ?>

	<!-- preload essential fonts -->
	<link rel="preload" href="assets/fonts/FiraSans-Light.woff" as="font" type="font/woff" crossorigin>
	<link rel="preload" href="assets/fonts/FiraMono-Bold.woff" as="font" type="font/woff" crossorigin>
	<link rel="preload" href="assets/fonts/FontAwesome.woff" as="font" type="font/woff" crossorigin>

</head>
<body>