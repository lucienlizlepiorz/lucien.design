<?php

kirbytext::$tags["project"] = array(
  "attr" => array(
    "preface"
  ),
  "html" => function($tag) {

    $project	= $tag->attr("project");
    $preface	= smartypants($tag->attr("preface"));
    $URL		= page($project)->url();
    $title  	= smartypants(page($project)->title());
    $keywords	= smartypants(page($project)->keywords());
    $thumbnail	= page($project)->image("thumb.png")->url();

    if ($preface != "") {
     	$prefaceContainer = "<div class='preface'>".$preface."</div>";
    } else {
    	$prefaceContainer = NULL;
    }

    $render = "".$prefaceContainer."<div class='title-wrapper'><a class='title mono-bold' href='".$URL."'>".$title."</a><h3 class='metadata secondary'>".$keywords."</h3></div><a class='thumb' href='".$URL."'><img src='".$thumbnail."' alt='".$title."'></img></a><div class='clear'></div>";

    return $render;
  }
);

?>