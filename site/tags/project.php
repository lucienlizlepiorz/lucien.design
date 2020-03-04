<?php

kirbytext::$tags["project"] = array(
  "html" => function($tag) {

    $project	= $tag->attr("project");
    $URL		= page($project)->url();
    $title  	= smartypants(page($project)->title());
    $keywords	= smartypants(page($project)->keywords());
    $thumbnail	= page($project)->image("thumb.png")->url();


    $render = "<div class='title-wrapper'><a class='title mono-bold' href='".$URL."'>".$title."</a><h3 class='metadata secondary'>".$keywords."</h3></div><a class='thumb' href='".$URL."'><img src='".$thumbnail."' alt='".$title."'></img></a><div class='clear'></div>";

    return $render;
  }
);

?>