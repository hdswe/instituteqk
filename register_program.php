<?
ob_start();
	include('header.php');

#############################################################
# Add Users
#############################################################
    if(isset($_POST['btnregister'])) {
		if($_GET['do'] == 'program'){
			// Insert Family
			$i								= 0;
			$events_programs 				= $_POST['events_programs'];
			foreach ($events_programs as $events_programs_post){
				$data['events_programs']	= $events_programs_post;
				$data['event_id']			= $_GET['id'];
				$data['user_id']			= $_SESSION['user_id'];
				$data['type_event']			= 'programs';
				$insert						= $pdo->pdoInsUpd('register_events', $data);
				$i++;
			}
			header('Location: register_program.php?process=successfully');

		}
		if($_GET['do'] == 'competition') {
			$data['event_id']			= $_POST['competition_id'];
			$data['user_id']			= $_SESSION['user_id'];
			$data['type_event']			= 'competitions';
			$insert						= $pdo->pdoInsUpd('register_events', $data);
			header('Location: register_program.php?process=successfully');
			}
	}

?>
      <link rel="stylesheet" href="<?= $site_url ?>/frontend/css/legacy.css" type="text/css" />

<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title">
          <div class="container">
            <h2>تسجيل طالب</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sp-main-body">
  <div class="container">
    <div class="row">
      <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
          <div id="system-message-container"> </div>
          <div class="row">
            <? if ($_GET['process'] == 'successfully') { ?>
            <div class="alert alert-success" role="alert"> تمت عملية التسجيل بنجاح </div>
            <? } else ?>
            <? if(isset($msg)) { 
			echo '<div class="alert alert-warning" role="alert">'.$msg.'</div>';
			} 
			?>
            <form method="post" class="form-horizontal" id="register-from">
              <fieldset>
                
                <!-- Form Name -->
                <legend>بيانات البرنامج</legend>
                <? if($_GET['do'] == 'program'){ ?>
                <div class="control-group col-md-6">
                  <label class="control-label" for="diploma_id">فعاليات البرنامج</label>
                  <div class="controls">
                              <?
            $sql = $pdo->pdoGetAll("SELECT * FROM `events_programs` WHERE program_id=".$_GET['id']." ORDER BY `id` DESC");
            foreach($sql as $result) {
		?>

                  <label>
                    <input name="events_programs[]" type="checkbox" class="px" id="events_programs[]" value="<?= $result['id'] ?>">
                    <span class="lbl">
                    <?= $result['title'] ?>
                    </span> 
                    </label><br>

                    <? } ?>
                    
                    
                  </div>
                </div>
                <? } ?>
                <? if($_GET['do'] == 'competition'){ ?>
                <div class="control-group col-md-6">
                  <label class="control-label" for="diploma_id">المسابقة</label>
                  <div class="controls">
                    <select id="competition_id" name="competition_id" class="form-control" required>
                      <option value="0">---أختر المسابقة---</option>
                      <?
	$sql_competition = $pdo->pdoGetAll("SELECT * FROM `competitions` ORDER BY `id` DESC");
	foreach($sql_competition as $result_competition) {
?>
                      <option value="<?= $result_competition['id'] ?>" <? if($_POST['competition_id'] == $result_competition['id']) { echo 'selected'; } ?>>
                      <?= $result_competition['title'] ?>
                      </option>
                      <? } ?>
                    </select>
                  </div>
                </div>
                <? } ?>
                
                
              </fieldset>
              <fieldset>
                
                
                <div class="control-group col-md-12">
                  <input name="btnregister" type="submit" class="btn btn-primary" id="btnregister" value="تسجيل">
                </div>
              </fieldset>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#graduation_date, #birthday" ).datepicker();
  });
  </script>



<? include('footer.php'); ?>
<? ob_flush(); ?>