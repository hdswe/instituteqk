<?
 include('header.php');

?>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2>الدبلومات</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="sp-main-body" class="page-class">
            <div class="container">
			<? if($_GET['do'] == 'details') { ?>
				<div class="row">
                 <div class="col-md-12">
				<?
				$sql_details = $pdo->pdoGetAll("SELECT * FROM `pages` WHERE `diploma_id` = ".$_GET['id']."");
				foreach($sql_details as $result_details) {
				?>
				<h2><?= stripslashes($result_details['title']); ?></h2>
                <?= stripslashes($result_details['details']); ?>
                <hr>
               <? } ?>
               </div>
               <div class="col-md-4"><a href="study_plan.php?id=<?= $result_details['id'] ?>" class="btn btn-primary btn-block btn-lg">الخطة الدراسية</a></div>
               <div class="col-md-4"><a href="register.php" class="btn btn-primary btn-block btn-lg">التسجيل في الدبلوم</a></div>
			   </div>
			<? } ?>
            
            
			<? if(!isset($_GET['do'])) { ?>
               <div class="row">
				<?
				$sql_diploma = $pdo->pdoGetAll("SELECT * FROM `diploma` ORDER BY `id` DESC");
				foreach($sql_diploma as $result_diploma) {
				?>
               <div class="col-md-4"><a href="?do=details&id=<?= $result_diploma['id'] ?>" class="btn btn-primary btn-block btn-lg"><?= $result_diploma['title'] ?></a></div>
               <? } ?>
			   </div>
			<? } ?>
            </div>
         </section>
         
         <? include('footer.php'); ?>

        