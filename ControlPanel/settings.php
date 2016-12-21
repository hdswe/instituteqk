<?
    require ("../include/db.class.php");
    require ("../include/config.php");
    require ("../include/function.php");
	if($_SESSION['admin'] != 'yes') {
		header('Location: login.php');
	}


#############################################################
# Show Settings
#############################################################

    if($_GET['do'] == 'edit'){
        $sql = "SELECT * FROM `settings` where id=:id";
        $data[id] = '1';
        $result = $pdo->pdoGetRow($sql, $data);
    }
	
#############################################################
# Show Settings
#############################################################

    if($_GET['do'] == 'edit_institutes'){
        $sql = "SELECT * FROM `users` where id=:id";
        $data[id] = $_SESSION['user_id'];
        $result = $pdo->pdoGetRow($sql, $data);
    }
	
#############################################################
# Edit Settings
#############################################################

    if(isset($_POST['btnedit'])) {
		$data['sitename']		        	= trim($_POST['sitename']);
		$data['site_url']		          	= trim($_POST['site_url']);
		$data['site_email']		          	= trim($_POST['site_email']);
		$data['description']		        = trim($_POST['description']);
		$data['keywords']		        	= trim($_POST['keywords']);
		$data['upload_folder']		        = trim($_POST['upload_folder']);
		$data['types_fileupload']		    = trim($_POST['types_fileupload']);
		$data['theme_color']		        = trim($_POST['theme_color']);
		$data['hed_phone']		        	= trim($_POST['hed_phone']);
		$data['hed_email']		       		= trim($_POST['hed_email']);
		$data['facebook']		        	= trim($_POST['facebook']);
		$data['twitter']		        	= trim($_POST['twitter']);
		$data['youtube']		        	= trim($_POST['youtube']);
		$data['instagram']		        	= trim($_POST['instagram']);
		$data['googleplus']		        	= trim($_POST['googleplus']);
		$data['flickr']		        		= trim($_POST['flickr']);
		$data['contact_form_email']			= trim($_POST['contact_form_email']);
		$data['contact_form_details']		= trim($_POST['contact_form_details']);
		$where[id]							= '1';
		$update 							= $pdo->pdoInsUpd('settings', $data, 'update', $where);
		header('Location: ?do=edit&process=successfully');
    }
#############################################################
# Edit Settings
#############################################################

    if(isset($_POST['btnedit_ins'])) {
		if($_POST['password'] != ''){
			$pass = $_POST['password'];
		} else { $pass = $_POST['hdn_password']; }
		$data['sitename']		        	= trim($_POST['sitename']);
		$data['description']		        = trim($_POST['description']);
		$data['keywords']		        	= trim($_POST['keywords']);
		$data['hed_phone']		        	= trim($_POST['hed_phone']);
		$data['hed_email']		       		= trim($_POST['hed_email']);
		$data['facebook']		        	= trim($_POST['facebook']);
		$data['twitter']		        	= trim($_POST['twitter']);
		$data['youtube']		        	= trim($_POST['youtube']);
		$data['instagram']		        	= trim($_POST['instagram']);
		$data['googleplus']		        	= trim($_POST['googleplus']);
		$data['flickr']		        		= trim($_POST['flickr']);
		$data['contact_form_email']			= trim($_POST['contact_form_email']);
		$data['contact_form_details']		= trim($_POST['contact_form_details']);
		$data['password']		        	= $pass;
		$where[id]							= $_SESSION['user_id'];
		$update 							= $pdo->pdoInsUpd('users', $data, 'update', $where);
		header('Location: ?do=edit_institutes&process=successfully');
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
			<h1>الاعددات</h1>
		</div> <!-- / .page-header -->

    <?
        $do = $_GET["do"];
        switch($do)
        {
        case "edit":
        include("template/settings/edit.php");
        break;
        case "edit_institutes":
        include("template/settings/edit_institutes.php");
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
<script src="assets/tinymce/tinymce.min.js"></script>

<script>
tinymce.init({
    selector: "textarea#contact_form_details",
    theme: "modern",
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>

</body>
</html>