<?php
/**
 *   * Name: doubleleft
 *   * Description: Hubzilla 2-column layout with left aside
 *   * Version: 1
 *   * Author: zlax
 *   * Maintainer: zlax
 *   * ContentRegion: aside, left_aside_wrapper
 *   * ContentRegion: content, region_2
 */
?>
<!DOCTYPE html >
<html prefix="og: http://ogp.me/ns#" <?php if(x($page,'color_mode')) echo $page['color_mode'] ?>>
<head>
  <title><?php if(x($page,'title')) echo $page['title'] ?></title>
  <script>var baseurl="<?php echo z_root() ?>";</script>
  <?php if(x($page,'htmlhead')) echo $page['htmlhead'] ?>
</head>
<body <?php if($page['direction']) echo 'dir="rtl"' ?> >


<style>

[data-bs-theme=light] .navbar.bg-body-tertiary {
    background-color: rgba(176, 195, 222, 1) !important;
}

.navbar.bg-body-tertiary {
    background-color: rgba(176, 195, 222, 1) !important;
}

[data-bs-theme=light] {
    --hz-body-bg: rgba(215,233,247,1);
    --hz-body-bg-image: url(style.css);
}

body {
    --hz-body-bg: rgba(215,233,247,1);
    --hz-body-bg-image: url(style.css);
}

</style>

	<?php if(x($page,'banner')) echo $page['banner']; ?>
	<header><?php if(x($page,'header')) echo $page['header']; ?></header>
	<?php if(x($page,'nav')) echo $page['nav']; ?>
	<main>
		<div class="content">
			<div class="columns">
				<aside id="region_1" class="d-none d-lg-block"><div class="aside_spacer_top_left"></div><div class="aside_spacer_left"><div id="left_aside_wrapper" class="aside_wrapper"><?php if(x($page,'aside')) echo $page['aside']; ?></div></div></aside>
				<section id="region_2"><?php if(x($page,'content')) echo $page['content']; ?>
					<div id="page-footer"></div>
					<div id="pause"></div>
				</section>
			</div>
		</div>

        



	</main>

    <footer><?php if(x($page,'footer')) echo $page['footer']; ?></footer>    

<nav class="navbar sticky-bottom bg-body-tertiary">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <span class="navbar-text">
        Copyright &copy;2024 <a href="https://federated.works">Federated Works</a>.
      </span>
    </div>

  </div>
</nav>

</body>
</html>
