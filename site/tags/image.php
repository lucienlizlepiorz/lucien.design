<?php

kirbytext::$tags["image"] = array(
	"attr" => array(
		"caption"
	),
	"html" => function($tag) {
	
		$file		= $tag->file($tag->attr("image"));
		$url		= $file->url();
		$caption	= smartypants($tag->attr("caption"));
		
		if ($caption != "") {
				$captionContainer = "<div class='image-caption'><h3 class='secondary'>".$caption."</h3></div>";
		} else {
			$captionContainer = NULL;
		}
				 
		if ($file->type() == "image") {
		$container = "<div class='image'><img src='".$url."' alt='".$description."'>".$captionContainer."</div>";
		} else if ($file->type() == "video") {
			$container = "<div class='image'><video preload='auto' playsinline autoplay loop muted controls><source src='".$url."' type='video/mp4'></video>".$captionContainer."</div>";
		}

		return $container;
	}
);

?>