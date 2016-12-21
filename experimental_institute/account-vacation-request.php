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
		$data['f8']		= trim($_POST['f8']);
		$insert			= $pdo->pdoInsUpd('account_vacation_request', $data);
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
    <td colspan="2">
  <input id="f1" name="f1" type="text" class="form-control" required></td>
    <th>الفصل</th>
    <td colspan="2"><input id="f2" name="f2" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>الجنسية</th>
    <td colspan="2"><input id="f3" name="f3" type="text" class="form-control" required></td>
    <th>مقر الدراسة</th>
    <td colspan="2"><input id="f4" name="f4" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <th>أرغب في منحي إجازة   </th>
    <td colspan="5"><label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio1" value="حمل وولادة"> حمل وولادة 
</label>
<label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio2" value="مرضية"> مرضية   
</label>
<label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio3" value="استثنائية"> استثنائية   
</label>
<label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio3" value="أخرى"> أخرى   
</label>
</td>
    </tr>
  <tr>
    <th>المدة</th>
    <td><input id="f6" name="f6" type="text" class="form-control" required></td>
    <td>من</td>
    <td><input id="f7" name="f7" type="text" class="form-control" required></td>
    <td>الى</td>
    <td><input id="f8" name="f8" type="text" class="form-control" required></td>
  </tr>
  <tr>
    <td colspan="6"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>

</form>