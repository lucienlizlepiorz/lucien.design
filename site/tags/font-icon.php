<?php

kirbytext::$tags["font-icon"] = array(
	"html" => function($tag) {

		$unicode = $tag->attr("font-icon");

		return "<span class='font-icon'>&#x".$unicode.";</span>";
	}
);

?>