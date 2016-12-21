<?
	include( 'header.php');
	if(isset($_SESSION['user_id'])){
		$result_user = $pdo->pdoGetRow("SELECT * FROM `users` WHERE `id` = ".$_SESSION['user_id']."");
	}else{
		header('location: login.php');	
	}
	
?>
<section id="sp-page-title">
  <div class="row">
    <div id="sp-title" class="col-sm-12 col-md-12">
      <div class="sp-column ">
        <div class="sp-page-title">
          <div class="container">
            <h2><?= $result_pg['title']; ?></h2> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="sp-main-body">
  <div class="container">
    <div class="row">
      <div id="sp-right" class="col-sm-3 col-md-3">
        <div class="sp-column class2">
          <div class="sp-module ">
            <h3 class="sp-module-title">خيارات العضوية</h3>
            <div class="sp-module-content">
              <ul class="nav menu">
              	<? if($result_user['group_id'] == '3') { ?>
                <li><a href="">تعديل البيانات</a> </li>
                <li><a href="?do=account-evaluate-educational-environment">تقييم البيئة التعليمية</a> </li>
                <li><a href="?do=account-postponement-semester">تأجيل الفصل الدراسي</a> </li>
                <li><a href="library.php">تنزيل مواد دراسية</a> </li>
                <li><a href="diploma.php">التسجيل في الدبلومات</a> </li>
                <li><a href="programs.php">التسجيل في البرامج</a> </li>
                <li><a href="#">استعراض نتائج الأختبارات</a> </li>
                <li><a href="?do=account-print-definition-benefit">طباعة التعريف والإفادة</a> </li>
                <li><a href="#">طباعة كشف الدرجات</a> </li>
                <li><a href="?do=account-registration-transport">التسجيل في النقل</a> </li>
                <li><a href="#">استعراض جدول المحاضرات</a> </li>
                <li><a href="contact.php">التواصل</a> </li>
                <li><a href="?do=account-transfer-institute">النقل من معهد الى معهد</a> </li>
                <li><a href="?do=account-vacation-request">تقديم إجازة طالبة</a> </li>
                <li><a href="?do=account-permission-student">استئذان طالبة</a> </li>
                <li><a href="?do=account-submit-proposal">تقديم مقترح/شكوى</a> </li>
                <li><a href="logout.php">تسجيل خروج</a> </li>
				<? } elseif($result_user['group_id'] == '4') { ?>
                <li><a href="">تعديل البيانات</a> </li>
                <li><a href="?do=account-attendance">تحضير الطالبات</a> </li>
                <li><a href="contact.php">التواصل</a> </li>
                <li><a href="?do=account-vacation-request">تقديم إجازة</a> </li>
                <li><a href="">استعراض جدول المحاضرة</a> </li>
                <li><a href="?do=account-permission-student">تقديم استئذان</a> </li>
                <li><a href="?do=account-submit-proposal">تقديم مقترح/شكوى</a> </li>
                <li><a href="?do=account-assessment-student">بطاقة تصييم طالبة</a> </li>
                <li><h4>استمارات الطلاب</h4></li>
                
                <li><a href="?do=account-result-transfer-institute">طلبات النقل من معهد</a> </li>
                <li><a href="?do=account-result-submit-proposal">تقديم شكوى / مقترح</a> </li>
                <li><a href="?do=account-result-permission-student">استئذان طالبة</a> </li>
                <li><a href="?do=account-result-vacation-request">تقديم اجازة</a> </li>
                <li><a href="?do=account-result-registration-transport">التسجيل في النقل</a> </li>
                <li><a href="?do=account-result-evaluate-educational-environment">تقييم البيئة التعليمية</a> </li>
                <li><a href="?do=account-result-postponement-semester">طلبات تأجيل الفصل الدراسي</a> </li>
                <li><a href="logout.php">تسجيل خروج</a> </li>
				<? } elseif($result_user['group_id'] == '5') { ?>
                <li><a href="">تعديل البيانات</a> </li>
                <li><a href="?do=account-vacation-request">تقديم إجازة</a> </li>
                <li><a href="logout.php">تسجيل خروج</a> </li>
                
                <? } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="sp-component" class="col-sm-9 col-md-9">
		<? if ($_GET['process'] == 'successfully') { ?>
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			تمت العملية بنجاح
		</div>
		<? } ?>
		<?
        $do = $_GET["do"];
        switch($do)
        {
		//USER
        case "account-evaluate-educational-environment":
        include("account-evaluate-educational-environment.php");
        break;
        case "account-postponement-semester":
        include("account-postponement-semester.php");
        break;
        case "account-print-definition-benefit":
        include("account-print-definition-benefit.php");
        break;
        case "account-registration-transport":
        include("account-registration-transport.php");
        break;
        case "account-vacation-request":
        include("account-vacation-request.php");
        break;
        case "account-permission-student":
        include("account-permission-student.php");
        break;
        case "account-submit-proposal":
        include("account-submit-proposal.php");
        break;
        case "account-transfer-institute":
        include("account-transfer-institute.php");
        break;

		//Employee
        case "account-attendance":
        include("account-attendance.php");
        break;
        case "account-result-evaluate-educational-environment":
        include("account-result-evaluate-educational-environment.php");
        break;
        case "account-result-postponement-semester":
        include("account-result-postponement-semester.php");
        break;
        case "account-result-registration-transport":
        include("account-result-registration-transport.php");
        break;
        case "account-result-vacation-request":
        include("account-result-vacation-request.php");
        break;
        case "account-result-permission-student":
        include("account-result-permission-student.php");
        break;
        case "account-result-submit-proposal":
        include("account-result-submit-proposal.php");
        break;
        case "account-result-transfer-institute":
        include("account-result-transfer-institute.php");
        break;
        case "account-assessment-student":
        include("account-assessment-student.php");
        break;


        }
		?>
      </div>
    </div>
  </div>
</section>
<? include( 'footer.php'); ?>
