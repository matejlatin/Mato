<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?> </title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->intro()) ?>" />
  <meta name="twitter:description" content="<?php echo html($site->intro()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta property="og:title" content="<?php echo html($site->title()) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="http://matoweb.com">
  <meta name="twitter:creator" content="@matejlatin">
  <meta name="twitter:card" content="summary">

  <?php echo css('assets/styles/combined.min.css') ?>

    <style media="screen" type="text/css">

    .intro, .menuToggle {
        background: url(<?php echo $page->images()->find('bg.jpg')->url() ?>) center center;
        background-size: cover;
    }
    <?php
        if($page->isChildOf($pages->find('writings'))):
            $related = related($page->related());
            echo 'aside { background: url('. $related->first()->images()->find('bg.jpg')->url() .') center center; background-size: cover; }';
        endif;
    ?>
    </style>
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">
    <link rel="icon" href="/favicon.png" type="image/x-icon">
    </head>

    <body>
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <header class="cf light">
        <div class="logo">
            <a href="/"><h1>mato</h1></a>
        </div>
        <a href="javascript:void(0)" class="btnMenu">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 33.5v-3h19v3H15.5z M15.5 23.5h19v3h-19V23.5z M15.5 16.5h19v3h-19V16.5z"/></svg>
        </a>
        <?php snippet('menu') ?>
    </header>
    <div class="arrow"><a href="javascript:void(0)"><img src="<?php echo url('assets/images/arrow.svg') ?>" alt=""></a></div>
    <div class="menuToggle">
        <nav>
            <a href="javascript:void(0)" class="btnCloseMenu">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><style>.style0{clip-rule:    evenodd;fill-rule:    evenodd;}</style><path fill="white" class="icnClose" d="M37.551 35.607l-2.121 2.121L24.823 27.121L14.57 37.374l-2.121-2.121L22.702 25 L12.449 14.747l2.121-2.121l10.253 10.253L35.43 12.272l2.121 2.121L26.945 25L37.551 35.607z" /></svg>
            </a>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/work">Work</a></li>
                <li><a href="/writings">Writings</a></li>
                <li>
                    <ul class="navSocial">
                        <li><a href="https://twitter.com/matejlatin"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><path class="tw" fill-rule="evenodd" clip-rule="evenodd" d="M49.826 9.584l-4.655 4.612c0 0 0-0.418 0 0.769c0 0.843-0.137 1.648-0.335 2.4 c-0.108 6.345-2.148 14.759-10.526 21.4C17.83 51.9 0.2 40.3 0.2 40.332c13.965 0 13.965-4.612 13.965-4.612 c-3.103 0-9.31-6.149-9.31-6.149c1.552 1.5 4.7 0 4.7 0c-7.758-4.612-7.758-9.225-7.758-9.225c1.552 1.5 4.7 0 4.7 0 c-7.758-6.15-3.103-13.837-3.103-13.837C4.829 14.2 25 17.3 25 17.271l0.257-0.127C25.098 16.4 25 14.9 25 14.2 c0-5.519 4.515-9.224 10.086-9.224c3.066 0 5.8 1.4 7.6 3.524l0.906-0.449l4.655-3.075l-3.103 6.15L49.826 9.584z"/></svg></a></li>
                        <li><a href="http://dribbble.com/matejlatin"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="28px" height="28px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"><path class="dr" fill-rule="evenodd" clip-rule="evenodd" d="M25.022 45.957c-11.589 0-21.017-9.428-21.017-21.017S13.434 3.9 25 3.9 s21.017 9.4 21 21.017S36.611 46 25 45.957z M42.747 27.817c-0.614-0.194-5.556-1.668-11.182-0.767 c2.348 6.5 3.3 11.7 3.5 12.799C39.08 37.1 41.9 32.8 42.7 27.817z M32.035 41.5 c-0.267-1.575-1.309-7.064-3.83-13.613c-0.039 0.013-0.079 0.026-0.118 0.04c-10.125 3.528-13.76 10.55-14.083 11.2 c3.044 2.4 6.9 3.8 11 3.79C27.509 42.9 29.9 42.4 32 41.492z M11.686 37 c0.407-0.696 5.333-8.854 14.592-11.846c0.234-0.076 0.47-0.147 0.707-0.214c-0.451-1.02-0.941-2.041-1.455-3.047 c-8.965 2.683-17.664 2.571-18.45 2.555c-0.005 0.182-0.009 0.365-0.009 0.549C7.071 29.6 8.8 33.8 11.7 36.97z M7.45 21.291c0.803 0 8.2 0 16.596-2.187c-2.974-5.288-6.182-9.733-6.656-10.382C12.368 11.1 8.6 15.7 7.5 21.291z M20.816 7.515c0.496 0.7 3.8 5.1 6.7 10.509c6.383-2.393 9.086-6.025 9.409-6.485c-3.17-2.813-7.339-4.524-11.9-4.524 C23.574 7 22.2 7.2 20.8 7.515z M38.918 13.615c-0.378 0.512-3.387 4.368-10.024 7.078c0.418 0.9 0.8 1.7 1.2 2.6 c0.132 0.3 0.3 0.6 0.4 0.926c5.973-0.751 11.9 0.5 12.5 0.578C42.933 20.6 41.4 16.7 38.9 13.615z"/></svg></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
