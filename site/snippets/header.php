<!DOCTYPE html>
<html lang="en">
<head>  
                                                                                                                                                                                                                            
     <!--                 LLLLLL                            LLLL           LLLLL                                        
                         LLLLLLLL                          LLLLLL         LLLLLLLL                                      
                        LLL   LLLL                        LLLLLLLL      LLLLLLLLLL                                      
                        LLL   LLL                        LLL   LLL      LLL    LLLL                                     
                       LLL    LLL                       LLLL    LLL    LLLL    LLLL                                     
                       LL    LLL                        LLL     LLL    LLL     LLLL                                     
                      LLL   LLL                        LLL     LLL    LLLL     LLLL                                     
                      LLL  LLL                         LLLL    LLL    LLLL     LLL                                      
                      LLLLLLL                         LLLL     LLL    LLLL     LLL                                      
                      LLLLL                           LLLL    LLLL    LLL     LLLL                                      
                     LLLLLLLLLL              LL       LLLL    LLL     LLL     LLL            LLL                        
                    LLLLLLLLLLLLL         LLLLLLL     LLL    LLLL     LLL    LLL          LLLLLLLL     LLLL             
                  LLLLLLLLLLLLLLLL       LLLLLLLLL    LLL    LLLL     LLL    LLL        LLLLLLLLLLL  LLLLLL             
                LLLLLLLLLL     LLLL     LLLL   LLL    LLLL  LLLL      LLL   LLL       LLLL      LLLLLLLLLL              
             LLLLLL LLLLL       LLL     LLL     LL    LLLL LLLL       LLLL LLLL      LLLL        LLLLL                  
          LLLLLL   LLLLL       LLLL    LLL     LLL     LLLLLLL        LLLLLLLL       LLL         LLL                    
       LLLLLLLL    LLLL        LLL     LLL    LLLL     LLLLLL          LLLLLL        LLL         LLL                    
      LLLLL       LLLL         LLL      LLL  LLLL       LLLL           LLLLL         LLL        LLL                     
                  LLLL         LLL      LLLLLLLL      LLLLLL          LLLLLLL      LLLLL        LLL                     
                  LLL          LLL      LLLLLL     LLLLLLLLLLLLLLLLLLLLLLLLLLLL LLLLLLLLL     LLLL               
                  LLL          LLLLLLLLLLLLLLLLLLLLLLLL    LLLLLLLLLLLL    LLLLLLLLLL  LLLLLLLLLL                   
                  LLLL         LLLLLLLLLL    LLLLLLLL        LLLLLLLL         LLLLL     LLLLLLLL   I am Macintosh-->                                                                                                                        

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