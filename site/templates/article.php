<?php snippet("header") ?>

<?php snippet("top") ?>

<p class="content-title mono-bold"><?php echo smartypants($page->title()) ?></p>

<h3 class="content-metadata secondary">posted on <?php echo $page->date('F j, Y') ?> by <?php echo smartypants($page->author()) ?></h3>

<?php echo $page->text()->kirbytext() ?>

<?php snippet("bottom") ?>

<?php snippet("footer") ?>