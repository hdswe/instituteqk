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
		if($_FILES['image']['name']) {
		list($file,$error) = upload('image');
			$srcFile = $upload_folder . $file;
			$destFile_orignal = $upload_folder . $file;
            $resizeObja = new resize($srcFile);
            $resizeObja -> resizeImage(600, 'landscape');		
            $resizeObja -> saveImage($destFile_orignal, 100);
		}
		$data['title']				= trim($_POST['title']);
		$data['menu_id']			= trim($_POST['menu_id']);
		$data['details']			= trim($_POST['details']);
		$data['img']				= $file;
		$seo_link 						= trim($_POST['seo_link']);
		$title 							= trim($_POST['title']);
		if($_POST['seo_link'] == '') { $new_seo_link = str_replace(' ', '_', $title); } else { $new_seo_link = str_replace(' ', '_', $seo_link); }
		$data['seo_link']				= $new_seo_link;
		$data['description']		= trim($_POST['description']);
		$data['keywords']			= trim($_POST['keywords']);
		$data['insert_id']				= $_SESSION['insert_id'];
		$data['program_id']				= $_GET['program_id'];
		$data['diploma_id']				= $_GET['diploma_id'];
		$data['competition_id']			= $_GET['competition_id'];
		$insert						= $pdo->pdoInsUpd('pages', $data);
		if($_GET['program_id'] != '') {
		header('Location: ?do=programs_page&program_id='.$_GET['program_id'].'&process=successfully');
		} elseif($_GET['diploma_id'] != '') {
		header('Location: ?do=diploma_page&diploma_id='.$_GET['diploma_id'].'&process=successfully');
		} elseif($_GET['competition_id'] != '') {
		header('Location: ?do=competitions_page&competition_id='.$_GET['competition_id'].'&process=successfully');
		} else{
		header('Location: ?do=show&process=successfully');
    }
	}

#############################################################
# Show Pages
#############################################################

    if($_GET['do'] == 'edit'){
        $sql = "SELECT * FROM `pages` where id=:id";
        $data[id] = $_GET['id'];
        $result = $pdo->pdoGetRow($sql, $data);
    }
	
#############################################################
# Edit Pages
#############################################################

    if(isset($_POST['btnedit'])) {
		if($_FILES['image']['name']) {
		list($file,$error) = upload('image');
			$srcFile = $upload_folder . $file;
			$destFile_orignal = $upload_folder . $file;
            $resizeObja = new resize($srcFile);
            $resizeObja -> resizeImage(450, 'landscape');		
            $resizeObja -> saveImage($destFile_orignal, 100);
		} else { $file = $_POST['hdn_image']; }
		$data['title']				= trim($_POST['title']);
		$data['menu_id']			= trim($_POST['menu_id']);
		$data['details']			= $_POST['details'];
		$data['img']				= $file;
		$seo_link 					= trim($_POST['seo_link']);
		$data['seo_link']			= str_replace(' ', '_', $seo_link);
		$data['description']		= trim($_POST['description']);
		$data['keywords']			= trim($_POST['keywords']);
		$where[id] 					= $_GET['id'];
		$update 					= $pdo->pdoInsUpd('pages', $data, 'update', $where);
		header('Location: ?do=show&process=successfully');
    }

#############################################################
# Delete Pages
#############################################################

	if(isset($_GET['del'])){
        $sql 		= "DELETE FROM `pages` WHERE `id`=:id";
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
			<h1>إدارة الصفحات</h1>
		</div> <!-- / .page-header -->

    <?
        $do = $_GET["do"];
        switch($do)
        {
        case "show":
        include("template/pages/show.php");
        break;
        case "add":
        include("template/pages/add.php");
        break;
        case "edit":
        include("template/pages/edit.php");
        break;
        case "programs_page":
        include("template/pages/programs_page.php");
        break;
        case "competitions_page":
        include("template/pages/competitions_page.php");
        break;
        case "diploma_page":
        include("template/pages/diploma_page.php");
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
    selector: "textarea#details",
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