<?php 

return function($site, $pages, $page) {
	// get source
	$source = $_GET["source"];

	// form submission
	if(r::is("post") and get("login")) {
		// fetch the user, run login method
		if($user = $site->user(get("username")) and $user->login(get("password"))) {
			if ($user != "okgoogle" && $user->hasRole("external") && $source = "google") {
				$accessError = true;
			} else {
				go($source);
			}
		} else {
			// make sure the alert is displayed in the template
			$authenticationError = true;
		}
	} else {
		$authenticationError = false;
		$accessError = false;
	}

	return array(
		"authenticationError" => $authenticationError, 
		"accessError" => $accessError);
};

?>