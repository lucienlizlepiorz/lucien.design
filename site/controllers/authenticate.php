<?php 

return function($site, $pages, $page) {
	// get source page
	$source = $_GET["source"];

	// form submission
	if(r::is("post") and get("authenticate")) {
		// fetch the user, run authentication method
		if($user = $site->user(get("username")) and $user->login(get("password"))) {
			// approved access
			go($source);
		} else {
			// make sure the alert is displayed in the template
			$authenticationError = true;
		}
	} else {
		$authenticationError = false;
	}

	return array(
		"authenticationError" => $authenticationError);
};

?>