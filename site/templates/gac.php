<?php snippet('header') ?>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<div class="intro light work">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->title()) ?></h1>
        <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('F d, Y') ?></time>
    </div>
</div>
<article class="cf">
    <p class="extract"><?php echo html($page->intro()) ?></p>
    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->text2()) ?>
    <div class="lightGray cf killMargins">
        <?php echo kirbytext($page->text3()) ?>
        <div class="chartOne gacChart">
            <div class="stats">
                <table class="tg">
                  <tr>
                    <tD rowspan="2"><img width="75px" class="alignCenter" data-src="<?php echo $page->images()->find('arrow-up.png')->url() ?>" alt="Average Visit Time Increase"></tD>
                    <tD class="bigNumber"><span id="avgTime">800</span>%</tD>
                  </tr>
                  <tr>
                    <td>AVERAGE VISIT TIME</td>
                  </tr>
                </table>
                <p>Average visit time has increased from 45 seconds to almost 6 minutes.</p>
            </div>
        </div>
        <div class="chartTwo gacChart">
            <div class="stats">
                <table class="tg">
                  <tr>
                    <tD rowspan="2"><img width="75px" class="alignCenter" data-src="<?php echo $page->images()->find('arrow-down.png')->url() ?>" alt="Average Visit Time Increase"></tD>
                    <tD class="bigNumber"><span id="bounceRate">30</span>%</tD>
                  </tr>
                  <tr>
                    <td>BOUNCE RATE</td>
                  </tr>
                </table>
            <p>Bounce rate dropped from almost 80% to aproximately 50%.</p>
            </div>
        </div>
        <div class="chartThree gacChart">
            <div class="stats">
                <table class="tg">
                  <tr>
                    <tD rowspan="2"><img width="75px" class="alignCenter" data-src="<?php echo $page->images()->find('arrow-down.png')->url() ?>" alt="Average Visit Time Increase"></tD>
                    <tD class="bigNumber"><span id="newVisitors">37</span>%</tD>
                  </tr>
                  <tr>
                    <td>NEW VISITORS</td>
                  </tr>
                </table>
                <p>New visitors dropped from 92% to 55%. This means a lot more returning visitors.</p>
            </div>
        </div>
        <div class="bgGreen cf">
            <h4>THE CLIENT</h4>
            <blockquote>
                The design was a huge part of the application change, as it helped us build stronger, trustworthier presence.
                <img width="85px" class="alignCenter" data-src="<?php echo $page->images()->find('andy.jpg')->url() ?>" alt="Andy Zenkevich" title="Andy Zenkevich">
                <footer>Andy Zenkevich</footer>
            </blockquote>
            <h4>THE USERS</h4>
            <blockquote class="twitter-tweet" lang="en"><p>Great output from <a href="https://twitter.com/getacopywriter">@getacopywriter</a>! Well written content and awesome customer service making my job easier. Thanks Andy!</p>&mdash; AmyeSaunders (@AmyeSaunders) <a href="https://twitter.com/AmyeSaunders/statuses/423933630004469761">January 16, 2014</a></blockquote>
            <blockquote class="twitter-tweet" lang="en"><p>Loving <a href="https://twitter.com/getacopywriter">@getacopywriter</a> . The process is simple, the turnaround fast and I get quality, SEO optimised content for my clients sites.</p>&mdash; Lauren (@tomatocreative) <a href="https://twitter.com/tomatocreative/statuses/423378688294391808">January 15, 2014</a></blockquote>
            <blockquote class="twitter-tweet" lang="en"><p><a href="https://twitter.com/getacopywriter">@getacopywriter</a> Just had some great articles from these guys, at a very good price. <a href="https://t.co/jWn3CtHP5J">https://t.co/jWn3CtHP5J</a></p>&mdash; Aidan Sheerin (@aidansheerin) <a href="https://twitter.com/aidansheerin/statuses/411007932948811776">December 12, 2013</a></blockquote>
            <h2>In The End</h2>
            <p>The key goal to raise the price rates was successfully achieved. Get a Copywriter got from selling content for $4 to an average price of $29 and even selling premium content for $300. And in the end, this is what matters the most for this business. </p>
            <p><strong>More about this project</strong></p>
            <ul>
              <li><a href="https://dribbble.com/matejlatin/projects/107852-Get-a-Copywriter">Get a Copywriter project on Dribbble</a></li>
              <li><a href="http://www.getacopywriter.com/">Get a Copywriter website</a></li>
            </ul>
        </div>
    </div>
</article>

<?php echo js('assets/js/combined.min.js') ?>
<?php echo js('assets/js/countUp.min.js') ?>
<script>
  var options = {
      useEasing : true, 
      useGrouping : true, 
      separator : ',', 
      decimal : '.' 
    }
    var avgTime = new countUp("avgTime", 0, 800, 0, 2.5, options);
    var bounceRate = new countUp("bounceRate", 0, 30, 0, 2.5, options);
    var newVisitors = new countUp("newVisitors", 0, 37, 0, 2.5, options);
    $(window).scroll( function(){
        $('#avgTime').each( function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                avgTime.start();
                }
        });
        $('#bounceRate').each( function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                bounceRate.start();
                }
        });
        $('#newVisitors').each( function(i){
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            if( bottom_of_window > bottom_of_object ){
                newVisitors.start();
                }
        });
    });
</script>
<div class="bgGreen cf">
  <?php snippet('footer') ?>
</div>
