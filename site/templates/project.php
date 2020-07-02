<?php snippet("header") ?>

<?php snippet("top") ?>

<a class="title mono-bold" href><?php echo smartypants($page->title()) ?></a>

<h3 class="metadata secondary"><?php echo smartypants($page->keywords()) ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>