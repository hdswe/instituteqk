<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']	= $result_user['id'];
		$data['f1']		= trim($_POST['f1']);
		$data['f2']		= trim($_POST['f2']);
		$data['f3']		= trim($_POST['f3']);
		$data['f4']		= trim($_POST['f4']);
		$data['f5']		= trim($_POST['f5']);
		$insert			= $pdo->pdoInsUpd('account_submit_proposal', $data);
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
    <th>اسم العميل</th>
    <td>
  <input id="f1" name="f1" type="text" class="form-control" required></td>
    <th>الهاتف</th>
    <td><input id="f2" name="f2" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>العنوان</th>
    <td><input id="f3" name="f3" type="text" class="form-control" required></td>
    <th>الموضوع</th>
    <td><label class="radio-inline">
  <input type="radio" name="f4" id="inlineRadio1" value="شكوى"> شكوى 
</label>
<label class="radio-inline">
  <input type="radio" name="f4" id="inlineRadio2" value="إقتراح"> إقتراح   
</label>
</td>
  </tr>
  <tr>
    <th>التفاصيل   </th>
    <td colspan="3"><textarea name="f5" rows="5" id="f5" class="form-control"></textarea></td>
  </tr>
  <tr>
    <td colspan="4"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>

</form>