    <footer>
        <a href="https://twitter.com/intent/user?screen_name=matejlatin" class="twFollow">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="50px" viewBox="0 0 150 50" enable-background="new 0 0 150 50" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="#EDEDED" d="M104.85,6.399l-5.597,5.565c0,0,0-0.504,0,0.928
                    c0,1.017-0.165,1.989-0.403,2.932c-0.13,7.656-2.583,17.808-12.656,25.822C66.379,57.407,45.15,43.5,45.15,43.5
                    c16.791,0,16.791-5.565,16.791-5.565c-3.731,0-11.194-7.42-11.194-7.42c1.866,1.855,5.597,0,5.597,0
                    c-9.328-5.566-9.328-11.131-9.328-11.131c1.866,1.855,5.597,0,5.597,0c-9.328-7.42-3.731-16.696-3.731-16.696
                    C50.747,11.964,75,15.674,75,15.674l0.308-0.153C75.118,14.672,75,12.87,75,11.964c0-6.659,5.429-11.13,12.127-11.13
                    c3.686,0,6.948,1.67,9.172,4.252l1.089-0.541l5.597-3.71l-3.731,7.42L104.85,6.399z"/>
                <text transform="matrix(1 0 0 1 20.4802 30.8699)" font-family="'open-sans'" font-size="20" fill="#444">@matejlatin</text>
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
    <?php echo js('assets/js/combined.min.js') ?>
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
            $('.tweet, .mapBg img').each( function(i){
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
            $(window).on('unload load', function() { // makes sure the whole site is loaded
                $('#status').fadeOut(); // will first fade out the loading animation
                $('#preloader').delay(100).fadeOut(500); // will fade out the white DIV that covers the website.
                $('body').delay(350).css({'overflow':'visible'});
            })
        //]]>

        // Fade to white on link click
        $('.mainMenu a, .logo a, .btn, .menuToggle li a').click(function(e){
            window.goto=$(this).attr("href");
            $('#preloader').fadeIn('fast',function(){
              document.location.href=window.goto;
            });
            e.preventDefault();
        });

        <?php if ($page->title() == 'Work'): ?>
            // JRIBBBLE
            $.jribbble.getShotsByPlayerId('matejlatin', function (playerShots) {
                var html = [];
                $.each(playerShots.shots, function (i, shot) {

                    html.push('<li><a href="' + shot.url + '"><img src="' + shot.image_url + '" alt="' + shot.title + '"></a></li>');
                });

                $('#shotsByPlayerId').html(html.join(''));
            }, {page: 1, per_page: 8});
        <?php endif; ?>

        $(".arrow a").click(function() {
            $('html, body').animate({
                scrollTop: $("article").offset().top
            }, 500);
        });

          var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-36131831-1']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
</script>
    </script>
    <!--Typekit import-->
    <script type="text/javascript" src="//use.typekit.net/iph0jsa.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>

</html>
