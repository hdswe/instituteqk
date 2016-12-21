
<div class="panel">
  <div class="panel-heading"> <span class="panel-title">حذف البيانات</span> </div>
  <div class="panel-body">

<?
	// Delete Pages//
	echo '<h1>حذف الصفحات</h1><hr>';
	$sql_page = $pdo->pdoGetAll("SELECT * FROM `pages` WHERE `insert_id`=".$_GET['user_id']." ORDER BY `id` DESC");
	foreach($sql_page as $result_page) {
		echo '<p>'.$result_page['title'].'... تم حذفه بنجاح</p><br>';
        $del_page = $pdo->pdoExecute("DELETE FROM `pages` WHERE `insert_id`=".$_GET['user_id']."");
	}
	// Delete Blog//
	echo '<h1>حذف الأخبار</h1><hr>';
	$sql_blog = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE `insert_id`=".$_GET['user_id']." ORDER BY `id` DESC");
	foreach($sql_blog as $result_blog) {
		echo '<p>'.$result_blog['title'].'... تم حذفه بنجاح</p><br>';
        $del_blog = $pdo->pdoExecute("DELETE FROM `blog` WHERE `insert_id`=".$_GET['user_id']."");
	}
	// Delete Footer Menu//
	echo '<h1>حذف القوائم</h1><hr>';
	$sql_footer_menu = $pdo->pdoGetAll("SELECT * FROM `footer_menu` WHERE `insert_id`=".$_GET['user_id']." ORDER BY `id` DESC");
	foreach($sql_footer_menu as $result_footer_menu) {
		echo '<p>'.$result_footer_menu['title'].'... تم حذفه بنجاح</p><br>';
        $del_footer_menu = $pdo->pdoExecute("DELETE FROM `footer_menu` WHERE `insert_id`=".$_GET['user_id']."");
	}
	// Delete files//
	echo '<h1>حذف الملفات</h1><hr>';
	$sql_files = $pdo->pdoGetAll("SELECT * FROM `files` WHERE `insert_id`=".$_GET['user_id']." ORDER BY `id` DESC");
	foreach($sql_files as $result_files) {
		echo '<p>'.$result_files['title'].'... تم حذفه بنجاح</p><br>';
        $del_files = $pdo->pdoExecute("DELETE FROM `files` WHERE `insert_id`=".$_GET['user_id']."");
	}
	
	echo '<meta http-equiv="refresh" content="2;URL=?do=show&process=successfully" />';


?>    


  </div>
</div>
