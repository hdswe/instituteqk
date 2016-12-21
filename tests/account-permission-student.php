<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']	= $result_user['id'];
		$data['f1']		= trim($_POST['f1']);
		$data['f2']		= trim($_POST['f2']);
		$data['f3']		= trim($_POST['f3']);
		$data['f4']		= trim($_POST['f4']);
		$data['f5']		= trim($_POST['f5']);
		$insert			= $pdo->pdoInsUpd('account_permission_student', $data);
		header('Location: ?do=show&process=successfully');
    }

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>

<form method="post">
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th>الاسم</th>
    <td>
  <input id="f1" name="f1" type="text" class="form-control" required></td>
    <th>الفصل</th>
    <td colspan="2"><input id="f2" name="f2" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>من الساعة</th>
    <td><input id="f3" name="f3" type="text" class="form-control" required></td>
    <th>الى الساعة</th>
    <td colspan="2"><input id="f4" name="f4" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>السبب   </th>
    <td colspan="4"><textarea name="f5" rows="5" id="f5" class="form-control"></textarea></td>
    </tr>
  <tr>
    <td colspan="5"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>

</form>