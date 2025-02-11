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
    // Include custom Codestitch CSS files, if it exists.
    // ! Assumes you have uploaded both the main CSS and the CSS for the sections.
    $filename = './custom/css/codestitch.css';
    if (file_exists($filename)) { ?>
        <<link href="/custom/css/codestitch.css?1685973381" rel="stylesheet"/>
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
        <!-- Loads the Neuhub Tab CodeStitch Files if they exist -->
         <!--
        <link href="/view/theme/neuhub-tab/css/codestitch.css?1685973381" rel="stylesheet"/>
        <link href="/view/theme/neuhub-tab/css/codestitch-sections.css?1685973381" rel="stylesheet"/>
  -->

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
        /*
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
    */
        
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

      .list-group {
        --tblr-list-group-item-padding-x: 0.8rem;
        --tblr-list-group-item-padding-y: 0.5rem;
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

      /* override Tabler's default so that the PDL navigation is a bit higher */
      .offcanvas {
        position: fixed;
        bottom: 40px;
      }
      
        .hq_controls.hq_controls_fixed_bottom_center {
            z-index: 1028;
            position: fixed;
            bottom: 45px;
            left: 50%;
            transform: translateX(-50%);
        }      

        code {
          display: inline;
          color: var(--bs-code-color);
        }


        #preview-pane (
          margin-top:20px;
        )

    </style>
  </head>
  <body>
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

              <div class="col-lg-8 col-xl-9">


                <div id="region_2"><?php if(x($page,'content')) echo $page['content']; ?></div>
                
                <?php echo (App::$module == "search") ? ((!isset(App::$data['search'])) ? "</div>" : "") : ""; ?>

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
              <div class="col-lg-4 col-xl-3">

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

        <!-- <footer class="footer footer-transparent d-print-none"> -->
        <div> <!-- footer -->

        <?php if ($ShowLargeFooter == 1) { ?>

        <div class="container-xl py-4 py-lg-5 widget z-n1">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item d-none d-sm-block d-md-block">
                    <h3 class="mb-0">Members</h3>
                    <ul class="list-unstyled">
                        <?php if ($channel["channel_address"]) { ?> 
                        <li><a class="link-secondary" href="/hq">Headquarters (HQ)</a></li>
                        <?php if ($ShowMembersAreaLink) { ?>
                            <li><a class="link-secondary" href="<?php echo $MembersAreaURL; ?>"><?php echo $MembersAreaURLName; ?></a></li>
                        <?php } ?>
                        <li><a class="link-secondary" href="/profiles">Edit Profile</a></li>
                        <li><a class="link-secondary" href="/settings">Settings</a></li>
                        <li><a class="link-secondary" href="/manage">Switch Channels</a></li>
                        <?php } else { ?>
                        <li><a class="link-secondary" href="/login">Login</a></li>
                        <li><a class="link-secondary" href="/rmagic">Magic Sign On</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item d-none d-sm-block d-md-block">
                    <h3 class="mb-0"><?php if ($channel["channel_address"]) { echo $channel["xchan_name"]; } else { echo "Channel"; } ?></h3>
                    <ul class="list-unstyled">
                        <?php if ($channel["channel_address"]) { ?> 
                        <li><a class="link-secondary" href="/channel/<?php echo $channel["channel_address"]; ?>">Channel</a></li>
                        <li><a class="link-secondary" href="/profile/<?php echo $channel["channel_address"]; ?>">Profile</a></li>
                        <li><a class="link-secondary" href="/photos/<?php echo $channel["channel_address"]; ?>">Photos</a></li>
                        <li><a class="link-secondary" href="/cloud/<?php echo $channel["channel_address"]; ?>">Files</a></li>
                        <li><a class="link-secondary" href="/cdav/calendar">Calendar</a></li>
                        <?php } else { ?>
                        <li><a class="link-secondary" href="/login">Login</a></li>
                        <li><a class="link-secondary" href="/rmagic">Magic Sign On</a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-start d-flex flex-column item">
                    <h3 class="mb-0">Community</h3>
                    <ul class="list-unstyled">
                            <li><a class="link-secondary" href="<?php echo $HomeURL; ?>"><?php echo $HomeURLName; ?></a></li>
                        <?php if ($ShowCommunityRules) { ?>
                            <li><a class="link-secondary" href="<?php echo $CommunityRulesURL; ?>">Community Rules</a></li>
                        <?php } ?>
                        <?php if ($ShowTermsLink) { ?>
                            <li><a class="link-secondary" href="<?php echo $TermsURL; ?>"><?php echo $TermsURLName; ?></a></li>
                        <?php } ?>
                        <?php if ($ShowDirectoryLink) { ?>
                            <li><a class="link-secondary" href="<?php echo $DirectoryURL; ?>"><?php echo $DirectoryURLName; ?></a></li>
                        <?php } ?>
                        <?php if ($ShowSiteInfo) { ?>
                            <li><a class="link-secondary" href="<?php echo $SiteInfoURL; ?>"><?php echo $SiteInfoURLName; ?></a></li>
                        <?php } ?>
                        <?php if ($ShowPrivacyLink) { ?>
                            <li><a class="link-secondary" href="<?php echo $PrivacyURL; ?>"><?php echo $PrivacyURLName; ?></a></li>
                        <?php } ?>
                        <?php if ($ShowCommunityRules) { ?>
                            <li><a class="link-secondary" href="<?php echo $HelpURL; ?>"><?php echo $HelpURLName; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>


                
                
                <div class="col-lg-3 text-center text-lg-start d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="fw-bold d-flex align-items-center mb-2">
                    <!--
                        <span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center bs-icon me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bezier">
                                <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"></path>
                                <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                            </svg>
                        </span>
                    -->
                        <h3 class="mb-2"><?php echo $SiteNameinFooterText; ?></h3>
                    </div>
                            
                    <p class="text-muted copyright"><?php echo $SiteDescinFooterText; ?></p>
                    
                    <?php if ($channel["channel_address"]) { ?> 
                    <p class=mb-4">You are logged in as <a href="<?php echo $channel["xchan_url"]; ?>"><?php echo $channel["xchan_name"]; ?></a>.</p>
                    <?php } ?>
                    
                    <p class="text-muted copyright">This website is part of a decentralized social network powered by <a href="https://hubzilla.org" target="_blank">Hubzilla</a> and <a href="https://neuhub.org" target="_blank">Neuhub</a>.</p>
                    
                </div>                
                



            </div>
            
            <div class="d-flex justify-content-between align-items-center pt-3">
                <p class="text-muted mb-0"><?php echo $Copyright; ?></p>

                <?php /* 
                  // This code is required or else the notifications don't work because the javascript looks for a notification button. 
                  // TODO: Temporarily putting it here, but it probably should be moved to a different place.
                */ ?>                
                  <button id="notifications-btn-1" type="button" class="navbar-toggler border-0 notifications-btn">
    			            <a class="nav-link notifications-btn z-1" href="/notifications">
    				            <i id="notifications-btn-icon-1" class="bi bi-exclamation-circle notifications-btn-icon generic-icons"></i>
    				        </a>
    			        </button>

                <!--
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-github">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15"></path>
                        </svg></li>
                    <li class="list-inline-item"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                        </svg></li>
                </ul>
                -->
            </div>
        </div>

        <?php } else { ?>

<div class="container-xl pb-4 !py-4 !py-lg-5 !widget z-n1">
  <div class="row text-center align-items-center flex-row-reverse">
    <div class="col-lg-auto ms-lg-auto">
      <ul class="list-inline list-inline-dots mb-0">
        <li class="list-inline-item"><a href="<?php echo $HomeURL; ?>" class="link-secondary"><?php echo $HomeURLName; ?></a></li>
          <?php if ($ShowDirectoryLink) { ?>
              <li class="list-inline-item"><a href="<?php echo $DirectoryURL; ?>" class="link-secondary"><?php echo $DirectoryURLName; ?></a></li>
          <?php } ?>
          <?php if ($ShowTermsLink) { ?>
              <li class="list-inline-item"><a href="<?php echo $TermsURL; ?>" class="link-secondary"><?php echo $TermsURLName; ?></a></li>
          <?php } ?>
          <?php if ($ShowPrivacyLink) { ?>
              <li class="list-inline-item"><a href="<?php echo $PrivacyURL; ?>" class="link-secondary"><?php echo $PrivacyURLName; ?></a></li>
          <?php } ?>
          <?php if ($ShowSiteInfo) { ?>
              <li class="list-inline-item"><a href="<?php echo $SiteInfoURL; ?>" class="link-secondary"><?php echo $SiteInfoURLName; ?></a></li>
          <?php } ?>
          <?php if ($ShowHelpLink) { ?>
              <li class="list-inline-item"><a href="<?php echo $HelpURL; ?>" class="link-secondary"><?php echo $HelpURLName; ?></a></li>
          <?php } ?>
        <!--
        <li class="list-inline-item"><a href="./article/about" class="link-secondary">About</a></li>
        -->
          <li class="list-inline-item">
              <button id="notifications-btn-1" type="button" class="navbar-toggler border-0 notifications-btn">
            <a class="nav-link notifications-btn z-1" href="/notifications">
              <i id="notifications-btn-icon-1" class="bi bi-exclamation-circle notifications-btn-icon generic-icons"></i>
          </a>
        </button>
    </li>
        
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
          <!-- Copyright © 1995-2023
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

<?php } ?>

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
          

          <?php if ($channel["channel_address"]) { ?> 

                  <nav class="mobile-nav bg-dark-lt">
                    <a href="/channel/<?php echo $channel["channel_address"]; ?>" class="bloc-icon">




                      <span class="bg-dark-lt text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                          <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                          <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                          <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                      </span>
                    </a>
                    <a href="/profile/<?php echo $channel["channel_address"]; ?>" class="bloc-icon">
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
                      <a href="/notifications" class="bloc-icon">
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
                      <a href="/notifications" class="bloc-icon">
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

                <?php } ?>

          </div>  <!-- footer -->
        <!-- </footer> -->

      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/view/theme/neuhub-tab/dist/js/tabler.min.js?1685973381" defer></script>
    <script src="/view/theme/neuhub-tab/dist/js/demo.min.js?1685973381" defer></script>
  </body>
</html>