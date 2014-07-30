    <footer>
        <a href="https://twitter.com/share?hashtags=design&via=matejlatin" class="twFollow" title="Tweet This">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="60px" height="60px" viewBox="-10 0 60 60" enable-background="new 0 0 50 50" xml:space="preserve">
                <path class="tweet" fill-rule="evenodd" clip-rule="evenodd" x="-10" y="-10" d="M49.826 9.584l-4.655 4.612c0 0 0-0.418 0 0.769c0 0.843-0.137 1.648-0.335 2.4 c-0.108 6.345-2.148 14.759-10.526 21.4C17.83 51.9 0.2 40.3 0.2 40.332c13.965 0 13.965-4.612 13.965-4.612 c-3.103 0-9.31-6.149-9.31-6.149c1.552 1.5 4.7 0 4.7 0c-7.758-4.612-7.758-9.225-7.758-9.225c1.552 1.5 4.7 0 4.7 0 c-7.758-6.15-3.103-13.837-3.103-13.837C4.829 14.2 25 17.3 25 17.271l0.257-0.127C25.098 16.4 25 14.9 25 14.2 c0-5.519 4.515-9.224 10.086-9.224c3.066 0 5.8 1.4 7.6 3.524l0.906-0.449l4.655-3.075l-3.103 6.15L49.826 9.584z">
                </path>
            </svg>
        </a>
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

        /* Tweet Button */
        $('.twFollow').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;
            window.open(url, 'twitter', opts);
            return false;
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
