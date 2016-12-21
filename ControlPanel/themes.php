<?
    require ("../include/db.class.php");
    require ("../include/config.php");
    require ("../include/function.php");
    require ("../include/resize.php");
	if($_SESSION['admin'] != 'yes') {
		header('Location: login.php');
	}


#############################################################
# Show
#############################################################

        $sql = "SELECT * FROM `themes` where insert_id=:insert_id";
        $data[insert_id] = $_SESSION['insert_id'];
        $result = $pdo->pdoGetRow($sql, $data);
	
#############################################################
# Edit Logo
#############################################################
    if(isset($_POST['btnedit_logo'])) {
		
		if($_FILES['logo_header']['name']) {
		list($logo_header,$error) = upload('logo_header');
/*			$srcFile = $upload_folder . $logo_header;
			$destFile_orignal = $upload_folder . $logo_header;
            $resizeObja = new resize($srcFile);
            $resizeObja -> resizeImage(120, 'landscape');		
            $resizeObja -> saveImage($destFile_orignal, 100);

*/		} else { $logo_header = $_POST['hdn_image_logo_header']; }

		if($_FILES['logo_footer']['name']) {
		list($logo_footer,$error) = upload('logo_footer');
/*			$srcFile = $upload_folder . $logo_footer;
			$destFile_orignal = $upload_folder . $logo_footer;
            $resizeObja = new resize($srcFile);
            $resizeObja -> resizeImage(120, 'landscape');		
            $resizeObja -> saveImage($destFile_orignal, 100);
*/		} else { $logo_footer = $_POST['hdn_image_logo_footer']; }
		$data['logo_header']					= $logo_header;
		$data['logo_footer']					= $logo_footer;
		$where[insert_id]			= $_SESSION['insert_id'];
		$update						= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=logo&process=successfully');
    }
	
    if(isset($_POST['btndel_logo'])) {
		$data['logo_header']					= '';
		$data['logo_footer']					= '';
		$where[insert_id]			= $_SESSION['insert_id'];
		$update						= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=logo&process=successfully');
    }
	
	
	
#############################################################
# Edit Color
#############################################################
    if(isset($_POST['btnedit_color'])) {
		
		$data['navbar_color']					= $_POST['navbar_color'];
		$data['navbar_dropdown_color']			= $_POST['navbar_dropdown_color'];
		$data['navbar_dropdown_color_font']		= $_POST['navbar_dropdown_color_font'];
		$data['navbar_dropdown_color_hover']	= $_POST['navbar_dropdown_color_hover'];
		$data['countdown_bg_color']				= $_POST['countdown_bg_color'];
		$data['footer_color']					= $_POST['footer_color'];
		$data['footer_bottom_color']			= $_POST['footer_bottom_color'];
		$data['slidebar_color']					= $_POST['slidebar_color'];
		$data['breadcrumb_color']				= $_POST['breadcrumb_color'];
		
		$where[insert_id]			= $_SESSION['insert_id'];
		$update						= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=color&process=successfully');
    }
	
#############################################################
# Edit Calendar
#############################################################
    if(isset($_POST['btnedit_calendar'])) {
		
		if($_FILES['calendar_img']['name']) {
		list($calendar_img,$error) = upload('calendar_img');
		} else { $calendar_img = $_POST['hdn_calendar_img']; }

		$data['calendar_text']		= $_POST['calendar_text'];
		$data['calendar_link']		= $_POST['calendar_link'];
		$data['calendar_img']		= $calendar_img;
		$where[insert_id]			= $_SESSION['insert_id'];
		$update						= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=calendar&process=successfully');
    }
	
#############################################################
# Edit Event
#############################################################
    if(isset($_POST['btnedit_event'])) {
		$data['event_text']			= $_POST['event_text'];
		$data['event_link']			= $_POST['event_link'];
		$where[insert_id]			= $_SESSION['insert_id'];
		$update						= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=event&process=successfully');
    }
#############################################################
# Edit Event Countdown
#############################################################
    if(isset($_POST['btnedit_event_countdown'])) {
		$data['event_countdown_text']			= $_POST['event_countdown_text'];
		$data['event_countdown_date']			= $_POST['event_countdown_date'];
		$where[insert_id]						= $_SESSION['insert_id'];
		$update									= $pdo->pdoInsUpd('themes', $data, 'update', $where);
		header('Location: ?do=countdown&process=successfully');
    }
	


?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?= $site_name ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Open Sans font from Google CDN -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

	<!-- LanderApp's stylesheets -->
	<link href="assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
		<script src="assets/javascripts/ie.min.js"></script>
	<![endif]-->

</head>

<body class="<?= $theme_color ?> main-menu-animated right-to-left">

<script>var init = [];</script>

<div id="main-wrapper">

<? include('right.php') ?>

	<div id="content-wrapper">

		<div class="page-header">
			<h1>إدارة القالب</h1>
		</div> <!-- / .page-header -->

    <?
        $do = $_GET["do"];
        switch($do)
        {
        case "color":
        include("template/themes/color.php");
        break;
        case "logo":
        include("template/themes/logo.php");
        break;
        case "calendar":
        include("template/themes/calendar.php");
        break;
        case "event":
        include("template/themes/event.php");
        break;
        case "countdown":
        include("template/themes/countdown.php");
        break;
		
		
        }
    
    ?>
		
		

	</div> <!-- / #content-wrapper -->
	<div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
	<script type="text/javascript"> window.jQuery || document.write('<script src="assets/javascripts/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
	<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- LanderApp's javascripts -->
<script src="assets/javascripts/bootstrap.min.js"></script>
<script src="assets/javascripts/landerapp.min.js"></script>

<script type="text/javascript">
	init.push(function () {
		// Javascript code here
	})
	window.LanderApp.start(init);
</script>

</body>
</html>