<?php snippet("header") ?>

<?php snippet("top") ?>

<h1 id="section-title-text" class="mono-bold">hello.</h1>

<div id="section-summary-text"><?php echo $page->text()->kirbytext() ?></div>

<ul id="content-list">

	<?php foreach(page('work')->children()->visible()->flip() as $timelineEvent): ?>
	<li class="timeline">

		<?php if ($timelineEvent->intendedTemplate() == "project"): ?>
		<div class="content-title-wrapper event">
			<a class="content-title mono-bold" href="<?php echo $timelineEvent->url() ?>"><?php echo smartypants($timelineEvent->title()) ?></a>
			<h3 class="content-metadata secondary"><?php echo smartypants($timelineEvent->keywords()) ?></h3>
		</div>
		<a class="content-thumb" href="<?php echo $timelineEvent->url() ?>"><img src="<?php echo $timelineEvent->image("thumb.png")->url() ?>" alt="<?php echo smartypants($timelineEvent->title()) ?>"></img></a>
		<div class="clear"></div>
		<?php endif ?>

		<?php if ($timelineEvent->intendedTemplate() == "event"): ?>
		<p class="event"><?php echo smartypants($timelineEvent->text()->kirbytext()) ?></p>
		<?php endif ?>
		
  	</li>
  	<?php endforeach ?>
  
</ul>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>