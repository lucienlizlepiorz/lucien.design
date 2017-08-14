<?php 

if ($site->user()) {
	$user = $site->user();
	echo "<div id='login-state'><h3 class='secondary'>logged in as {$user->username()} :: <a href='/logout'>log out</a></h3></div>";
} else {
	echo "<div id='login-state'><h3 class='secondary'>not logged in :: <a href='/login'>log in</a></h3></div>";
}

?>