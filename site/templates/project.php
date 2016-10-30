<?php 

if(!$page->isVisible()) {
	
	if (!$site->user()) {
		// pass source page, redirect to login
		go("login?source={$page->uri([$lang = null])}");
	} else {
		$user = $site->user();
		
		if ($user->hasRole("external")) {	
			// check current page
			switch ($page->uid()) {
				case "Google":
					// check user
					switch ($user->username()) {
						case "okgoogle":
							// approved access
							break;
						default:
							// prevent page access
							go("/");
					}
					break;
				case "Learnmetrics":
					// check user
					switch ($user->username()) {
						case "fromdata":
							// approved access
							break;
						default:
							// prevent page access
							go("/");
					}
					break;
				default:
					// normal access
					break;
			}
		}
	} 
} 

?>

<?php snippet("header") ?>

<?php snippet("top") ?>

<p class="project-title mono-bold"><?php echo $page->title() ?></p>

<h3 class="project-keywords secondary"><?php echo $page->keywords() ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>