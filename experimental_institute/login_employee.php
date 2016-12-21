<?
	ob_start();
	include('header.php');

#############################################################
# Login Users
#############################################################

    if(isset($_POST['btn-login'])) {
        $sql = "SELECT * FROM `users` where username=:username AND password=:password";
        $data[username] = $_POST['username'];
        $data[password] = $_POST['password'];
    	$rowCount = $pdo->pdoExecute($sql,$data);
   		if($pdo->pdoRowCount($rowCount) == '1') {
			$result = $pdo->pdoGetRow($sql,$data);
			$_SESSION['user_id'] = $result['id'];
			header('Location: ?process=succes-login');
		} else {
			header('Location: ?process=eroor-login');
		}
	}

?>

<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title">
          <div class="container">
            <h2>دخول الموظف</h2>
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
          <? if ($_GET['process'] == 'succes-login') { ?>
          <div class="alert alert-success" role="alert">
          تم تسجيل دخولك بنجاح
          <br>
			<a href="account.php">حسابي</a>
          </div>
          
		<? } else {
			if ($_GET['process'] == 'eroor-login') { ?>
                      <div class="alert alert-danger" role="alert">
          يوجد خطأ في البيانات يرجى التحقق<br>
لاستعادة كلمة المرور <a href="reset_password.php">اضغط هنا</a> </div>

            
				
			<? }
			 ?>
            <form method="post" class="form-horizontal" >
              <fieldset>
                
                <!-- Form Name -->
                <legend>بيانات الدخول</legend>
                <!-- Text input-->
                <div class="control-group col-md-12">
                  <label class="control-label" for="password">اسم المستخدم</label>
                  <div class="controls">
                    <input id="username" name="username" class="form-control" type="text" placeholder=""  required>
                  </div>
                </div>
                
                <div class="control-group col-md-12">
                  <label class="control-label" for="password">كلمة المرور</label>
                  <div class="controls">
                    <input id="password" name="password" class="form-control" type="password" placeholder=""  required>
                  </div>
                </div>
                
              </fieldset>
              <fieldset>
                
                <div class="control-group col-md-12">

<input name="btn-login" type="submit" class="btn btn-primary" id="btn-login" value="دخول">
                </div>
                <p><a href="reset_password.php">هل نسيت كلمة المرور ؟</a></p>
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