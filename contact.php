<?
 include('header.php');

	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = $_POST['email']; 
		$to = $contact_form_email; 
		$subject = 'رسالة من الموقع ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'يجب كتابة اسم';
		}
		if (!$_POST['mobile']) {
			$errMobile = 'يجب ادخال رقم هاتف';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'يجب كتابة بريد صحيح';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'قم كتابة رساله';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'الاجابة غير صحيحة';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">شكرا لك تم ارسال رسالتك بنجاح</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}

?>
        <!-- end header --> 
        <!-- start page title -->
        <section id="sp-page-title">
    <div class="row">
            <div id="sp-title" class="col-sm-12 col-md-12">
        <div class="sp-column "></div>
      </div>
          </div>
  </section>
        <!-- end page title --> 
        <!-- start breadcrumbs -->
        <section id="sp-breadcrumbs">
    <div class="container">
            <div class="row">
        <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                <div class="sp-column ">
            <div class="sp-module ">
                    <div class="sp-module-content">
                <div class="lan_page_title"> <span>اتصل بنا</span> </div>
              </div>
                  </div>
          </div>
              </div>
      </div>
          </div>
  </section>
        <!-- end breadcrumbs --> 
        <!-- start main body -->
        <section id="sp-main-body" class="contact-page">
    <div class="row">
            <div id="sp-component" class="col-sm-12 col-md-12">
        <div class="sp-column ">
                <div id="system-message-container"> </div>
                <div id="sp-page-builder" class="sp-page-builder  page-12">
            <div class="page-content">
                    <section class="sppb-section" style="padding:35px 0 25px 0;">
                <div class="sppb-container">
                        <div class="row">
                    <div class="col-md-8">
                            <div class="sppb-addon sppb-addon-text-block lan_title">
                        <h3 class="sppb-addon-title">نموذج الاتصال</h3>
                        <div class="sppb-addon-content"></div>
                      </div>
                      <?= $result ?>
                            <form class="form-horizontal" role="form" method="post" action="">
                        <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">نوع الرسالة</label>
                                <div class="col-sm-10">
                           <select name="type" id="type" class="form-control">
							   <?
                                $sql = $pdo->pdoGetAll("SELECT * FROM `contact_menu` ORDER BY `id` DESC");
                                foreach($sql as $result) {
                                ?>
                             <option value="<?= $result['title'] ?>"><?= $result['title'] ?></option>
                             	<? } ?>
                           </select>
                            </div>
                              </div>
                              <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">الاسم الثلاثي </label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                            <?php echo "<p class='text-danger'>$errName</p>";?> </div>
                              </div>
                              <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">رقم الجوال  </label>
                                <div class="col-sm-10">
                            <input name="mobile" type="text" class="form-control" id="mobile" value="<?php echo htmlspecialchars($_POST['mobile']); ?>">
                            <?php echo "<p class='text-danger'>$errMobile</p>";?> </div>
                              </div>
                        <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">البريد الالكتروني </label>
                                <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                            <?php echo "<p class='text-danger'>$errEmail</p>";?> </div>
                              </div>
                        <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">الرسالة</label>
                                <div class="col-sm-10">
                            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                            <?php echo "<p class='text-danger'>$errMessage</p>";?> </div>
                              </div>
                        <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                            <input type="text" class="form-control" id="human" name="human" placeholder="ضع المجموع هنا">
                            <?php echo "<p class='text-danger'>$errHuman</p>";?> </div>
                              </div>
                        <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                            <input id="submit" name="submit" type="submit" value="ارسال" class="btn btn-primary">
                          </div>
                              </div>

                      </form>
                          </div>
                    <div class="col-md-4">
                            <div class="sppb-addon sppb-addon-text-block lan_title">
                        <h3 class="sppb-addon-title">بيانات الاتصال</h3>
                        <div class="sppb-addon-content"></div>
                      </div>
                            <?= $contact_form_details ?>
                          </div>
                  </div>
                      </div>
              </section>
                  </div>
          </div>
              </div>
      </div>
          </div>
  </section>
        <? include('footer.php'); ?>