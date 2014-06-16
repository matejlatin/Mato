<?php snippet('header') ?>
<div class="intro light writings">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->author()) ?></time>
    </div>
</div>
<article class="cf txtCenter articlesList">

  <?php echo kirbytext($page->text()) ?>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <section class="post">
    <hgroup>
        <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F d, Y') ?></time>
        <h2><?php echo html($article->title()) ?></h2>
    </hgroup>
    <p><?php echo excerpt($article->intro(), 300) ?></p>
    <a href="<?php echo $article->url() ?>" class="btn">Read</a>
  </section>

  <?php endforeach ?>

</article>

<?php echo js('assets/js/combined.min.js?123') ?>
<?php snippet('footer') ?>
