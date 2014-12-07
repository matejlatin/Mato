<?php snippet('header') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php echo js('assets/js/combined.min.js') ?>
<?php snippet('footer') ?>