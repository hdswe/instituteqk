<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/droid-arabic-kufi" rel="stylesheet" type="text/css"/>

<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
  <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
  <div class="navbar-inner">
    <div class="navbar-header"> <a href="#" class="navbar-brand"> <strong>
      <?= $site_name ?>
      </strong> </a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
    </div>
    <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
      <div>
        <div class="right clearfix">
          <ul class="nav navbar-nav pull-right right-navbar-nav">
            <li class="dropdown"> <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown"> <img src="assets/demo/avatars/1.jpg" alt=""> <span>
              <?= "Admin" ?>
              </span> </a>
              <ul class="dropdown-menu">
                <li><a href="logout.php"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;تسجيل خروج</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="main-menu" role="navigation">
  <div id="main-menu-inner">
    <div class="menu-content top animated fadeIn" id="menu-content-demo"> 
      <!-- Menu custom content demo
					 Javascript: html/assets/demo/demo.js
				 -->
      <div>
        <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">Admin</span></div>
        <img src="assets/demo/avatars/1.jpg" alt="" class="">
        <div class="btn-group"> <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a> <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a> <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a> <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a> </div>
        <a href="#" class="close">×</a> </div>
    </div>
    <ul class="navigation">
      <li> <a href="settings.php?do=edit"><i class="menu-icon fa fa-cog"></i><span class="mm-text">اعددات الموقع</span></a> </li>
      <li> <a href="menu.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">القائمة الرئيسية</span></a> </li>
      <li> <a href="pages.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">الصفحات</span></a> </li>
      <li> <a href="blog_category.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">أقسام المقالات</span></a> </li>
      <li> <a href="blog.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">الأخبار والمقالات</span></a> </li>
                      
      <li> <a href="slideshow.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">السلايد</span></a> </li>
      
      
    </ul>
  </div>
</div>
