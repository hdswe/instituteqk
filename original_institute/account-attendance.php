<?php
	if(isset($_POST['btnsave'])) {
		$data['employee_id']	= $result_user['id'];
		$data['date_absence']	= trim($_POST['date_absence']);
		$data['user_id']		= $_GET['register_absence'];
		$insert					= $pdo->pdoInsUpd('absence_table', $data);
		header('Location: account.php?do=account-attendance&register_absence='.$_GET['register_absence'].'&process=successfully');
    }

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>


<? if($_GET['register_absence'] != ''){ ?>
<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td>تاريخ الغياب</td>
    <td>
    <input type="text" name="date_absence" id="date_absence"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>
</form>

<br>
<br>
<h3>سجل أيام الغياب</h3>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td width="1%">#</td>
    <td>تاريخ الغياب</td>
  </tr>
	<?
	$i = 1;
	$sql = "SELECT * FROM `absence_table` WHERE `user_id` = ".$_GET['register_absence']." ORDER BY `id` DESC";
	$rows = $pdo->pdoGetAll($sql);
	foreach($rows as $result) {
	?>
  <tr>
    <td><?= $i ?></td>
    <td><?= $result['date_absence'] ?></td>
  </tr>
  <? } ?>
</table>

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
    <td><a href="account.php?do=account-attendance&register_absence=<?= $result['id'] ?>">تسجيل غياب</a></td>
  </tr>
  <? $i++; } ?>
</table>

<? } ?>