<?php snippet('header') ?>
<div class="intro light work">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->author()) ?></time>
    </div>
</div>
<article class="cf txtCenter articlesList">

  <?php echo kirbytext($page->text()) ?>

  <h4>CASE STUDIES</h4>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <section class="post">
    <h2><?php echo html($article->title()) ?></h2>
    <p><?php echo excerpt($article->intro(), 300) ?></p>
    <a href="<?php echo $article->url() ?>" class="btn">Read</a>
  </section>

  <?php endforeach ?>
  <hr>
  <h4>LATEST DRIBBBLE SHOTS</h4>
  <ul id="shotsByPlayerId" class="shotList cf">
    <?php
    $array = file_get_contents('http://api.dribbble.com/players/matejlatin/shots');
    $obj = json_decode($array,true);

    foreach(array_slice($obj['shots'], 0, 10) as $item) {
       echo "<li><a href='". $item['url'] ."'><img src='". $item['image_url'] ."' alt='". $item['title'] ."' /></a></li>";
     }
     ?>
  </ul>
  <p>
    <a href="http://dribbble.com/matejlatin">View more on Dribbble &#8594;</a>
  </p>

</article>

<?php echo js('assets/js/combined.min.js?123') ?>
<?php snippet('page-footer') ?>
