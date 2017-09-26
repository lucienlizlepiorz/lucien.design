<?php snippet("header") ?>

<?php snippet("top") ?>

<p class="content-title mono-bold"><?php echo smartypants($page->title()) ?></p>

<h3 class="content-metadata secondary"><?php echo $page->date('F j, Y') ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>