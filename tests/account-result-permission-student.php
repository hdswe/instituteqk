<?php
	
	if(isset($_GET['result'])){ 
		$sql = "SELECT * FROM `account_permission_student` WHERE `user_id` = ".$_GET['result']."";
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
    <td><?= $reslut['f1'] ?></td>
    <th>الفصل</th>
    <td colspan="2"><?= $reslut['f2'] ?></td>
  </tr>
  <tr>
    <th>من الساعة</th>
    <td><?= $reslut['f3'] ?></td>
    <th>الى الساعة</th>
    <td colspan="2"><?= $reslut['f4'] ?></td>
  </tr>
  <tr>
    <th>السبب   </th>
    <td colspan="4"><?= $reslut['f5'] ?></td>
    </tr>
  <tr>
    <td colspan="5"><?= $reslut['f6'] ?></td>
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
    <td><a href="account.php?do=account-result-permission-student&result=<?= $result['id'] ?>">التفاصيل</a></td>
  </tr>
  <? $i++; } ?>
</table>


<? } ?>