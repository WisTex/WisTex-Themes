<?php
/**
 *   * Name: default
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
        <!--<link href="/custom/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/custom/css/codestitch-sections.css?1685973381" rel="stylesheet"/>-->
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
        <!--<link href="/view/theme/neuhub-tab/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/view/theme/neuhub-tab/css/codestitch-sections.css?1685973381" rel="stylesheet"/>-->

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
        /*background-color: #FFFFFF;*/
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
  <body >
    <?php /* Moved to theme_init.php <script src="/view/theme/neuhub-tabler/dist/js/demo-theme.min.js?1685973381"></script> */ ?>
    <script src="/view/theme/neuhub-tab/dist/js/demo-theme.min.js?1685973381"></script>
    <div class="page">

                <!-- Main Site Navigation -->
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
            
                <?php echo (App::$module == "admin" && argv(1) == "queue") ? "</div>" : ""; ?>    

                
              </div>
              <div class="col-lg-4">

              <div id="left_aside_wrapper"><?php if(x($page,'aside')) echo $page['aside']; ?></div>
              <div id="right_aside_wrapper"><?php if(x($page,'right_aside')) echo $page['right_aside']; ?></div>



                <p></p>



              </div>
            </div>
          </div>
        </div>

        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="<?php echo $HomeURL; ?>" class="link-secondary"><?php echo $HomeURLName; ?></a></li>
                  <li class="list-inline-item"><a href="<?php echo $DirectoryURL; ?>" class="link-secondary"><?php echo $DirectoryURLName; ?></a></li>
                  
                  <li class="list-inline-item"><a href="<?php echo $TermsURL; ?>" class="link-secondary"><?php echo $TermsURLName; ?></a></li>
                  <li class="list-inline-item"><a href="<?php echo $PrivacyURL; ?>" class="link-secondary"><?php echo $PrivacyURLName; ?></a></li>
                  <li class="list-inline-item"><a href="<?php echo $SiteInfoURL; ?>" class="link-secondary"><?php echo $SiteInfoURLName; ?></a></li>
                  <li class="list-inline-item"><a href="<?php echo $HelpURL; ?>" class="link-secondary"><?php echo $HelpURLName; ?></a></li>
                  <!-- 
                  <li class="list-inline-item"><a href="./article/about" class="link-secondary">About</a></li>
                  -->
                  <!--
                  <li class="list-inline-item">
                    <a href="https://neuhub.org" target="_blank" class="link-secondary" rel="noopener">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sponsor
                    </a>
                  </li>
                  -->
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><?php echo $Copyright; ?>
                    <!-- Copyright &copy; 1995-2023
                    <a href="https://wistex.com" target="_blank" class="link-secondary">WisTex TechSero Ltd. Co.</a>
                    All rights reserved. -->
                  </li>
                  <!--
                  <li class="list-inline-item">
                    <a href="./article/changelog" class="link-secondary" rel="noopener">
                      v1.0
                    </a>
                  </li>
                  -->
                </ul>
              </div>
            </div>
          </div>

          <style>
            .mobile-nav {
            background: #F1F1F1;
            position: fixed;
            bottom: 0;
            height: 65px;
            width: 100%;
            display: flex;
            justify-content: space-around;
            margin-top: 165px;
          }
          .bloc-icon {
            display: flex;
            justify-content: center;
            align-items: center;
          }
          .bloc-icon img {
            width: 30px;
          }
          @media screen and (min-width: 600px) {
            .mobile-nav {
            display: none;
            }
          }
          </style>
          
                  <nav class="mobile-nav bg-dark-lt">
                    <a href="/" class="bloc-icon">




                      <span class="bg-dark-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                      </span>
                    </a>
                    <a href="/profile/wistex" class="bloc-icon">
                      <span class="bg-dark-lt text-muted avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                      </span>
                    </a>
                    <a href="/hq" class="bloc-icon">
                      <span class="bg-dark-lt text-muted avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-castle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M15 19v-2a3 3 0 0 0 -6 0v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-14h4v3h3v-3h4v3h3v-3h4v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />
                          <path d="M3 11l18 0" />
                        </svg>
                      </span>
                    </a>

                    <div class="notifications-icon-mobile-off" style="display:none">
                      <a href="/hq" class="bloc-icon">
                        <span class="bg-dark-lt text-muted avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->

                          <!-- if there are no notifications -->

                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                          </svg>  

                        </span>
                      </a>
                    </div>
                    <div class="notifications-icon-mobile-on" style="display:none">
                      <a href="/hq" class="bloc-icon">
                        <span class="bg-dark-lt text-muted avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->

                          <!-- if there are notifications -->
                          
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor" />
                            <path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor" />
                          </svg>
                          <span class="badge bg-red" style="display:inline-block;margin-bottom:30px"></span>
                        
                        </span>
                      </a>
                    </div>
                    <a href="/settings" class="bloc-icon">
                      <span class="bg-dark-lt text-muted avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        </svg>
                      </span>
                    </a>
                </nav>

        </footer>

      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/view/theme/neuhub-tab/dist/js/tabler.min.js?1685973381" defer></script>
    <script src="/view/theme/neuhub-tab/dist/js/demo.min.js?1685973381" defer></script>
  </body>
</html>