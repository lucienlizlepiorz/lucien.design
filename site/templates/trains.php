<?php snippet("header") ?>

<?php snippet("top") ?>

<div id="section-summary-text"><?php echo $page->text()->kirbytext() ?></div>

<ul id="content-list">

	<?php $articles = $page->children()->visible()->flip()->paginate(4) ?>

	<?php foreach($articles as $article): ?>
	<li>
  		<a class="content-title mono-bold" href="<?php echo $article->url() ?>"><?php echo smartypants($article->title()) ?></a>
		<h3 class="content-metadata secondary"><?php echo $article->date('F j, Y') ?></h3>
		<p><?php echo $article->text()->kirbytext() ?></p>
  	</li>
	<?php endforeach ?>
  
</ul>

<?php if($articles->pagination()->hasPages()): ?>
<div id="pagination" class="secondary">

	<?php if($articles->pagination()->hasNextPage()): ?>
	<h3 class="secondary"><a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a></h3>
	<?php endif ?>

	<?php if($articles->pagination()->hasPrevPage()): ?>
	<h3 class="secondary"><a class="previous" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a></h3>
	<?php endif ?>
	
	<div class="clear"></div>

</div>
<?php endif ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>