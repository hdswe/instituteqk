<?php
	if(isset($_GET['result'])){ 
		$sql = "SELECT * FROM `account_registration_transport` WHERE `user_id` = ".$_GET['result']."";
		$execsql = $pdo->pdoExecute($sql);
		if($pdo->pdoRowCount($execsql) == 1) {
			$table_show = 'yes';
			$reslut = $pdo->pdoGetRow($sql);
		}
	}

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<? if($table_show == 'yes') { ?>

<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>الاسم</th>
    <td colspan="2">
  <?= $reslut['f1'] ?></td>
    <th>الفصل</th>
    <td colspan="2"><?= $reslut['f2'] ?></td>
  </tr>
  <tr>
    <th>الجنسية</th>
    <td colspan="2"><?= $reslut['f3'] ?></td>
    <th>مقر الدراسة</th>
    <td colspan="2"><?= $reslut['f4'] ?></td>
  </tr>
  <tr>
    <th>أرغب في منحي إجازة   </th>
    <td colspan="5"><?= $reslut['f5'] ?>
</td>
    </tr>
  <tr>
    <th>المدة</th>
    <td><?= $reslut['f6'] ?></td>
    <td>من</td>
    <td><?= $reslut['f7'] ?></td>
    <td>الى</td>
    <td><?= $reslut['f8'] ?></td>
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
    <td><a href="account.php?do=account-result-vacation-request&result=<?= $result['id'] ?>">التفاصيل</a></td>
  </tr>
  <? $i++; } ?>
</table>


<? } ?>