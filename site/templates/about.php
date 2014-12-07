<?php snippet('header') ?>
<div class="intro light about">
    <div class="verticalCenter homeBg">
        <h1><?php echo html($page->h1()) ?></h1>
        <time><?php echo html($page->author()) ?></time>
    </div>
</div>
<article class="cf about">
    <p class="extract"><?php echo html($page->intro()) ?></p>
    <?php echo kirbytext($page->text()) ?>
    <h4>FEATURED IN</h4>
    <ul class="featured cf">
    	<li><a href="http://www.smashingmagazine.com/2014/06/16/user-total-control-designers-nightmare/">
    		<img data-src="<?php echo $page->images()->find('featured-smashing-magazine.jpg')->url() ?>" title="A User in Total Control is a Designer's Nightmare" alt="Smashing Magazine"></a></li>
    	<li><a href="http://designmodo.com/designing-browser/">
    		<img data-src="<?php echo $page->images()->find('featured-designmodo.jpg')->url() ?>" alt="Designmodo" title="(Re)Adopting the Design-in-Browser Approach"></a></li>
    </ul>
    <h4>GET IN TOUCH</h4>
    <ul class="contacts">
    	<li>
            <a href="mailto:matejlatin@gmail.com?subject=Hello Matej">
                <svg class="contactEmail" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 21.5 14" style="enable-background:new 0 0 21.5 14;" xml:space="preserve">
                     <path d="M15.058,6.902L21.5,0.347v13.109L15.058,6.902z M10.042,9.323L0.878,0h19.747
                    l-9.164,9.323C11.082,9.709,10.421,9.709,10.042,9.323z M0,13.46V0.344l6.446,6.558L0,13.46z M9.434,9.942
                    c0.351,0.358,0.82,0.555,1.317,0.555c0.498,0,0.966-0.197,1.317-0.555l2.38-2.422L20.818,14H0.686l6.369-6.479L9.434,9.942z"/>
                </svg>
            </a>
        </li>
    	<li>
            <a href="http://dribbble.com/matejlatin">
                <svg class="contactDribbble" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.022 45.957c-11.589 0-21.017-9.428-21.017-21.017S13.434 3.9 25 3.9 s21.017 9.4 21 21.017S36.611 46 25 45.957z M42.747 27.817c-0.614-0.194-5.556-1.668-11.182-0.767 c2.348 6.5 3.3 11.7 3.5 12.799C39.08 37.1 41.9 32.8 42.7 27.817z M32.035 41.5 c-0.267-1.575-1.309-7.064-3.83-13.613c-0.039 0.013-0.079 0.026-0.118 0.04c-10.125 3.528-13.76 10.55-14.083 11.2 c3.044 2.4 6.9 3.8 11 3.79C27.509 42.9 29.9 42.4 32 41.492z M11.686 37 c0.407-0.696 5.333-8.854 14.592-11.846c0.234-0.076 0.47-0.147 0.707-0.214c-0.451-1.02-0.941-2.041-1.455-3.047 c-8.965 2.683-17.664 2.571-18.45 2.555c-0.005 0.182-0.009 0.365-0.009 0.549C7.071 29.6 8.8 33.8 11.7 36.97z M7.45 21.291c0.803 0 8.2 0 16.596-2.187c-2.974-5.288-6.182-9.733-6.656-10.382C12.368 11.1 8.6 15.7 7.5 21.291z M20.816 7.515c0.496 0.7 3.8 5.1 6.7 10.509c6.383-2.393 9.086-6.025 9.409-6.485c-3.17-2.813-7.339-4.524-11.9-4.524 C23.574 7 22.2 7.2 20.8 7.515z M38.918 13.615c-0.378 0.512-3.387 4.368-10.024 7.078c0.418 0.9 0.8 1.7 1.2 2.6 c0.132 0.3 0.3 0.6 0.4 0.926c5.973-0.751 11.9 0.5 12.5 0.578C42.933 20.6 41.4 16.7 38.9 13.615z"/>
                </svg>
            </a>
        </li>
    	<li>
            <a href="http://twitter.com/matejlatin">
                <svg class="contactTwitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                    <path class="contactTwitter" d="M49.826 9.584l-4.655 4.612c0 0 0-0.418 0 0.769c0 0.843-0.137 1.648-0.335 2.4 c-0.108 6.345-2.148 14.759-10.526 21.4C17.83 51.9 0.2 40.3 0.2 40.332c13.965 0 13.965-4.612 13.965-4.612 c-3.103 0-9.31-6.149-9.31-6.149c1.552 1.5 4.7 0 4.7 0c-7.758-4.612-7.758-9.225-7.758-9.225c1.552 1.5 4.7 0 4.7 0 c-7.758-6.15-3.103-13.837-3.103-13.837C4.829 14.2 25 17.3 25 17.271l0.257-0.127C25.098 16.4 25 14.9 25 14.2 c0-5.519 4.515-9.224 10.086-9.224c3.066 0 5.8 1.4 7.6 3.524l0.906-0.449l4.655-3.075l-3.103 6.15L49.826 9.584z"/>
                </svg>
            </a>
        </li>
    	<li>
            <a href="http://de.linkedin.com/in/matejlatin/">
                <svg class="contactLinked" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="25px" height="22.5px" viewBox="0 0 25 22.5" style="enable-background:new 0 0 25 22.5;" xml:space="preserve">
                    <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M19.533,14.764c0-1.942-0.401-3.269-2.258-3.269 c-1.415,0-2.599,0.898-2.971,1.759c-0.135,0.31-0.169,0.737-0.169,1.171v8.072H8.67c0,0,0.066-13.634,0-14.988h5.466v2.582 c-0.01,0.016-0.022,0.034-0.034,0.048h0.034V10.09c0.683-0.986,2.241-2.586,4.961-2.586C22.47,7.504,25,9.769,25,14.21v8.287h-5.467 V14.764z M3.948,6.07H3.914c-1.72,0-2.833-1.112-2.833-2.498c0-1.418,1.147-2.498,2.9-2.498c1.754,0,2.834,1.081,2.868,2.498 C6.85,4.958,5.736,6.07,3.948,6.07z M6.513,22.497H1.385V8.044h5.128V22.497z"/>
            		<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M3.804,0c2.101,0,3.804,1.439,3.804,3.214S5.905,6.429,3.804,6.429
            			S0,4.99,0,3.214S1.703,0,3.804,0z"/>
            		<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M3.804,0c1.501,0,2.717,1.199,2.717,2.679S5.305,5.357,3.804,5.357
            			S1.087,4.158,1.087,2.679S2.303,0,3.804,0z"/>
            		<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M1.087,7.5h5.434v15H1.087V7.5z"/>
        		</svg>
            </a>
        </li>
    </ul>
</article>

<?php echo js('assets/js/combined.min.js') ?>
<?php snippet('page-footer') ?>
