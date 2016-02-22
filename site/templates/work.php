<?php snippet("header") ?>

<?php snippet("top") ?>

<h1 id="hello" class="mono-bold">hello.</h1>

<div id="welcome-text"><?php echo $page->text()->kirbytext() ?></div>

<ul id="projects-list">
  
	<?php foreach(page('work')->children()->visible()->flip() as $project): ?>
	<li>
  		<a class="project-title mono-bold" href="<?php echo $project->url() ?>"><?php echo $project->title() ?></a>
		<h3 class="project-keywords secondary"><?php echo $project->keywords() ?></h3>
		<a class="project-thumb" href="<?php echo $project->url() ?>"><img src="<?php echo $project->image("thumb.png")->url() ?>" alt="<?php echo $project->title() ?>"></img></a>
  	</li>
  	<?php endforeach ?>
  
</ul>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>