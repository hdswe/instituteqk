<?
    require ("../include/db.class.php");
    require ("../include/config.php");
    require ("../include/function.php");
    require ("../include/resize.php");
	if($_SESSION['admin'] != 'yes') {
		header('Location: login.php');
	}

#############################################################
# Add
#############################################################

    if(isset($_POST['btnadd'])) {
		$data['first_name']			= trim($_POST['first_name']);
		$data['group_id']			= trim($_POST['group_id']);
		$data['username']			= trim($_POST['username']);
		$data['password']			= trim($_POST['password']);
		if($_GET['type'] == 'employee'){
		$data['to_follow']			= trim($_POST['to_follow']);
		$data['group_id']			= $_POST['group_id'];
		$data['institutes_id']		= trim($_POST['institutes_id']);
		}
		
		$insert						= $pdo->pdoInsUpd('users', $data);
		if($_GET['type'] == 'employee'){
		header('Location: ?do=show&institute='.$_GET['institute'].'&process=successfully');
		} else {
		header('Location: ?do=show&process=successfully');
		}
    }

#############################################################
# Show Pages
#############################################################

    if($_GET['do'] == 'edit'){
        $sql = "SELECT * FROM `users` where id=:id";
        $data[id] = $_GET['id'];
        $result = $pdo->pdoGetRow($sql, $data);
    }
	
#############################################################
# Edit Pages
#############################################################

    if(isset($_POST['btnedit'])) {
		$data['first_name']			= trim($_POST['first_name']);
		$data['group_id']			= trim($_POST['group_id']);
		$data['username']			= trim($_POST['username']);
		$data['password']			= trim($_POST['password']);
		$where[id] 					= $_GET['id'];
		$update 					= $pdo->pdoInsUpd('users', $data, 'update', $where);
		header('Location: ?do=show&process=successfully');
    }

#############################################################
# Delete Pages
#############################################################

	if(isset($_GET['del'])){
        $sql 		= "DELETE FROM `users` WHERE `id`=:id";
        $data[id] 	= $_GET['del'];
        $delete 	= $pdo->pdoExecute($sql, $data);
		header('Location: ?do=show&process=successfully');
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
			<h1>إدارة الأعضاء</h1>
		</div> <!-- / .page-header -->

    <?
        $do = $_GET["do"];
        switch($do)
        {
        case "show":
        include("template/users/show.php");
        break;
        case "add":
        include("template/users/add.php");
        break;
        case "edit":
        include("template/users/edit.php");
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