<?php
if(isset($_GET['result'])){
	$reslut = $pdo->pdoGetRow("SELECT * FROM `account_postponement_semester` WHERE `user_id` = ".$_GET['result']."");
}
?>
<style>
h1{  margin-bottom:20px; }
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<h1>تأجيل الفصل الدراسي:</h1>

<? if($_GET['result'] != '') { ?>
<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>اسم الطالبة</th>
    <td>
  <input name="f1" type="text" disabled required class="form-control" id="f1" value="<?= $reslut['f1'] ?>"></td>
    <th>البرنامج</th>
    <td><input name="f2" type="text" disabled required class="form-control" id="f2" value="<?= $reslut['f1'] ?>"></td>
  </tr>
  <tr>
    <th>رقم لهاتف</th>
    <td><input name="f3" type="text" disabled required class="form-control" id="f3" value="<?= $reslut['f1'] ?>"></td>
    <th>رقم الجوال</th>
    <td><input name="f4" type="text" disabled required class="form-control" id="f4" value="<?= $reslut['f1'] ?>"></td>
  </tr>
  <tr>
    <th>أرغب تأجيل الدراسة للفصل </th>
    <td><input name="f5" type="text" disabled required class="form-control" id="f5" value="<?= $reslut['f1'] ?>"></td>
    <th> المستوى</th>
    <td><input name="f6" type="text" disabled required class="form-control" id="f6" value="<?= $reslut['f1'] ?>"></td>
  </tr>
  <tr>
    <th>وذلك بسبب</th>
    <td colspan="3"><textarea name="f7" rows="5" disabled required class="form-control" id="f7"><?= $reslut['f1'] ?>
    </textarea></td>
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
    <td><a href="account.php?do=account-result-postponement-semester&result=<?= $result['id'] ?>">التفاصيل</a></td>
  </tr>
  <? $i++; } ?>
</table>


<? } ?>