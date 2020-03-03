<?php snippet("header") ?>

<?php snippet("top") ?>

<h1 id="hello" class="mono-bold"><?php echo smartypants($page->headline()) ?></h1>

<div id="summary"><?php echo $page->text()->kirbytext() ?>

<ul>

	<?php foreach(page('work')->children()->visible()->flip() as $timelinePost): ?>
		<li class="timeline">

			<?php if ($timelinePost->intendedTemplate() == "project"): ?>
				<div class="title-wrapper event">
					<a class="title mono-bold" href="<?php echo $timelinePost->url() ?>"><?php echo smartypants($timelinePost->title()) ?></a>
					<h3 class="metadata secondary"><?php echo smartypants($timelinePost->keywords()) ?></h3>
				</div>

				<?php if($timelinePost->image("thumb.png")): ?>
					<a class="thumb" href="<?php echo $timelinePost->url() ?>"><img src="<?php echo $timelinePost->image("thumb.png")->url() ?>" alt="<?php echo smartypants($timelinePost->title()) ?>"></img></a>
					<div class="clear"></div>
				<?php endif ?>  
			<?php endif ?>

			<?php if ($timelinePost->intendedTemplate() == "timeline-text"): ?>
				<div class="<?php if($timelinePost->event() == "true") {echo 'event';} ?>"><?php echo $timelinePost->text()->kirbytext() ?></div>
			<?php endif ?>
			
	  	</li>
  	<?php endforeach ?>

</div>
  
</ul>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>