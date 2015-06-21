<?php snippet('header') ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- <style>
    .edgeLoad-EDGE-41464283 { visibility:hidden; }
</style>
<script>
   AdobeEdge.loadComposition('test-animation', 'EDGE-41464283', {
    scaleToFit: "none",
    centerStage: "both",
    minW: "0",
    maxW: "undefined",
    width: "550px",
    height: "494px"
}, {"dom":{}}, {"dom":{}});


</script> -->
<div class="intro light work">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->title()) ?></h1>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F d, Y') ?></time>
    </div>
</div>
<article class="cf">
    <p class="extract"><?php echo html($page->intro()) ?></p>
    <?php echo kirbytext($page->text()) ?>
    <div class="padding lightGray cf">
        <h3>Blocks</h3>
        <p>The whole idea is very simple. A wondermag is built with blocks. Blocks always take full width of a page and they stack on each other. Each block can have up to three different content types. The blocks are predefined and the user can only select from a limited range of them.</p>
            <!-- blocks animation-->
            <!-- <div id="Stage" class="EDGE-41464283">
            </div> -->
        <h3>Content Types</h3>
        <p>A content type is the smallest and most basic building block of a wondermag. A content type is inside a block and can take either 1/3, 1/2 or full space inside it. Basic content types are body text, heading, image, image gallery, audio player, video player and map.</p>
        <img class="alignCenter" data-src="<?php echo $page->images()->find('ct-icons.jpg')->url() ?>" alt="Content Types"><br><br>
        <h3>Styles</h3>
        <p>Styles’ role is to provide some magic. After the structure of the magazine is done, styles are the ones that make it look nice. A basic user would be limited to predefined styles, which is basically a CSS file that is applied to the current content of a page.</p>
        <img class="alignCenter" data-src="<?php echo $page->images()->find('wm-styles.jpg')->url() ?>" alt="Wondermags Styles"><br>
        <p>A style defines the looks for a magazine cover and its’ pages. Users can use one style throughout the magazine our combine a combination of many different ones. </p>
        <p>After we had all this defined, we felt we were on a good track. We decided to take it to the next level — the visual designs.</p>
    </div>
    <h2>The Visual Designs</h2>
    <p>I was the only designer in the team back then. So all the visual designs were my task. It was a time when flat design was gaining on popularity. I did a lot of flat design before but for this particular project I wasn’t going to use a specific style. I experimented a lot but there was one style that I really liked. A wooden background (yes, I actually liked it back then even though it makes me sick at the time of writing this) combined with a flat dark user interface.</p>

    <div class="gallery">
        <img data-src="<?php echo $page->images()->find('01-editor.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('02-add-blocks.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('03-preview.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('04-cover-style.jpg')->url() ?>" alt="Content Types">
    </div>

    <p>The extensive use of the Wondermags red color is intentional. I experimented with the colors a lot in the initial stages. I tried black and white as overlay colors, but none of them provided a good enough contrast with the content. So I tried the Wondermags red. I liked the look and I liked the contrast it provided. I’ve never seen so much red in an interface before and even some team members thought that it was too strong. Anyway, we decided to use it. And we still stick to it. It’s become a sort of an identity element.</p>

    <div class="gallery">
        <img data-src="<?php echo $page->images()->find('05-media-library.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('06-media-library-selected.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('07-media-library-preview.jpg')->url() ?>" alt="Content Types">
        <img data-src="<?php echo $page->images()->find('08-media-library-audio.jpg')->url() ?>" alt="Content Types">
    </div>

    <blockquote>The details are not the details, they make the design. <footer>Charles Eames</footer></blockquote>

    <p>I paid attention to every detail while working on the visual designs. I could afford to spend more time on these details. And I think I used it wisely. I even made a lot of designs that wouldn’t be included in the first version of Wondermags.</p>

    <div class="bgRed cf">
        <?php echo kirbytext($page->texticons()) ?>
    </div>
    <?php echo kirbytext($page->text2()) ?>
</article>

<?php echo js('assets/js/combined.min.js') ?>
<div class="cf">
  <?php snippet('footer') ?>
</div>
