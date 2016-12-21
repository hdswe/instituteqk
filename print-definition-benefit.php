<?php

	ob_start();
	session_start();
    require ("include/db.class.php");
    require ("include/config.php");
    require ("include/function.php");

	$sql = "SELECT * FROM `account_print_definition_benefit` WHERE `user_id` = ".$_SESSION['user_id']." ORDER BY id DESC LIMIT 1";
	$execsql = $pdo->pdoExecute($sql);
	if($pdo->pdoRowCount($execsql) == 1) {
		$table_show = 'yes';
		$reslut = $pdo->pdoGetRow($sql);
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body onLoad="window.print()">
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>

<form method="post" enctype="multipart/form-data">

<table width="100%" border="1" cellpadding="10" cellspacing="0" dir="rtl" class="table table-bordered table-hover table-striped">
  <tr>
    <th colspan="4" class="tr-hed">معلومات شخصية</th>
    </tr>
  <tr>
    <td>اسم الطالب رباعيا</td>
    <td colspan="3"><?= $reslut['f1'] ?></td>
    </tr>
  <tr>
    <td>تاريخ الميلاد</td>
    <td><?= $reslut['f2'] ?></td>
    <td>مكان الميلاد</td>
    <td><?= $reslut['f3'] ?></td>
  </tr>
  <tr>
    <td>عدد أقراد الأسرة</td>
    <td><?= $reslut['f4'] ?></td>
    <td>الوضع العائلي</td>
    <td><?= $reslut['f5'] ?>
</td>
  </tr>
  <tr>
    <td>رقم بطاقة الأحوال/الإقامة</td>
    <td><?= $reslut['f6'] ?></td>
    <td>الجنسية </td>
    <td><?= $reslut['f6'] ?></td>
  </tr>
  <tr>
    <td>مستوى تعليم الوالدين:الأب/الأم</td>
    <td colspan="3"><?= $reslut['f7'] ?>
</td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">معلومات السكن</th>
    </tr>
  <tr>
    <td>السـكن</td>
    <td colspan="3"><?= $reslut['f8'] ?></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">عنوان المنزل</th>
    </tr>
  <tr>
    <td>الحـي </td>
    <td><?= $reslut['f9'] ?></td>
    <td>المدينة </td>
    <td><?= $reslut['f10'] ?></td>
  </tr>
  <tr>
    <td>هاتف المنزل</td>
    <td><?= $reslut['f11'] ?></td>
    <td>الجوَّال </td>
    <td><?= $reslut['f12'] ?></td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed">معـلـومـات وظـيفـية عن الوالد</th>
    </tr>
  <tr>
    <td>الحالة</td>
    <td colspan="3"><?= $reslut['f13'] ?></td>
    </tr>
  <tr>
    <td>اسم جهة العمل</td>
    <td><?= $reslut['f14'] ?></td>
    <td>المدينة </td>
    <td><?= $reslut['f15'] ?></td>
  </tr>
  <tr>
    <td>الحي </td>
    <td><?= $reslut['f16'] ?></td>
    <td>هاتف </td>
    <td><?= $reslut['f17'] ?></td>
  </tr>
  <tr>
    <td>تحولية </td>
    <td><?= $reslut['f18'] ?></td>
    <td>المسمى الوظيفي</td>
    <td><?= $reslut['f19'] ?></td>
  </tr>
  <tr>
    <td>الراتب الشهري </td>
    <td><?= $reslut['f20'] ?></td>
    <td>سنوات الخدمة</td>
    <td><?= $reslut['f21'] ?></td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed">عنـوان المـراسـلة&nbsp;</th>
    </tr>
  <tr>
    <td>ص . ب </td>
    <td><?= $reslut['f22'] ?></td>
    <td>المدينة </td>
    <td><?= $reslut['f23'] ?></td>
  </tr>
  <tr>
    <td>الرمز البريدي</td>
    <td><?= $reslut['f24'] ?></td>
    <td>البريد الألكتروني</td>
    <td><?= $reslut['f25'] ?></td>
  </tr>
  <tr>
    <td>الصورة الفوتوغرافية&nbsp;</td>
    <td colspan="3"><?= $reslut['f26'] ?></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">معلومات صحية وسلوكية&nbsp;</th>
    </tr>
  <tr>
    <td>الحالة الصحية</td>
    <td colspan="3"><?= $reslut['f27'] ?></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">الصات الشخصية والسمات السلوكية&nbsp;</th>
    </tr>
  <tr>
    <td>البصر </td>
    <td><?= $reslut['f28'] ?></td>
    <td>السمع</td>
    <td><?= $reslut['f29'] ?></td>
  </tr>
  <tr>
    <td>النطق </td>
    <td><?= $reslut['f30'] ?></td>
    <td>الحركة </td>
    <td><?= $reslut['f31'] ?></td>
  </tr>
  <tr>
    <td>الاهتمام بالظهر العام</td>
    <td><?= $reslut['f32'] ?></td>
    <td>الشعور بالمسؤولية</td>
    <td><?= $reslut['f33'] ?></td>
  </tr>
  <tr>
    <td>النزعة القيادية</td>
    <td><?= $reslut['f34'] ?></td>
    <td>الشعور بالقلق</td>
    <td><?= $reslut['f35'] ?></td>
  </tr>
  <tr>
    <td>انفعالي </td>
    <td><?= $reslut['f36'] ?></td>
    <td>انظوائي </td>
    <td><?= $reslut['f37'] ?></td>
  </tr>
  <tr>
    <td>عدواني </td>
    <td><?= $reslut['f38'] ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed"> العنوان في البلد الأم (لغير السعوديين)   &nbsp;</th>
    </tr>
  <tr>
    <td>البلد </td>
    <td><?= $reslut['f39'] ?></td>
    <td>المدينة </td>
    <td><?= $reslut['f40'] ?></td>
  </tr>
  <tr>
    <td>ص . ب </td>
    <td><?= $reslut['f41'] ?></td>
    <td>هاتف </td>
    <td><?= $reslut['f42'] ?></td>
  </tr>
</table>
</form>
</body>
</html>