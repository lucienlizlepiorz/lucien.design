<?php snippet("header") ?>

<?php snippet("top") ?>

<h1 id="section-title-text" class="mono-bold">hello.</h1>

<div id="section-summary-text"><?php echo $page->text()->kirbytext() ?></div>

<ul id="content-list">
  
	<?php foreach(page('work')->children()->visible()->flip() as $project): ?>
	<li>
  		<a class="content-title mono-bold" href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a>
		<h3 class="content-metadata secondary"><?php echo $project->keywords() ?></h3>
		<a class="content-thumb" href="<?php echo $project->url() ?>"><img src="<?php echo $project->image("thumb.png")->url() ?>" alt="<?php echo $project->title() ?>"></img></a>
  	</li>
  	<?php endforeach ?>
  
</ul>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>