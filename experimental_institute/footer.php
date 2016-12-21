         <!-- start bottom area -->
         <section id="sp-bottom">
            <div class="container">
               <div class="row">
                  <!-- start about -->
                  <div id="sp-bottom1" class="col-sm-6 col-md-3">
                     <div class="sp-column ">
                        <div class="sp-module ">
                           <div class="sp-module-content">
                              <ul>
								<?
								
                                $sql_footer_menu = $pdo->pdoGetAll("SELECT * FROM `footer_menu` WHERE block='1' AND insert_id=".$institute_id." ORDER BY `id` ASC");
                                foreach($sql_footer_menu as $result_footer_menu) {
                                ?>
                              <li><a href="<?= $result_footer_menu['link'] ?>"><?= $result_footer_menu['title'] ?></a></li>
								<? } ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="sp-bottom1" class="col-sm-6 col-md-3">
                     <div class="sp-column ">
                        <div class="sp-module ">
                           <div class="sp-module-content">
                              <ul>
								<?
								
                                $sql_footer_menu = $pdo->pdoGetAll("SELECT * FROM `footer_menu` WHERE block='2' AND insert_id=".$institute_id." ORDER BY `id` ASC");
                                foreach($sql_footer_menu as $result_footer_menu) {
                                ?>
                              <li><a href="<?= $result_footer_menu['link'] ?>"><?= $result_footer_menu['title'] ?></a></li>
								<? } ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end about -->
                  <!-- start twitter feed -->
                  <div id="sp-bottom2" class="col-sm-6 col-md-3">
                     <div class="sp-column">
                        <div class="sp-module">
                           <div class="sp-module-content">
                              <ul>
								<?
                                $sql_footer_menu = $pdo->pdoGetAll("SELECT * FROM `footer_menu` WHERE block='3' AND insert_id=".$institute_id." ORDER BY `id` ASC");
                                foreach($sql_footer_menu as $result_footer_menu) {
                                ?>
                              <li><a href="<?= $result_footer_menu['link'] ?>"><?= $result_footer_menu['title'] ?></a></li>
								<? } ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end twitter feed -->
                  <!-- start gallery -->
                  <div id="sp-bottom3" class="col-sm-6 col-md-3">
                     <div class="sp-column ">
                        <div class="sp-module grand_gallary">
                           <div class="sp-module-content">
                              <ul>
								<?
                                $sql_footer_menu = $pdo->pdoGetAll("SELECT * FROM `footer_menu` WHERE block='4' AND insert_id=".$institute_id." ORDER BY `id` ASC");
                                foreach($sql_footer_menu as $result_footer_menu) {
                                ?>
                              <li><a href="<?= $result_footer_menu['link'] ?>"><?= $result_footer_menu['title'] ?></a></li>
								<? } ?>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end gallery -->
               </div>
            </div>
         </section>
         <!-- end bottom area -->
         <!-- start footer -->
         <footer id="sp-footer">
            <div class="container">
               <div class="row">
                  <div id="sp-footer1" class="col-sm-6 col-md-6">
                     <div class="sp-column "><span class="sp-copyright">جميع الحقوق محفوظة لجمعيه التأهيل</span></div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="sp-column ">
                        <ul class="social-icons">
                           <li><a target="_blank" href="<?= $result_settings['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                           <li><a target="_blank" href="<?= $result_settings['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                           <li><a target="_blank" href="<?= $result_settings['googleplus'] ?>"><i class="fa fa-google-plus"></i></a></li>
                           <li><a target="_blank" href="<?= $result_settings['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                           <li><a target="_blank" href="<?= $result_settings['youtube'] ?>"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <!-- main js library -->
      <script src="<?= $site_url_file ?>/media/system/js/mootools-core.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/system/js/core.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/jui/js/jquery.min.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/jui/js/jquery-migrate.min.js" type="text/javascript"></script>
      <!-- revolution js -->
      <script src="<?= $site_url_file ?>/media/com_uniterevolution2/assets/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/com_uniterevolution2/assets/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/media/com_uniterevolution2/assets/rs-plugin/js/rs.home.js" type="text/javascript"></script>
      <!-- news show js -->
      <script src="<?= $site_url_file ?>/assets/plugin/news_show_sp2/assets/js/nssp2.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/assets/plugin/lan_skill_progress/frontend/js/jquery.circliful.js" type="text/javascript"></script>
      <!-- bootstrap js -->
      <script src="<?= $site_url_file ?>/frontend/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- sticky menu js -->
      <script src="<?= $site_url_file ?>/frontend/js/jquery.sticky.js" type="text/javascript"></script>
	  <!-- smooth scroll js -->
	  <script src="<?= $site_url_file ?>/frontend/js/jquery.smooth-scroll.min.js" type="text/javascript"></script>
      <script src="<?= $site_url_file ?>/frontend/js/smooth-script.js" type="text/javascript"></script>
      <!-- parallax js -->
      <script src="<?= $site_url_file ?>/frontend/js/jquery.stellar.js" type="text/javascript"></script>
      <!-- custom script -->
      <script src="<?= $site_url_file ?>/frontend/js/main.js" type="text/javascript"></script>
      <!-- newsletter js -->
      <script src="<?= $site_url_file ?>/media/com_acymailing/js/acymailing_moduled263.js" type="text/javascript"></script>
      <!-- photo gallery js -->
      <script src="<?= $site_url_file ?>/assets/plugin/sp_simple_gallery/scripts/slimbox_jquery.js" type="text/javascript"></script>
      <script type="text/javascript">
//<![CDATA[
window.addEvent('domready', function() {


    function calcage(secs, num1, num2, starthtml, endhtml, singular, plural) {
        s = ((Math.floor(secs / num1)) % num2).toString();
        z = ((Math.floor(secs / num1)) % num2);
        if (LeadingZero && s.length < 2) {
            s = "0" + s;
        }
        return starthtml + '<div class="sp_countdown_int"> ' + s + '</div>' + '<div class="sp_countdown_string"> ' + ((z <= 1) ? singular : plural) + '</div>' + endhtml;
    }

    function CountBack(secs) {
        if (secs < 0) {
            document.getElementById("sp_countdown_cntdwn111").innerHTML = '<div class="sp_countdown_finishtext">' + FinishMessage + '</div>';
            return;
        }
        DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs, 86400, 100000,
            '<div class="sp_countdown_days">', '</div>', ' يوم', ' أيام'));
        DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs, 3600, 24,
            '<div class="sp_countdown_hours">', '</div>', ' ساعة', ' ساعات'));
        DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs, 60, 60,
            '<div class="sp_countdown_mins">', '</div>', ' دقيقة', ' دقائق'));
        DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs, 1, 60,
            '<div class="sp_countdown_secs">', '</div>', ' ثانية', " ثواني"));

        document.getElementById("sp_countdown_cntdwn111").innerHTML = DisplayStr;
        if (CountActive)
            setTimeout(function() {

                CountBack((secs + CountStepper))

            }, SetTimeOutPeriod);
    }

    function putspan(backcolor, forecolor) {

    }

    if (typeof(BackColor) == "undefined")
        BackColor = "";
    if (typeof(ForeColor) == "undefined")
        ForeColor = "";
    if (typeof(TargetDate) == "undefined")
        TargetDate = "<?= $event_countdown_date ?>";
    if (typeof(DisplayFormat) == "undefined")
        DisplayFormat = "%%D%%  %%H%%  %%M%%  %%S%% ";
    if (typeof(CountActive) == "undefined")
        CountActive = true;
    if (typeof(FinishMessage) == "undefined")
        FinishMessage = "Finally we are here";
    if (typeof(CountStepper) != "number")
        CountStepper = -1;
    if (typeof(LeadingZero) == "undefined")
        LeadingZero = true;

    CountStepper = Math.ceil(CountStepper);
    if (CountStepper == 0)
        CountActive = false;
    var SetTimeOutPeriod = (Math.abs(CountStepper) - 1) * 1000 + 990;
    putspan(BackColor, ForeColor);
    var dthen = new Date(TargetDate);
    var dnow = new Date();
    if (CountStepper > 0)
        ddiff = new Date(dnow - dthen);
    else
        ddiff = new Date(dthen - dnow);
    gsecs = Math.floor(ddiff.valueOf() / 1000);
    CountBack(gsecs);
});
//]]>      </script>
   </body>
</html>
