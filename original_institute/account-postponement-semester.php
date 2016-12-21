<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']	= $result_user['id'];
		$data['f1']		= trim($_POST['f1']);
		$data['f2']		= trim($_POST['f2']);
		$data['f3']		= trim($_POST['f3']);
		$data['f4']		= trim($_POST['f4']);
		$data['f5']		= trim($_POST['f5']);
		$data['f6']		= trim($_POST['f6']);
		$data['f7']		= trim($_POST['f7']);
		$insert			= $pdo->pdoInsUpd('account_postponement_semester', $data);
		header('Location: ?do=show&process=successfully');
    }

	$sql = "SELECT * FROM `account_postponement_semester` WHERE `user_id` = ".$result_user['id']."";
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

<form method="post">
<? if($table_show == 'yes') { ?>
<div class="alert alert-success" role="alert">طلبك مقدم وهو بانتظار القبول</div>
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
<? } else { ?>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>اسم الطالبة</th>
    <td>
  <input id="f1" name="f1" type="text" class="form-control" required></td>
    <th>البرنامج</th>
    <td><input id="f2" name="f2" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>رقم لهاتف</th>
    <td><input id="f3" name="f3" type="text" class="form-control" required></td>
    <th>رقم الجوال</th>
    <td><input id="f4" name="f4" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>أرغب تأجيل الدراسة للفصل </th>
    <td><input id="f5" name="f5" type="text" class="form-control" required></td>
    <th> المستوى</th>
    <td><input id="f6" name="f6" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>وذلك بسبب</th>
    <td colspan="3"><textarea name="f7" rows="5" required class="form-control" id="f7"></textarea></td>
    </tr>
  <tr>
    <td colspan="4">مع علمي أن تأجيل الدراسة أكثر من فصلين متتالين يترتب عليه التقديم للمعهد من جديد .</td>
    </tr>
  <tr>
    <td colspan="4"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
    </tr>
</table>
<? } ?>
</form>