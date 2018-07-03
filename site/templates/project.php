<!-- redirect to authenticate <?php 

if($page->uid() == "") {
	
	if (!$site->user()) {
		// pass source page, redirect to authentication page
		go("authenticate?source={$page->uri([$lang = null])}");
	} 
} 

?> -->

<?php snippet("header") ?>

<?php snippet("top") ?>

<a class="content-title mono-bold" href="<?php echo $page->url() ?>"><?php echo smartypants($page->title()) ?></a>

<h3 class="content-metadata secondary"><?php echo smartypants($page->keywords()) ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>