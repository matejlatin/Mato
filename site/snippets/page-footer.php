    <footer>
    </footer>
    <?php
    if($page->isChildOf($pages->find('writings'))):
    $related = related($page->related());
    ?>
        <aside class="txtCenter">
            <section>
                <hgroup>
                    <h4>NEXT ARTICLE</h4>
                    <h2><?php echo $related->first()->title(); ?></h2>
                </hgroup>
                <p><?php echo $related->first()->intro(); ?></p>
                <a href="<?php echo $related->first()->url(); ?>" class="btn">Read</a>
            </section>
        </aside>
    <?php endif; ?>
    <script>

        /* Set height of elements */
        var wh = $(window).height();
        var ww = $(window).width();
        $('.intro').height(wh);
        $('.arrow').css("display", "none").delay(1500).fadeIn(500);

        /* Mobile Menu Toggle */
        $(".btnMenu, .btnCloseMenu").click(function () {
            $(".menuToggle").fadeToggle("fast");
        });

        /* Header Behaviour */
        var lastScrollTop = 0;
        var dh = $(document).height();
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > 0 && (st + wh) < dh){
                $(".arrow").fadeOut();
                if (st > lastScrollTop){
                    $('header').fadeOut(); // FIXME Header fades out only on the end of swipe on mobile. Try jQuery Mobile.
                } else {
                    $('header').addClass("headerWhiteBg").removeClass("light").fadeIn();
                }
            }
            if (st <= 0){
                $("header").removeClass("headerWhiteBg", 300).addClass("light").fadeIn();
            }
           lastScrollTop = st;
        });

        /* Tweet Quotes */
        $(function () {
          $('blockquote').tweetable({
            via: 'matejlatin'
          });
        });

        // Show element on scroll
        $(document).ready(function() {

        $(window).scroll( function(){
            $('.tweet, .mapBg img, #logoTw').each( function(i){
                var bottom_of_object = $(this).position().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if( bottom_of_window > bottom_of_object ){
                    $(this).delay(200).animate({'opacity':'1'},300);
                    }
                });
            });
        });

        // Preloader
        //<![CDATA[
            $(window).on('load', function() { // makes sure the whole site is loaded
                $('#preloader').delay(100).fadeOut(500); // will fade out the white DIV that covers the website.
                $('body').css({'overflow':'visible'});
            });
        //]]>

        $(".arrow a").click(function() {
            $('html, body').animate({
                scrollTop: $("article").offset().top
            }, 500);
        });

        // Unveil
        $("img").unveil(200, function() {
          $(this).load(function() {
            this.style.opacity = 1;
          });
        });

        // Google Analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-36131831-1', 'matoweb.com');
        ga('send', 'pageview');

</script>
<!--Typekit import-->
<script type="text/javascript" src="//use.typekit.net/iph0jsa.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>

</html>
