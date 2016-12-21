<?
 include('header.php');
 
	if($_GET['seo_link'] != NULL){
		$sql_pg = "SELECT * FROM `pages` WHERE `seo_link` LIKE '".$_GET['seo_link']."'";
        $result_pg = $pdo->pdoGetRow($sql_pg);
		
/*		$sql = "SELECT * FROM `institutes` WHERE id=".$result_pg['insert_id']."";
        $result = $pdo->pdoGetRow($sql, $data);
		$institute_id = $result['user_id'];
		$_SESSION['institute_name'] = $result['title'];
*/
	} else { die(); }

	if($result_pg['title'] == "الدبلومات") { header('Location: '.$subdomain_url.'/diploma.php'); }
	if($result_pg['title'] == "البرامج") { header('Location: '.$subdomain_url.'/programs.php'); }
	if($result_pg['title'] == "المسابقات") { header('Location: '.$subdomain_url.'/competitions.php'); }
	// library
	if($result_pg['title'] == "المكتبة الإدارية") { header('Location: '.$subdomain_url.'/library.php?id=1'); }
	if($result_pg['title'] == "المكتبة التعليمية والتربوية") { header('Location: '.$subdomain_url.'/library.php?id=2'); }
	if($result_pg['title'] == "المكتبة العامة") { header('Location: '.$subdomain_url.'/library.php?id=3'); }
	if($result_pg['title'] == "البحوث والدراسات") { header('Location: '.$subdomain_url.'/library.php?id=4'); }
	if($result_pg['title'] == "البحوث والدراسات") { header('Location: '.$subdomain_url.'/library.php?id=4'); }
	if($result_pg['title'] == "تنزيل المقررات") { header('Location: '.$subdomain_url.'/library.php?id=5'); }
	
	// contact
	if($result_pg['title'] == "المراسلة") { header('Location: '.$site_url.'/contact.php'); }


?>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2><?= $result_pg['title']; ?></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="sp-main-body">
            <div class="container">
               <?= stripslashes($result_pg['details']); ?>
            </div>
         </section>
         
         <? include('footer.php'); ?>

        