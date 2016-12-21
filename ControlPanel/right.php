<link rel="stylesheet" media="screen" href="http://openfontlibrary.org/face/droid-arabic-kufi" rel="stylesheet" type="text/css"/>

<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
  <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
  <div class="navbar-inner">
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
      <? if($_SESSION['insert_id'] == '1') { ?>
      <li> <a href="settings.php?do=edit"><i class="menu-icon fa fa-cog"></i><span class="mm-text">اعددات الموقع</span></a> </li>
      <? } else { ?>
      <li> <a href="settings.php?do=edit_institutes"><i class="menu-icon fa fa-cog"></i><span class="mm-text">اعددات الموقع</span></a> </li>
      <? } ?>
      <li> <a href="file_manager.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">مدير الملفات</span></a> </li>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">اعددات القالب</span></a>
        <ul>
          <li> <a tabindex="-1" href="themes.php?do=color"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الألوان</span></a> </li>
          <li> <a tabindex="-1" href="themes.php?do=logo"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الشعار</span></a> </li>
          <li> <a tabindex="-1" href="themes.php?do=calendar"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">التقويم</span></a> </li>
          <li> <a tabindex="-1" href="themes.php?do=countdown"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">عداد الفعاليات</span></a> </li>
        </ul>
      </li>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">القوائم</span></a>
        <ul>
          <li> <a tabindex="-1" href="menu.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">القائمة الرئيسية</span></a> </li>
          <li> <a tabindex="-1" href="footer_menu.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الفوتر</span></a> </li>
        </ul>
      </li>
      <li> <a href="pages.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">الصفحات</span></a> </li>
      <li> <a href="blog_category.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">أقسام المقالات</span></a> </li>
      <li> <a href="blog.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">الأخبار والمقالات</span></a> </li>
      <? if($_SESSION['insert_id'] == '1') { ?>
      <li> <a href="institutes.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">المعاهد</span></a> </li>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">الدبلومات</span></a>
        <ul>
          <li> <a href="diploma.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">اقسام الدبلوم</span></a> </li>
          <li> <a tabindex="-1" href="diploma_area.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">مجالات الدبلوم</span></a> </li>
          <li> <a tabindex="-1" href="diploma_course.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المقررات الدراسية</span></a> </li>
        </ul>
      </li>
      <? } ?>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">البرامج</span></a>
        <ul>
          <li> <a tabindex="-1" href="event_category.php?do=show&type=programs"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">أقسام البرامج</span></a> </li>
          <li> <a tabindex="-1" href="programs.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">ادارة البرامج</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=program&case_register=wait"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المتقدمين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=program&case_register=acceptable"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المقبولين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=program&case_register=unacceptable"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المرفوضين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=program&case_register=winners"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الفائزين</span></a> </li>
        </ul>
      </li>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">المسابقات</span></a>
        <ul>
          <li> <a tabindex="-1" href="event_category.php?do=show&type=competitions"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">أقسام المسابقات</span></a> </li>
          <li> <a tabindex="-1" href="competitions.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">ادارة المسابقات</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=competition&case_register=wait"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المتقدمين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=competition&case_register=acceptable"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المقبولين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=competition&case_register=unacceptable"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">المرفوضين</span></a> </li>
          <li> <a tabindex="-1" href="students.php?do=show&type=competition&case_register=winners"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الفائزين</span></a> </li>
        </ul>
      </li>
      <li> <a href="library.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">المكتبات</span></a> </li>
      <li> <a href="slideshow.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">السلايد</span></a> </li>
      <? if($_SESSION['insert_id'] == '1') { ?>
      <li> <a href="partners.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">شركاؤنا</span></a> </li>
      <? } ?>
      <? if($_SESSION['insert_id'] == '1') { ?>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">القوائم المسندلة</span></a>
        <ul>
          <li> <a tabindex="-1" href="supervision_centers.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">مراكز الأشراف</span></a> </li>
          <li> <a tabindex="-1" href="types_diploma.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">أنواع الدبلومات</span></a> </li>
          <li> <a tabindex="-1" href="accommodation_type.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">نوع السكن </span></a> </li>
          <li> <a tabindex="-1" href="residential_neighborhoods.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الأحياء السكنية </span></a> </li>
          <li> <a tabindex="-1" href="contact_menu.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">اقسام نموذج اتصل بنا </span></a> </li>
        </ul>
      </li>
      <? } ?>
      <? if($_SESSION['insert_id'] == '1') { ?>
      <li class="mm-dropdown"> <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">ادارة الأعضاء</span></a>
        <ul>
          <li> <a tabindex="-1" href="group_users.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">مجموعات الاعضاء</span></a> </li>
          <li> <a tabindex="-1" href="users.php?do=show"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">الأعضاء</span></a> </li>
        </ul>
      </li>
      <? } ?>
      <li> <a href="students.php?do=show"><i class="menu-icon fa fa-cog"></i><span class="mm-text">الطلاب</span></a> </li>
    </ul>
  </div>
</div>
