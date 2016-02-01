<?php snippet("header") ?>

<p class="project-title mono-bold"><?php echo $page->title() ?></p>

<h3 class="project-keywords secondary"><?php echo $page->keywords() ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php foreach($page->images() as $image): ?>
	<img class="project-image" src="<?php echo $image->url() ?>" alt="<?php echo $image->caption() ?>">
		<?php if($image->caption() != "") {echo "<div class=\"project-image-caption\"><h3>"; echo $image->caption(); echo "</h3></div>";} ?>
	</img>
<?php endforeach ?>

<?php snippet("footer") ?>