<?php if(!$site->user() && !$page->isVisible() && $page->uid() != "error"): ?>
	<!-- pass source page-->
	<form method="get" action="login.php">
		<input type="hidden" name="source" value="<?php echo $page->uid() ?>">
		<input type="submit">
	</form>
	
	<?php go("login"); ?>
<?php endif ?>

<?php snippet("header") ?>

<?php snippet("top") ?>

<p class="project-title mono-bold"><?php echo $page->title() ?></p>

<h3 class="project-keywords secondary"><?php echo $page->keywords() ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>