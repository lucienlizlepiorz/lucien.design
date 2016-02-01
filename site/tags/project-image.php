<?php

kirbytext::$tags["project-image"] = array(
  "attr" => array(
    "description"
  ),
  "html" => function($tag) {
  
  	$file 			= $tag->file($tag->attr("project-image"));
  	$url 			= $file->url();
  	$description 	= $tag->attr("description");
    
    if ($description != "") {
    	$caption = "<div class='project-image-caption'><h3>".$description."</h3></div>";
    } else {
    	$caption = NULL;
    }
            
    return "<p><div class='project-image'><img src='".$url."' alt='".$description."'>".$caption."</div></p>";
  }
);

?>