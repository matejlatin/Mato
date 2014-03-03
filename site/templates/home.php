<?php snippet('header') ?>

<div  class="intro light home">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->author()) ?></time>
    </div>
</div>
<article class="cf txtCenter">

  <p class="welcome">I'm Matej, a Germany based UX, UI & Web designer at <a href="http://wondermags.com">wondermags</a>.</p>
  <hr>

    <?php foreach($pages->findByUID('work')->children()->flip()->slice(0,1) as $article): ?>

        <section class="post">
            <h4>LATEST CASE STUDY</h4>
            <h2><?php echo html($article->title()) ?></h2>
            <p><?php echo excerpt($article->intro(), 300) ?></p>
            <a href="<?php echo $article->url() ?>" class="btn">Read</a>
        </section>

    <?php endforeach ?>

    <?php foreach($pages->findByUID('writings')->children()->flip()->slice(0,1) as $article): ?>

        <section class="post">
            <h4>LATEST ARTICLE</h4>
            <h2><?php echo html($article->title()) ?></h2>
            <p><?php echo excerpt($article->intro(), 300) ?></p>
            <a href="<?php echo $article->url() ?>" class="btn">Read</a>
        </section>

    <?php endforeach ?>

</article>

<?php snippet('footer') ?>
