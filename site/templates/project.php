<?php snippet("header") ?>

<?php snippet("top") ?>

<a class="content-title mono-bold" href="<?php echo $page->url() ?>"><?php echo smartypants($page->title()) ?></a>

<h3 class="content-metadata secondary"><?php echo smartypants($page->keywords()) ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>