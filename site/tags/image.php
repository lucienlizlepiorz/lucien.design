<?php

kirbytext::$tags["image"] = array(
  "attr" => array(
    "description"
  ),
  "html" => function($tag) {
  
  	$file          = $tag->file($tag->attr("image"));
  	$url           = $file->url();
  	$description   = smartypants($tag->attr("description"));
    
    if ($description != "") {
      $caption = "<div class='image-caption'><h3 class='secondary'>".$description."</h3></div>";
    } else {
    	$caption = NULL;
    }
         
    if ($file->type() == "image") {
		$container = "<div class='image'><img src='".$url."' alt='".$description."'>".$caption."</div>";
    } else if ($file->type() == "video") {
	    $container = "<div class='image'><video preload='auto' playsinline autoplay loop muted controls><source src='".$url."' type='video/mp4'></video>".$caption."</div>";
    }

    return $container;
  }
);

?>