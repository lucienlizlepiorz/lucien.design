<?php if(!$site->user() && !$page->isVisible() && $page->uid() != "error"): ?>
	<!-- pass source, redirect to login -->
	<?php go("login?source={$page->uri([$lang = null])}"); ?>
<?php endif ?>

<?php snippet("header") ?>

<?php snippet("top") ?>

<p class="project-title mono-bold"><?php echo $page->title() ?></p>

<h3 class="project-keywords secondary"><?php echo $page->keywords() ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>