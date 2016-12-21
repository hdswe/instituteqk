	<?
    require ("../include/db.class.php");
    require ("../include/config.php");
    require ("../include/function.php");
	if($_SESSION['admin'] != 'yes') {
		header('Location: login.php');
	}

#############################################################
# Add
#############################################################

    if(isset($_POST['btnadd'])) {
		$select_check_ins = $pdo->pdoExecute("SELECT * FROM `institutes` WHERE `seo_link` LIKE '".$_POST['seo_link']."'");
		echo $pdo->pdoRowCount($select_check_ins);
		if($pdo->pdoRowCount($select_check_ins) == '1') { 
			header('Location: ?do=add&process=eroor&title='.$_POST['title'].'&seo_link='.$_POST['seo_link'].'');
		} else {

		$data['title']				= trim($_POST['title']);
		$data['seo_link']			= trim($_POST['seo_link']);
		$data['user_id']			= trim($_POST['user_id']);
		$insert						= $pdo->pdoInsUpd('institutes', $data);
		
		//Insert Theme
//		recurse_copy('../original_institute','../'.$_POST['seo_link']);
			$current = file_get_contents('../.htaccess');
			$siteUrl=$_POST['seo_link'];
			$current .= "RewriteRule \"^$siteUrl$\"  \"index.php?institutes=$siteUrl\" \n";
			file_put_contents('../.htaccess',$current);
		$data_th['insert_id']			= $_POST['user_id'];
		$insert_th						= $pdo->pdoInsUpd('themes', $data_th);
		
		//Insert Page Menu 1
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '1';
		$data_mn['title'] 		= 'تعريف يإدارة المعاهد وتأسيسها'; 		$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '1';
		$data_mn['title'] 		= 'الرؤية والرسالة والأهداف'; 			$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '1';
		$data_mn['title'] 		= 'الهيكل الإداري'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '1';
		$data_mn['title'] 		= 'اللوائح والأنظمة'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		//Insert Page Menu 2
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '2';
		$data_mn['title'] 		= 'إدارة الشؤون التعليمية'; 				$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '2';
		$data_mn['title'] 		= 'قسم شؤون معاهد المعلمات'; 			$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		//Insert Page Menu 3
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '3';
		$data_mn['title'] 		= 'الدبلومات'; 						$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '3';
		$data_mn['title'] 		= 'البرامج'; 						$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '3';
		$data_mn['title'] 		= 'المسابقات'; 						$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		//Insert Page Menu 4
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'الإدارة (الشؤون التعليمية)';			$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'المعاهد'; 						$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'خدمات  الموظفين'; 				$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'خدمات الطلاب'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'اتصالات ادارية'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '4';
		$data_mn['title'] 		= 'التوظيف والتطوع'; 				$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);
		
		//Insert Page Menu 5
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '5';
		$data_mn['title'] 		= 'المكتبة الإدارية'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '5';
		$data_mn['title'] 		= 'المكتبة التعليمية والتربوية'; 			$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '5';
		$data_mn['title'] 		= 'المكتبة العامة'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '5';
		$data_mn['title'] 		= 'البحوث والدراسات'; 				$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '5';
		$data_mn['title'] 		= 'تنزيل المقررات'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);
		
		//Insert Page Menu 6
		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '7';
		$data_mn['title'] 		= 'أرقام التواصل'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '7';
		$data_mn['title'] 		= 'الموقع الجغرافي'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '7';
		$data_mn['title'] 		= 'المراسلة'; 						$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		$data_mn['insert_id'] 	= $_POST['user_id']; 			$data_mn['menu_id'] 	= '7';
		$data_mn['title'] 		= 'الدعم والتبرع'; 					$data_mn['seo_link']	= GeraHash(9);
		$insert_mn				= $pdo->pdoInsUpd('pages', $data_mn);

		header('Location: ?do=show&process=successfully');
		}
    }

#############################################################
# Show
#############################################################

    if($_GET['do'] == 'edit'){
        $sql = "SELECT * FROM `institutes` where id=:id";
        $data[id] = $_GET['id'];
        $result = $pdo->pdoGetRow($sql, $data);
    }
	
#############################################################
# Edit
#############################################################

    if(isset($_POST['btnedit'])) {
		$data['title']					= trim($_POST['title']);
		$data['seo_link']				= trim($_POST['seo_link']);
		$data['user_id']				= trim($_POST['user_id']);
		$where[id] 						= $_GET['id'];
		$update 						= $pdo->pdoInsUpd('institutes', $data, 'update', $where);
		header('Location: ?do=show&process=successfully');
    }

#############################################################
# Delete
#############################################################

	if(isset($_GET['del'])){
        $sql 		= "DELETE FROM `institutes` WHERE `id`=:id";
        $data[id] 	= $_GET['del'];
        $delete 	= $pdo->pdoExecute($sql, $data);
		header('Location: ?do=del_data&user_id='.$_GET['user_id'].'');
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
			<h1>إدارة المعاهد</h1>
		</div> <!-- / .page-header -->

    <?
        $do = $_GET["do"];
        switch($do)
        {
        case "show":
        include("template/institutes/show.php");
        break;
        case "add":
        include("template/institutes/add.php");
        break;
        case "edit":
        include("template/institutes/edit.php");
        break;
        case "del_data":
        include("template/institutes/del_data.php");
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