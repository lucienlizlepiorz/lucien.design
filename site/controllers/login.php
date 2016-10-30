<?php 

return function($site, $pages, $page) {
	// get source page
	$source = $_GET["source"];

	// form submission
	if(r::is("post") and get("login")) {
		// fetch the user, run login method
		if($user = $site->user(get("username")) and $user->login(get("password"))) {
			if ($user->hasRole("external")) {
				// check source page
				switch ($source) {
					case "Google":
						// check user
						switch ($user->username()) {
							case "okgoogle":
								// approved access
								go($source);
								break;
							default:
								// prevent page access
								$accessError = true;
						}
						break;
					case "Learnmetrics":
						// check user
						switch ($user->username()) {
							case "fromdata":
								// approved access
								go($source);
								break;
							default:
								// prevent page access
								$accessError = true;
						}
						break;
					default:
						// user accessed login directly, normal access
						go("/");
						break;
				}
			} else {
				switch ($source) {
					case NULL:
						// user accessed login directly
						go("/");
						break;
					default:
						// unlimited access
						go($source);
						break;
				}
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