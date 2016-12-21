<?php
if(isset($_GET['result'])){
	$reslut = $pdo->pdoGetRow("SELECT * FROM `account_evaluate_educational_environment` WHERE `user_id` = ".$_GET['result']."");
}
?>
<style>
h1{  margin-bottom:20px; }
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<h1>تقييم البيئة التعليمية:</h1>

<? if($_GET['result'] != '') { ?>
<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td colspan="2" class="tr-hed">التعامل</td>
  </tr>
  <tr>
    <th width="20%">المحاضرات</th>
<td><?= $reslut['f1'] ?></td>  </tr>
  <tr>
    <th>الإداريات</th>
    <td><?= $reslut['f2'] ?></td>
  </tr>
  <tr>
    <th>الطالبات مع بعضهن</th>
    <td><?= $reslut['f3'] ?></td>
  </tr>
  <tr>
    <th>العاملات</th>
    <td><?= $reslut['f4'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">توقيت الدراسة</td>
  </tr>
  <tr>
    <th>بداية الفصل ونهايته</th>
    <td><?= $reslut['f5'] ?></td>
  </tr>
  <tr>
    <th>بداية اليوم الدراسي ونهايته</th>
    <td><?= $reslut['f6'] ?></td>
  </tr>
  <tr>
    <th>مدة المحاضرات</th>
    <td><?= $reslut['f7'] ?></td>
  </tr>
  <tr>
    <th>الاستراحة 25 دقيقة</th>
    <td><?= $reslut['f8'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">التجهيزات</td>
  </tr>
  <tr>
    <th>القاعة الدراسية</th>
    <td><?= $reslut['f9'] ?></td>
  </tr>
  <tr>
    <th>قاعة التدريب</th>
    <td><?= $reslut['f10'] ?></td>
  </tr>
  <tr>
    <th>التكييف</th>
    <td><?= $reslut['f11'] ?></td>
  </tr>
  <tr>
    <th>الاضاءة</th>
    <td><?= $reslut['f12'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الرسوم</td>
  </tr>
  <tr>
    <th>الدراسة</th>
    <td><?= $reslut['f13'] ?></td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><?= $reslut['f14'] ?></td>
  </tr>
  <tr>
    <th>الحضانة</th>
    <td><?= $reslut['f15'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الخدمات</td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><?= $reslut['f16'] ?></td>
  </tr>
  <tr>
    <th>المقصف</th>
    <td><?= $reslut['f17'] ?></td>
  </tr>
  <tr>
    <th>النظافة</th>
    <td><?= $reslut['f18'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">اثر المعهد على الطالبة</td>
  </tr>
  <tr>
    <th>العلمي</th>
    <td><?= $reslut['f19'] ?></td>
  </tr>
  <tr>
    <th>التربوي</th>
    <td><?= $reslut['f20'] ?></td>
  </tr>
  <tr>
    <th>أكتساب المهارات</th>
    <td><?= $reslut['f21'] ?></td>
  </tr>
  <tr>
    <th>تناقل التجارب بين المدارس</th>
    <td><?= $reslut['f22'] ?></td>
  </tr>
  <tr>
    <th>مقترحات</th>
    <td><?= $reslut['f23'] ?></td>
  </tr>
  <tr>
    <th>ملحوظات</th>
    <td><?= $reslut['f24'] ?></td>
  </tr>
</table>
</form>
<? } else { ?>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td>#</td>
    <th>اسم الطالب</th>
    <th>رقم بطاقة الاحوال</th>
    <th>رقم الجوال</th>
    <th>البريد الالكتروني</th>
    <th>&nbsp;</th>
  </tr>
	<?
	$i = 1;
	$sql = "SELECT * FROM `users` WHERE `group_id` = 3 ORDER BY `id` DESC";
	$rows = $pdo->pdoGetAll($sql);
	foreach($rows as $result) {
	?>
  <tr>
    <td><?= $i ?></td>
    <td><?= $result['first_name']." ".$result['father_name']." ".$result['grand_name']." ".$result['family_name'] ?></td>
    <td><?= $result['id_number'] ?></td>
    <td><?= $result['mobile'] ?></td>
    <td><?= $result['email'] ?></td>
    <td><a href="account.php?do=account-result-evaluate-educational-environment&result=<?= $result['id'] ?>">التفاصيل</a></td>
  </tr>
  <? $i++; } ?>
</table>


<? } ?>