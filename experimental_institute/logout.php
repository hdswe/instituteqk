<?
	ob_start();
	include('header.php');
	session_destroy();

?>
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title">
          <div class="container">
            <h2>تسجيل خروج</h2>
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
          <div class="alert alert-success" role="alert">
          تم تسجيل خروجك بنجاح
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<? include('footer.php'); ?>
<script src="<?= $site_url ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
<? ob_flush(); ?>