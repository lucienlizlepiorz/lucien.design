<?php 

return function($site, $pages, $page) {
	// get source
	$source = $_GET["source"];

	// already logged in
	if($site->user()) go("/");

	// form submission
	if(r::is("post") and get("login")) {
		// fetch the user, run login method
		if($user = $site->user(get("username")) and $user->login(get("password"))) {
			go($source);
		} else {
			// make sure the alert is displayed in the template
			$error = true;
		}
	} else {
		$error = false;  
	}

	return array("error" => $error);
};

?>