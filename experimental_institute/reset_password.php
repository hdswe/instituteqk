<?
	ob_start();
	include('header.php');

#############################################################
# Login Users
#############################################################

    if(isset($_POST['btn-send'])) {
        $sql = "SELECT * FROM `users` WHERE `email` LIKE '".$_POST['email']."'";
    	$rowCount = $pdo->pdoExecute($sql);
   		if($pdo->pdoRowCount($rowCount) == '1') {
			$result = $pdo->pdoGetRow($sql,$data);
			
			$to      = $result['email'];
			$subject = 'كلمة المرور الخاصه بك';
			$message = $result['password'];
			$headers = 'From: '.$site_email.'' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
			
			mail($to, $subject, $message, $headers);

			header('Location: ?process=succes-send');
		} else {
			header('Location: ?process=eroor-email');
		}
	}

?>

<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title">
          <div class="container">
            <h2>دخول الطالبات</h2>
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
          <? if ($_GET['process'] == 'succes-send') { ?>
          <div class="alert alert-success" role="alert">
          تم ارسال كلمة المرور الى البريد الالكتروني يرجى مراجعته
          </div>
		<? } else {
			if ($_GET['process'] == 'eroor-email') { ?>
                      <div class="alert alert-danger" role="alert">هذا البريد غير مسجل لدينا </div>

            
				
			<? }
			 ?>
            <form method="post" class="form-horizontal" >
              <fieldset>
                
                <!-- Form Name -->
                <legend>بيانات عامة</legend>
                <!-- Text input-->
                <div class="control-group col-md-12">
                  <label class="control-label" for="password">البريد الالكتروني</label>
                  <div class="controls">
                    <input id="email" name="email" class="form-control" type="text" placeholder=""  required>
                  </div>
                </div>
                
                
                
              </fieldset>
              <fieldset>
                
                <div class="control-group col-md-12">

<input name="btn-send" type="submit" class="btn btn-primary" id="btn-send" value="ارسال">
                </div>
              </fieldset>
            </form>
			<? } ?>
            
            
           
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<? include('footer.php'); ?>
      <script src="<?= $site_url ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>

<? ob_flush(); ?>