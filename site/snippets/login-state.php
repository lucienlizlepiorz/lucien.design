<?php 

if ($site->user()) {
	$user = $site->user();
	echo "<div id='login-state'><h3 class='secondary'>signed in as {$user->username()} :: <a href='/logout'>logout</a></h3></div>";
} else {
	echo "<div id='login-state'><h3 class='secondary'>not signed in :: <a href='/login'>login</a></h3></div>";
}

?>