<?php
/**
 *   * Name: custompage
 *   * Description: Neuhub default 2-column layout
 *   * Version: 0.1
 *   * Author: WisTex TechSero Ltd. Co.
 *   * Maintainer: WisTex TechSero Ltd. Co.
 *   * ContentRegion: aside, left_aside_wrapper
 *   * ContentRegion: content, region_2
 *   * ContentRegion: right_aside, right_aside_wrapper
 */
?>
<!doctype html>
<!--
* Neuhub Tab Theme for Hubzilla
* @version 0.1
* @link https://neuhub.org
* Copyright © 2023 WisTex TechSero Ltd. Co.
* Licensed under MIT (https://license.neuhub.org)
*
* This theme uses elements from:
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright © 2018-2023 The Tabler Authors
* Copyright © 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->

<?php
// Include default configuration file, if it exists.
// ! Do not put your configuration settings in this file. It will be overwritten when you update Neuhub.
$filename = 'view/theme/neuhub-tab/config/neuhub-config-default.php';
if (file_exists($filename)) {
    include_once('view/theme/neuhub-tab/config/neuhub-config-default.php');
} else {
    //// echo "The file $filename does not exist";
}
?>

<?php
// Include your configuration file, if it exists.
// ! Overrides values in default configuration file.
$filename = 'view/theme/neuhub-tab/config/neuhub-config.php';
if (file_exists($filename)) {
    include_once('view/theme/neuhub-tab/config/neuhub-config.php');
} else {
    //// echo "The file $filename does not exist";
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    
    <title><?php if(x($page,'title')) echo $page['title'] ?></title>
    <script>var baseurl="<?php echo z_root() ?>";</script>
    <?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>

<!--
    <script defer data-api="/stats/api/event" data-domain="preview.tabler.io" src="/stats/js/script.js"></script>
    <meta name="msapplication-TileColor" content=""/>
    <meta name="theme-color" content=""/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/>
    <meta name="description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!"/>
    <meta name="canonical" content="https://preview.tabler.io/layout-combo.html">
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png">
    <meta name="twitter:site" content="@tabler_ui">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta name="twitter:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <meta property="og:image" content="https://preview.tabler.io/static/og.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:site_name" content="Tabler">
    <meta property="og:type" content="object">
    <meta property="og:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta property="og:url" content="https://preview.tabler.io/static/og.png">
    <meta property="og:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
-->

    <!-- CSS files -->

    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/fonts/fontawesome-all.min.css?v=7.8.7" type="text/css" media="screen">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/fonts/font-awesome.min.css?v=7.8.7" type="text/css" media="screen">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/fonts/fontawesome5-overrides.min.css?v=7.8.7" type="text/css" media="screen">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/fonts/fa5/css/all.css?v=7.8.7" type="text/css" media="screen">
    <!-- <link rel="stylesheet" href="https://neuhub.org/view/theme/neuhub-red-dash/assets/assets/fonts/hubzilla/style.css?v=7.8.7" type="text/css" media="screen"> -->
    <!-- <link rel="stylesheet" href="/mockups/mockup-neuhub-tabley/assets/fonts/hubzilla/style.css?v=7.8.7" type="text/css" media="screen"> -->

    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="/view/theme/neuhub-tab/assets/css/styles.css">  

    <!-- ! Attempted to Move to /theme_init.php but didn't work. -->
    <link href="/view/theme/neuhub-tab/dist/css/tabler.min.css?1685973381" rel="stylesheet"/>
    <link href="/view/theme/neuhub-tab/dist/css/tabler-flags.min.css?1685973381" rel="stylesheet"/>
    <link href="/view/theme/neuhub-tab/dist/css/tabler-payments.min.css?1685973381" rel="stylesheet"/>
    <link href="/view/theme/neuhub-tab/dist/css/tabler-vendors.min.css?1685973381" rel="stylesheet"/>
    <link href="/view/theme/neuhub-tab/dist/css/demo.min.css?1685973381" rel="stylesheet"/>
<!-- -->

    <?php
    // Include Codestitch CSS files, if it exists.
    // ! Assumes you have uploaded both the main CSS and the CSS for the sections.
    $filename = '/custom/css/codestitch.css';
    if (file_exists($filename)) { ?>
        <link href="/custom/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/custom/css/codestitch-sections.css?1685973381" rel="stylesheet"/>
    <?php
    } else {
        //// echo "The file $filename does not exist";
    }
    ?>

      <!--
        Apparently, if you use the webpages app, it ignores any css not coming from the theme.
        <link href="/custom/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/custom/css/codestitch-sections.css?1685973381" rel="stylesheet"/>

        <link href="/view/theme/neuhub-tab/custom/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/view/theme/neuhub-tab/custom/css/codestitch-sections.css?1685973381" rel="stylesheet"/>
  -->
        <link href="/view/theme/neuhub-tab/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/view/theme/neuhub-tab/css/codestitch-sections.css?1685973381" rel="stylesheet"/>

    <style>
      /* @import url('/view/theme/neuhub-tab/assets/fonts/inter/inter.css'); */
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        /* --bs-border-color: rgba(4, 32, 69, 0.14); */
        --bs-border-color: rgba(72, 110, 149, 0.14); /* had to pick a color that shows up on light and dark modes */
        /* --bs-body-bg: white; conflicts with dark mode */
        /* --bs-body-bg: rgba(72, 110, 149, 0.14); had to pick a color that shows up on light and dark modes */
        /* --bs-body-bg: var(--tblr-card-color); */
        /* --bs-tertiary-bg: rgb(230, 238, 246);  conflicts with dark mode */
        /* --bs-tertiary-bg: rgba(72, 110, 149, 0.14); had to pick a color that shows up on light and dark modes */
        /* --bs-link-color: rgb(0, 84, 166); slate blue link color */
        --bs-link-color: green; /* mostly used for toggle switches */
        --tblr-link-color: green; /* mostly used for toggle switches */
        --bs-link-hover-color: #0a58ca;
        --bs-warning: #f59f00;
        --tblr-font-size-h1: 2rem;
    --tblr-font-size-h2: 1.75rem;
    --tblr-line-height-h2: 1.75rem;
    --tblr-font-size-h3: 1.5rem;
    --tblr-line-height-h3: 1.5rem;
    --tblr-font-size-h4: 1.25rem;
    --tblr-line-height-h4: 1.25rem;
    --tblr-font-size-h5: 1rem;
    --tblr-line-height-h5: 1rem;
    --tblr-font-size-h6: 0.75rem;
    --tblr-line-height-h6: 0.75rem;
        
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
      .wall-item-content-wrapper {
        background: var(--tblr-card-color);
      }
      .section-subtitle-wrapper {
        background: rgba(72, 110, 149, 0.14); /* had to pick a color that shows up on light and dark modes */
      }
      .wall-item-title {
        background: rgba(72, 110, 149, 0.14); /* had to pick a color that shows up on light and dark modes */
      }
.wall-item-title.h3 {
    font-size: 1.25rem;
}
.profile-cover-text.h3 {
  font-size: 1.25rem;
}
      .btn-group-sm>.btn, .btn-sm {
        --bs-btn-padding-y: 0.3rem;
        --bs-btn-padding-x: 0.5rem;
        --bs-btn-font-size: 0.8rem;
        --tblr-btn-padding-y: 0.3rem;
        --tblr-btn-padding-x: 0.5rem;
        --tblr-btn-font-size: 0.8rem;    
        --tblr-btn-icon-size: 0.9rem;
        --tblr-btn-line-height: 1;
      }
      .dropdown-menu {
    --tblr-dropdown-min-width: 15rem;
      }
      .avatar {
        --tblr-avatar-box-shadow: none;
      }
      .avatar-xl {
        --tblr-avatar-size: 80px;
      }

      dl, ol, ul {
        margin-top: 1rem;
        margin-bottom: 1rem;
      }

      .thread-wrapper {
        /* background: rgba(72, 110, 149, 0.14); */
        background: #f9f9f9;
        /* background: var(--tblr-active-bg); */
      }

      input[type=text], textarea {
        background-color: #FFFFFF;
      }

      .onoffswitch.checkbox > div label {
        border: 1px solid #0c5460;
        
      }

      .onoffswitch-switch {
        background: #800000;
        color: #800000;
      }

      .textcomplete-item.active {
        color: #000000;
        background-color: var(--bs-tertiary-bg);
      }

      /* For the Extra Theme Variables Addon */
      .field_id_custom_var_value {
        /* allow the text area to expand vertically in size with a horizontal scrollbar if pre-existing content is added to the box before rendering. Remove this if you want a pre-set height. Use "em" to match the font size set in the website. */
        height: auto;
        /* Use "em" to define the height based on the text size set in your website and the text rows in the box, not a static pixel value. */
        min-height: 25em !important;
        cursor: text;
        /* Some textareas have a light gray background by default anyway. */
        
        /* Overflow "auto" allows the box to start with no scrollbars but add them as content fills the box. */
        overflow: auto;
        /* Resize creates a tab in the lower right corner of textarea for most modern browsers and allows users to resize the box manually. Note: Resize isn't supported by most older agents and IE. */
        resize: both;
      }
      
    </style>
  </head>
  <body>
    <?php /* Moved to theme_init.php <script src="/view/theme/neuhub-tabler/dist/js/demo-theme.min.js?1685973381"></script> */ ?>
    <script src="/view/theme/neuhub-tab/dist/js/demo-theme.min.js?1685973381"></script>
    <!-- Disable Dark Mode for Custom Pages -->
    <script>
      (function() {
        let timer;
        const disableDarkMode = function() {
          if ($("body").attr("data-bs-theme") == "dark") {
              $("body").attr("data-bs-theme", "light");
              clearTimeout(timer);
          } else {
              timer = setTimeout(disableDarkMode, 1);
          }
        };
        disableDarkMode();
      })(); 
    </script>
    <div class="page">

                <!-- Main Site Navigation -->
                <?php //echo replace_macros(get_markup_template('header_custom.tpl', 'addon/custompage'), []); ?>
                <?php if(x($page,'nav')) echo $page['nav']; ?>
        
      <div class="page-wrapper">



        <!-- Page header -->
        <?php /*
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Thatcher Keel
                </div>
                <h2 class="page-title">
                  Combo layout
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="/hq" class="btn">
                      Headquarters (HQ)
                    </a>
                  </span>
                  <a href="/rpost" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create New Post
                  </a>
                  <a href="/rpost" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create New Post">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        */ ?>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-lg-12">

                <!-- Site Breadcrumbs -->
                <?php if(x($page,'breadcrumb')) echo $page['breadcrumb'] ?>   

                <!-- Widgets Above Content -->
                <?php if(x($page,'top_area')) echo $page['top_area']; ?>

              </div>

              <div class="col-lg-8">


                <div id="region_2"><?php if(x($page,'content')) echo $page['content']; ?></div>         

                <!--
                <div class="card !card-lg">
                    <div class="card-body">
                    
                    </div>
                </div>
                -->

                <!--
                <div class="card card-lg">
                  <div class="card-body">
                    <div class="markdown">
                      <p>This is a legal agreement between you, the Purchaser, and Tabler. Purchasing or downloading of any Tabler product (Tabler Free, Tabler PRO, Tabler Email), constitutes your acceptance of the terms of this license, <a href="https://tabler.io/terms-of-service.html">Tabler terms of service</a> and <a href="https://tabler.io/privacy-policy.html">Tabler private policy</a>.</p>
                      <p>A license grants you a non-exclusive and non-transferable right to use and incorporate the item in your personal or commercial projects.</p>
                      <h3 id="tabler-free-license">Tabler Free License</h3>
                      <p>Tabler Free is available under MIT License</p>
                      <p>Copyright 2023 Tabler</p>
                      <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:</p>
                      <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
                      <p>THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.</p>
                      <h3 id="tabler-pro-and-tabler-email-license">Tabler PRO and Tabler Email License</h3>
                      <p>After Purchasing you are granted the use products under the conditions featured belowed.</p>
                      <p>Rights</p>
                      <ol>
                        <li>You have rights to use our resources for any or all of your personal and commercial projects.</li>
                        <li>You may modify the resources according to your requirements.</li>
                        <li>You are not required to attribute or link to Tabler in any of your projects.</li>
                      </ol>
                      <p>Restrictions</p>
                      <ol>
                        <li>You do not have the rights to redistribute, resell, lease, license, sub-license or offer the file downloaded to any third party.</li>
                        <li>For any resalable web applications or software programs, you cannot include our graphic resources as an additional attachment.</li>
                        <li>You cannot redistribute any of the software, or products created with Tabler paid  products.</li>
                        <li>You cannot add our source code to any open source repository.</li>
                        <li>The source code may not be placed on any website in a complete or archived downloadable format.</li>
                      </ol>
                    </div>
                  </div>
                </div>
    -->
              </div>
              <div class="col-lg-4">

              <div id="left_aside_wrapper"><?php if(x($page,'aside')) echo $page['aside']; ?></div>
              <div id="right_aside_wrapper"><?php if(x($page,'right_aside')) echo $page['right_aside']; ?></div>



                <p></p>

                <?php /*
                <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  
                  <div class="card-body">
                    <small>
                      <!-- <a href="<?php echo $HomeURL; ?>"><b>Digital Authorship</b></a> -->This website is part of a decentralized social network powered by Hubzilla and Neuhub.
                      <!-- <a href="https://github.com/WisTex/Raconteur" target="_blank">Raconteur</a>. -->
                    </small>
                  </div>
                </div>
                */ ?>

                <?php /*
                <div class="card mb-3">
                  <!--
                  <div class="card-header">
                    <h3 class="card-title">Card title <span class="card-subtitle">Subtitle</span></h3>
                  </div>
                  -->
                  <div class="card-body">
                    <h3 class="card-title">Follow Scott M. Stolz</h3>
                  <p>Follow me on Hubzilla or via ActivityPub
                    <br>scott@completehostingguide.com
                  </p>
                  <p>Follow me on Mastodon
                    <br>@scott@completehostingguide.com
                  </p>
                  <!--
                  <p>Follow me on Bluesky
                    <br>@scott.completehostingguide.com
                  </p>
                  -->
                </div>
                </div>
                */ ?>



              </div>
            </div>
          </div>
        </div>

        <?php echo replace_macros(get_markup_template('footer_custom.tpl', 'addon/custompage'), []); ?>

      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/view/theme/neuhub-tab/dist/js/tabler.min.js?1685973381" defer></script>
    <script src="/view/theme/neuhub-tab/dist/js/demo.min.js?1685973381" defer></script>
  </body>
</html>