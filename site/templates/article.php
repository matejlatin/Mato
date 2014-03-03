<?php snippet('header') ?>
<?php $related = related($page->related()); ?>
<div  class="intro light">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->title()) ?></h1>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F d, Y') ?></time>
    </div>
</div>
<article class="cf">
    <p class="extract"><?php echo html($page->intro()) ?></p>
    <?php echo kirbytext($page->text()) ?>
</article>

<?php snippet('footer') ?>
