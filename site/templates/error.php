<?php snippet('header') ?>

<div  class="intro light home">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->text()) ?></time>
    </div>
</div>

<?php echo js('assets/js/combined.min.js?124') ?>
<?php snippet('page-footer') ?>
