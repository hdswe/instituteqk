<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']	= $result_user['id'];
		$data['f1']		= trim($_POST['f1']);
		$data['f2']		= trim($_POST['f2']);
		$data['f3']		= trim($_POST['f3']);
		$insert			= $pdo->pdoInsUpd('account_transfer_institute', $data);
		header('Location: ?do=show&process=successfully');
    }
	$sql = "SELECT * FROM `account_transfer_institute` WHERE `user_id` = ".$result_user['id']."";
	$execsql = $pdo->pdoExecute($sql);
	if($pdo->pdoRowCount($execsql) == 1) {
		$table_show = 'yes';
		$reslut = $pdo->pdoGetRow($sql);
	}

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<? if($table_show == 'yes') { ?>
<div class="alert alert-success" role="alert">طلبك مقدم وهو بانتظار القبول</div>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>الاسم</th>
    <td>
  <?= $reslut['f1'] ?></td>
    <th>الجنسية</th>
    <td><?= $reslut['f2'] ?></td>
  </tr>
  <tr>
    <th>الجهة التي ترغب الطالبة بإكمال الدراسة  </th>
    <td colspan="3"><?= $reslut['f3'] ?></td>
    </tr>
</table>


<? } else { ?>
<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>الاسم</th>
    <td>
  <input id="f1" name="f1" type="text" class="form-control" required></td>
    <th>الجنسية</th>
    <td><input id="f2" name="f2" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>الجهة التي ترغب الطالبة بإكمال الدراسة  </th>
    <td colspan="3"><input name="f3" type="text" required class="form-control" id="f3" placeholder="معهد"></td>
    </tr>
  <tr>
    <td colspan="4"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>

</form>
<? } ?>