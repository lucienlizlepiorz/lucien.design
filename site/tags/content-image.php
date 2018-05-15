<?php

kirbytext::$tags["content-image"] = array(
  "attr" => array(
    "description"
  ),
  "html" => function($tag) {
  
  	$file          = $tag->file($tag->attr("content-image"));
  	$url           = $file->url();
  	$description   = smartypants($tag->attr("description"));
    
    if ($description != "") {
    	$caption = "<div class='content-image-caption'><h3 class='secondary'>".$description."</h3></div>";
    } else {
    	$caption = NULL;
    }
            
    return "<div class='content-image'><img src='".$url."' alt='".$description."'>".$caption."</div>";
  }
);

?>