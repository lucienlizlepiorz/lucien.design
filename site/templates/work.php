<?php snippet("header") ?>

<?php snippet("top") ?>

<h1 id="hello" class="mono-bold"><?php echo smartypants($page->headline()) ?></h1>

<div id="summary"><?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>