
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات العضو</span> </div>
    <div class="panel-body">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">اسم العضو</label>
            <div class="col-sm-10">
              <input name="first_name" type="text" class="form-control" id="first_name" value="<?= $result['first_name'] ?>">
            </div>
          </div>
          
      <div class="form-group">
            <label class="col-sm-2 control-label">المجموعة</label>
            <div class="col-sm-10">
              <select name="group_id" class="form-control" id="jquery-select-customer">
                <?
				$sql_gr = "SELECT * FROM `group_users` ORDER BY `id` ASC";
				$rows_gr = $pdo->pdoGetAll($sql_gr);
				foreach($rows_gr as $result_gr) {
				?>
                <option <? if($result['group_id'] == $result_gr['id']){ echo 'selected="selected"'; } ?> value="<?= $result_gr['id'] ?>"><?= $result_gr['title'] ?></option>
                <? } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">اسم المستخدم</label>
            <div class="col-sm-10">
              <input name="username" type="text" class="form-control" id="username" value="<?= $result['username'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">كلمة المرور</label>
            <div class="col-sm-10">
              <input name="password" type="text" class="form-control" id="password" value="<?= $result['password'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnedit" id="btnedit" value="تعديل">
            </div>
          </div>

    </div>
  </div>
</form>
