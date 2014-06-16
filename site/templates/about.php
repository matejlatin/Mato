<?php snippet('header') ?>
<div class="intro light about">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->author()) ?></time>
    </div>
</div>
<article class="cf">
    <p class="extract"><?php echo html($page->intro()) ?></p>
    <?php echo kirbytext($page->text()) ?>
</article>

<?php echo js('assets/js/combined.min.js?123') ?>
<?php snippet('footer') ?>
