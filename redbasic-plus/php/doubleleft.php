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



<!-- START -->

<style>

        /* Google Fonts Import Link */
        /*
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    */
    .sidebar{
    position: fixed;
    top: 53px;
    left: 0;
    height: 100%;
    width: 260px;
    z-index: 100;
    transition: all 0.5s ease;
    /* background-color: lightsteelblue;*/
    /* background-color: #eeeeee; */
    }
    .sidebar.close{
    width: 78px;
    }
    .sidebar .logo-details{
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
    /* background-color: steelblue; */
    }
    .sidebar .logo-details i{
    font-size: 30px;
    color: #11101d;
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    }
    .sidebar .logo-details .logo_name{
    font-size: 22px;
    color: #fff;
    font-weight: 600;
    transition: 0.3s ease;
    transition-delay: 0.1s;
    }
    .sidebar.close .logo-details .logo_name{
    transition-delay: 0s;
    opacity: 0;
    pointer-events: none;
    }
    .sidebar .nav-links{
    height: 100%;
    padding: 30px 0 150px 0;
    overflow: auto;
    }
    .sidebar.close .nav-links{
    overflow: visible;
    }
    .sidebar .nav-links::-webkit-scrollbar{
    display: none;
    }
    .sidebar .nav-links li{
    position: relative;
    list-style: none;
    transition: all 0.4s ease;
    }
    .sidebar .nav-links > li.active:before,
    .sidebar .nav-links > li:before{
    position:absolute;
    left:0;
    top:60px;
    content:'';
    width:4px;
    height:100%;
    background:#93181a;
    opacity: 0;
    transition: all 0.25s ease-in-out;
    border-top-right-radius:5px;
    border-top-right-radius:5px;
    }
    .sidebar .nav-links li.active:before,
    .sidebar .nav-links li:hover:before{
    opacity: 1;
    }
    .sidebar .nav-links li .iocn-link{
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .sidebar.close .nav-links li .iocn-link{
    display: block
    }
    .sidebar .nav-links li i{
    height: 50px;
    min-width: 78px;
    text-align: center;
    line-height: 50px;
    color: #11101d;
    font-size: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    }

    .sidebar .nav-links li.active i,
    .sidebar .nav-links li:hover i{
    color: #93181a;  
    }
    .sidebar .nav-links li.showMenu i.arrow{
    transform: rotate(-180deg);
    }
    .sidebar.close .nav-links i.arrow{
    display: none;
    }
    .sidebar .nav-links li a{
    display: flex;
    align-items: center;
    text-decoration: none;
    }
    .sidebar .nav-links li a .link_name{
    font-size: 16px;
    font-weight: 400;
    color: #11101d;
    transition: all 0.4s ease;
    }
    .sidebar .nav-links li.active a .link_name,
    .sidebar .nav-links li:hover a .link_name{  
    color: #93181a;
    }
    .sidebar.close .nav-links li a .link_name{
    opacity: 0;
    pointer-events: none;
    }
    .sidebar .nav-links li .custom-sub-menu{
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: lightsteelblue;
    display: none;
    }
    .sidebar .nav-links li.showMenu .custom-sub-menu{
    display: block;
    }
    .sidebar .nav-links li .custom-sub-menu a{
    /* color: #1d1b31; */
    color: black;
    /* font-size: 15px; */ 
    padding: 5px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: all 0.3s ease;
    }
    .sidebar .nav-links li .custom-sub-menu a:hover{
    opacity: 1;
    }
    .sidebar.close .nav-links li .custom-sub-menu{
    position: absolute;
    left: 100%;
    top: -10px;
    margin-top: 0;
    padding: 10px 20px;
    border-radius: 0 6px 6px 0;
    opacity: 0;
    display: block;
    pointer-events: none;
    transition: 0s;
    }
    .sidebar.close .nav-links li:hover .custom-sub-menu{
    top: 0;
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
    }
    .sidebar .nav-links li .custom-sub-menu .link_name{
    display: none;
    }
    .sidebar.close .nav-links li .custom-sub-menu .link_name{
    font-size: 18px;
    opacity: 1;
    display: block;
    }
    .sidebar .nav-links li .custom-sub-menu.blank{
    opacity: 1;
    pointer-events: auto;
    padding: 3px 20px 6px 16px;
    opacity: 0;
    pointer-events: none;
    }
    .sidebar .nav-links li:hover .custom-sub-menu.blank{
    top: 50%;
    transform: translateY(-50%);
    }
    .sidebar .profile-details{
    position: fixed;
    bottom: 49px;
    width: 260px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* background: #1d1b31; */
    background: steelblue;
    padding: 12px 0;
    transition: all 0.5s ease;
    }
    .sidebar.close .profile-details{
    background: none;
    }
    .sidebar.close .profile-details{
    width: 78px;
    }
    .sidebar .profile-details .profile-content{
    display: flex;
    align-items: center;
    }
    .sidebar .profile-details img{
    height: 52px;
    width: 52px;
    object-fit: cover;
    border-radius: 16px;
    margin: 0 14px 0 12px;
    /* background: #1d1b31; */

    transition: all 0.5s ease;
    }
    .sidebar.close .profile-details img{
    padding: 10px;
    }
    .sidebar .profile-details .profile_name,
    .sidebar .profile-details .job{
    color: #fff;
    font-size: 16px;
    font-weight: 400;
    white-space: nowrap;
    }
    .sidebar .profile-details .job{
    color: #fff;
    font-size: 14px;
    font-weight: 300;
    opacity:.5;
    white-space: nowrap;
    }
    .sidebar .profile-details i.bx{  
        min-width: 50px;
    }

    .sidebar.close .profile-details i,
    .sidebar.close .profile-details .profile_name,
    .sidebar.close .profile-details .job{
    display: none;
    }
    .sidebar .profile-details .job{
    font-size: 12px;
    }
    .home-section{
    position: relative;
    /* background: #E4E9F7;  */
    height: 100vh;
    left: 260px;
    width: calc(100% - 260px);
    transition: all 0.5s ease;
    }
    .sidebar.close ~ .home-section{
    left: 78px;
    width: calc(100% - 78px);
    }
    .home-section .home-content{
    height: 60px;
    display: flex;
    align-items: center;
    }
    .home-section .home-content .bx-menu,
    .home-section .home-content .text{
    color: #11101d;
    font-size: 35px;
    }
    .home-section .home-content .bx-menu{
    margin: 0 15px;
    cursor: pointer;
    }
    .home-section .home-content .text{
    font-size: 26px;
    font-weight: 600;
    }
    @media (max-width: 420px) {
    .sidebar.close .nav-links li .custom-sub-menu{
        display: none;
    }

    .sidebar.close ~ .home-section {
    left: 0px;
    width: calc(100% - 0px);
}

    }
</style>


<div class="sidebar sidebar-response bg-body-tertiary d-none d-sm-block close">
    <div class="logo-details">
      <i class='bx bx-network-chart'></i>
      <span class="logo_name">Hubzilla</span>
    </div>
    <ul class="nav-links">
    <li>
        <a href="/">
          <i class='bx bx-home' ></i>
          <span class="link_name">Home</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="/home">Home</a></li>
        </ul>
      </li>
    <li>
        <a href="/hq">
          <i class='bi bi-person-circle' ></i>
          <span class="link_name">Headquarters (HQ)</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="/hq">Headquarters (HQ)</a></li>
        </ul>
      </li>
      <li>
        <a href="/notifications">
          <i class='bi bi-bell' ></i>
          <span class="link_name">Notifications</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="/notifications">Notifications</a></li>
        </ul>
      </li>      
      <li class="active">
        <div class="iocn-link">
          <a href="/channel/info">
            <!-- <i class='bx bx-collection' ></i> -->
            <i class='bi bi-house'></i>
            <span class="link_name">Channel</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="/channel/info">Channel</a></li>
          <li><a href="/channel/info">View Channel</a></li>
          <li><a href="/profile/info">View Profile</a></li>
          <li><a href="/profiles/1">Edit Profile</a></li>
          <li><a href="/photos/info">Photos</a></li>
          <li><a href="/cloud/info">Files</a></li>
          <li><a href="/cdav/calendar">Calendar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class="bi bi-chat-left-dots"></i>
            <span class="link_name">Conversations</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Conversations</a></li>
          <li><a href="#">Inbox / Stream</a></li>
          <li><a href="#">Direct Messages</a></li>
          <li><a href="#">Starred Posts</a></li>
          <li><a href="#">Personal Posts</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Polls</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bi bi-people' ></i>
            <span class="link_name">Contacts</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Contacts</a></li>
          <li><a href="#">Active Connections</a></li>
          <li><a href="#">All Connections</a></li>
          <li><a href="#">Connection Requests</a></li>
          <li><a href="#">Directory</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bi bi-star' ></i>
            <span class="link_name">Featured Apps</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Featured Apps</a></li>
          <li><a href="#">Channel</a></li>
          <li><a href="#">Directory</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">More Apps</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bi bi-gear' ></i>
            <span class="link_name">Settings</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Settings</a></li>
          <li><a href="#">Channel Settings</a></li>
          <li><a href="#">Account Settings</a></li>
          <li><a href="#">Privacy Settings</a></li>
          <li><a href="#">Display Settings</a></li>
          <li><a href="#">Manage Locations</a></li>
        </ul>
      </li>

      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bi bi-sliders' ></i>
            <span class="link_name">Personalization</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Personalization</a></li>
          <li><a href="#">Channel Home</a></li>
          <li><a href="#">Connections</a></li>
          <li><a href="#">Stream</a></li>
          <li><a href="#">Directory</a></li>
          <li><a href="#">Calendar</a></li>
          <li><a href="#">Photo</a></li>
        </ul>
      </li>      

      <li>
        <a href="#">
          <i class='bi bi-search' ></i>
          <span class="link_name">Search</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="#">Search</a></li>
        </ul>
      </li>
<!--      
      <li>
        <a href="#">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Chart</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="#">Chart</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Plugins</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="custom-sub-menu">
          <li><a class="link_name" href="#">Plugins</a></li>
          <li><a href="#">UI Face</a></li>
          <li><a href="#">Pigments</a></li>
          <li><a href="#">Box Icons</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Explore</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="#">Explore</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="#">History</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Setting</span>
        </a>
        <ul class="custom-sub-menu blank">
          <li><a class="link_name" href="#">Setting</a></li>
        </ul>
      </li>

-->

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="https://gravatar.com/avatar/f57bddebd1edf91412d5d68702530099" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Dumitru Chirutac</div>
        <div class="job">Web Desginer</div>
      </div>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <!--
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Drop Down Sidebar</span>
    </div>
  </section>
-->


<script>

    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
    let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
    arrowParent.classList.toggle("showMenu");
        });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
    });

  </script>


<section class="home-section">
<div class="!home-content">
<!--
<i class='bx bx-menu' ></i>
      <span class="text">Drop Down Sidebar</span>
-->
<!-- END -->


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

    </div>
  </section>

  <div class="fixed-bottom">

    <footer><?php if(x($page,'footer')) echo $page['footer']; ?></footer>    

<nav class="navbar navbar-expand-lg !sticky-bottom bg-body-tertiary">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="/">Expat License</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">

    <span class="navbar-text me-auto">
        Copyright &copy;2024 <a href="https://federated.works">Federated Works</a>.
      </span>    

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/siteinfo">Site Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Privacy</a>
        </li>
      </ul>

    </div>

  </div>
</nav>

</div>

<script>
function changeSidebarClass() {
    var x = document.getElementsByClassName('sidebar-response');
    var width = (window.innerHeight > 0) ? window.innerHeight : screen.Height;
    console.log(width);
    if(width <= 640) {
        while(x.length > 0) {
            x[1].className ='sidebar sidebar-response bg-body-tertiary d-none d-sm-block close'; 
        }
    } else {
        while(x.length > 0) {
            x[0].className = "sidebar sidebar-response bg-body-tertiary d-none d-sm-block showMenu";
        }
    }
}
</script>

</body>
</html>
