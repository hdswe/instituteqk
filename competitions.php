<?
 include('header.php');

?>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2>المسابقات</h2>
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
				$sql_details = $pdo->pdoGetAll("SELECT * FROM `pages` WHERE `competition_id` = ".$_GET['id']."");
				foreach($sql_details as $result_details) {
				?>
				<h2><?= $result_details['title'] ?></h2>
                <?= $result_details['details'] ?>
                <hr>
               <? } ?>
               </div>
               <? if(isset($_SESSION['user_id'])){ 
               	echo'<div class="col-md-4"><a href="register_program.php?do=competition" class="btn btn-primary btn-block btn-lg">التسجيل في المسابقة</a></div>'; } else {
				echo'<div class="col-md-4"><a href="register.php?do=program&id='.$_GET['id'].'" class="btn btn-primary btn-block btn-lg">التسجيل في المسابقة</a></div>';  
			   }
			   ?>
               <div class="col-md-4"><a href="candidate_competitions.php?id=<?= $_GET['id'] ?>&case_register=acceptable" class="btn btn-primary btn-block btn-lg">اسماء المقبولين</a></div>
               <div class="col-md-4"><a href="candidate_competitions.php?id=<?= $_GET['id'] ?>&case_register=winners" class="btn btn-primary btn-block btn-lg">اسماء الفائزين</a></div>
			   </div>
			<? } ?>
            
            
			<? if($_GET['do'] == 'cat' && $_GET['do'] != 'details') { ?>
               <div class="row">
				<?
				$sql_competition = $pdo->pdoGetAll("SELECT * FROM `competitions` WHERE `category_id` = ".$_GET['id']." ORDER BY `id` DESC");
				foreach($sql_competition as $result_competition) {
				?>
               <div class="col-md-4"><a href="?do=details&id=<?= $result_competition['id'] ?>" class="btn btn-primary btn-block btn-lg"><?= $result_competition['title'] ?></a></div>
               <? } ?>
			   </div>
			<? } ?>
            
            
		<? if($_GET['do'] != 'cat' && $_GET['do'] != 'details') { ?>
               <div class="row">
				<?
				$sql_programs = $pdo->pdoGetAll("SELECT * FROM `event_category` WHERE `event_type` = 'competitions' ORDER BY `id` DESC");
				foreach($sql_programs as $result_programs) {
				?>
               <div class="col-md-4"><a href="?do=cat&id=<?= $result_programs['id'] ?>" class="btn btn-primary btn-block btn-lg"><?= $result_programs['title'] ?></a></div>
               <? } ?>
			   </div>
			<? } ?>




            </div>
         </section>
         
         <? include('footer.php'); ?>

        