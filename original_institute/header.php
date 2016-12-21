<?
    require ("../include/db.class.php");
    require ("../include/config.php");
    require ("../include/function.php");

	$result_settings = $pdo->pdoGetRow("SELECT * FROM `users` WHERE  `id` =".$institute_id."");

?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
   <head>
      <!-- meta -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="generator" content="" />
      <!-- title -->
      <title><?= $site_name ?></title>
      <!-- favicon -->
      <link href="<?= $url_file ?>/frontend/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
      <!-- blog category -->
      <link rel="stylesheet" href="<?= $url_file ?>/frontend/css/blog-category.css" type="text/css" />
      <!-- pagebuilder css -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/com_sppagebuilder/assets/css/sppagebuilder.css" type="text/css" />
      <!-- revolution slider css -->
      <link rel="stylesheet" href="<?= $url_file ?>/media/com_uniterevolution2/assets/rs-plugin/css/settings.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/media/com_uniterevolution2/assets/rs-plugin/css/dynamic-captions.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/media/com_uniterevolution2/assets/rs-plugin/css/static-captions.css" type="text/css" />
      <!-- countdown css  -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/sp_countdown/assets/css/sp_countdown.css" type="text/css" />
      <!-- donation -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/com_cmdonation/assets/css/pure-min.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/com_cmdonation/assets/css/pure-responsive-min.css" type="text/css" />
      <!-- accordion css -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/lan_k2accordion/frontend/css/styles.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/lan_k2accordion/frontend/css/responsive.css" type="text/css" />
      <!-- vertical tab css -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/lan_vertical_tab/frontend/css/styles.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/lan_vertical_tab/frontend/css/responsive.css" type="text/css" />
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/news_show_sp2/assets/css/news_show_sp2.css" type="text/css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= $url_file ?>/frontend/css/bootstrap.min.css" type="text/css" />
	  <link rel="stylesheet" href="<?= $url_file ?>/frontend/css/bootstrap-rtl.min.css">
      <link rel="stylesheet" href="<?= $url_file ?>/frontend/css/legacy.css" type="text/css" />
      <!-- font awesome-->
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <!-- font droid arabic kufi-->
      <link rel="stylesheet" href="http://openfontlibrary.org/face/droid-arabic-kufi">
      <!-- main style css -->
      <link rel="stylesheet" href="<?= $url_file ?>/style.css" type="text/css" />
      <!-- preset css -->
      <link rel="stylesheet" href="<?= $url_file ?>/frontend/css/presets/preset1.css" type="text/css" class="preset" />
      <!-- newsletter css -->
      <link rel="stylesheet" href="<?= $url_file ?>/media/com_acymailing/css/module_defaultc032.css" type="text/css" />
      <!-- photo gallery css -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/sp_simple_gallery/scripts/slimbox.css" type="text/css" />
      <!-- twitter css -->
      <link rel="stylesheet" href="<?= $url_file ?>/assets/plugin/sp_tweet/assets/css/sp_tweet.default.css" type="text/css" />
      
      <style>
	  #sp-header, #sp-bottom {
  		background: #<?= $navbar_color ?> !important;
	  }
	  .sp-megamenu-parent .sp-dropdown .sp-dropdown-inner {
  		background: #<?= $navbar_dropdown_color ?> !important;
	  }
	  #sp-bottom {
		background: #<?= $footer_color ?> !important;	  
	 }
	 #sp-footer {
		background: #<?= $footer_bottom_color ?> !important;	  
	 }
	 #lan_countdown.sppb-section{
    	background-color: #<?= $slidebar_color ?> !important;
	}
	.sp-page-title {
	  background: #<?= $breadcrumb_color ?> !important;
	}
	.sp-megamenu-parent .sp-dropdown li.sp-menu-item >a:hover {
 	 background: #<?= $navbar_dropdown_color_hover ?> !important;
	}
	.sp-megamenu-parent .sp-dropdown li.sp-menu-item >a {
 	 background: #<?= $navbar_dropdown_color_font ?> !important;
	}
	div.lan_vertical_timeline .nav-tabs>li .cbp_tmlabel h3, a {
		color: #<?= $font_link_color ?> !important;
	}
	.countdown { background: #<?= $countdown_bg_color ?> !important; }

	  </style>
   </head>
   <body class="site view-page no-layout no-task itemid-437 en-gb ltr  sticky-header layout-fluid">
      <div class="body-innerwrapper"> 
         <!-- start header -->
         <header id="sp-header">
            <div class="container">
               <div class="row">
                  <div id="sp-logo" class="col-xs-8 col-sm-3 col-md-2">
                     <div class="sp-column ">
                        <a class="logo" href="index.php">
                           <h1><img src="<?= $url_file ?>/upload/<?= $logo_header ?>" alt="Grant" width="150" class="sp-default-logo"><img class="sp-retina-logo" src="<?= $site_url ?>/frontend/images/presets/preset1/logo%402x.png" alt="Grant" width="111" height="43"></h1>
                        </a>
                     </div>
                  </div>
                  <div id="sp-menu" class="col-xs-4 col-sm-9 col-md-10">
                     <div class="sp-column ">
                        <div class='sp-megamenu-wrapper'>
                           <ul class="sp-megamenu-parent menu-fade-up hidden-xs">
							<li class="sp-menu-item"><a href="<?= $subdomain_url ?>/index.php">الرئيسية</a></li>
							<?
                            $sql_menu = "SELECT * FROM `menu` WHERE insert_id=1 ORDER BY `order_menu` ASC";
                            $rows_menu = $pdo->pdoGetAll($sql_menu);
                            foreach($rows_menu as $result_menu) {
							$sql_pg = "SELECT * FROM `pages` WHERE menu_id=".$result_menu['id']." AND insert_id=".$institute_id." ORDER BY `id` ASC";
							$rows_pg_exec = $pdo->pdoExecute($sql_pg);
							$rows_pg_count = $pdo->pdoRowCount($rows_pg_exec);
                            ?>
                              <li class="sp-menu-item <? if($rows_pg_count >= 1) { echo 'sp-has-child'; }?>">
                                 <a href="#"><?= $result_menu['title'] ?></a>
                                 <? if($rows_pg_count >= 1) { ?>
                                 <div class="sp-dropdown sp-dropdown-main sp-menu-right" style="width: 240px;">
                                    <div class="sp-dropdown-inner">
                                       <ul class="sp-dropdown-items">
										<?
                                        $rows_pg = $pdo->pdoGetAll($sql_pg);
                                        foreach($rows_pg as $result_pg) {
                                        ?>
                                          <li class="sp-menu-item">
                                          <a href="<?= $subdomain_url ?>/page/<?= $result_pg['seo_link'] ?>"><?= $result_pg['title'] ?></a>
                                          <? if($result_pg['title'] == 'المكتبة الإدارية') { ?>
                                          <li class="sp-menu-item sp-has-child">
                                             <a href="#">الأخبار والمقالات</a>
                                             <div class="sp-dropdown sp-dropdown-sub sp-menu-right" style="width: 240px;">
                                                <div class="sp-dropdown-inner">
                                                   <ul class="sp-dropdown-items">
										<?
                            $sql_blog_category = $pdo->pdoGetAll("SELECT * FROM `blog_category` ORDER BY `id` ASC");
                            foreach($sql_blog_category as $result_blog_category) {
                                        ?>
                                          <li class="sp-menu-item"><a href="<?= $site_url ?>/blog/<?= $result_blog_category['id'] ?>"><?= $result_blog_category['title'] ?></a></li>
                                        <? } ?>
                                                   </ul>
                                                </div>
                                             </div>
                                          </li>
                                          
                                          <? } ?>
                                          
                                          </li>
                                        <? } ?>
                                       </ul>
                                    </div>
                                 </div>
                                 <? } ?>
                              </li>
                            <? } ?>
                            
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header -->
