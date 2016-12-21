
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات العضو</span> </div>
    <div class="panel-body">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">اسم العضو</label>
            <div class="col-sm-10">
              <input name="first_name" type="text" class="form-control" id="first_name">
            </div>
          </div>
          <? if($_GET['type'] !== 'employee' && $_GET['type'] !== 'head'){ ?>
      <div class="form-group">
            <label class="col-sm-2 control-label">المجموعة</label>
            <div class="col-sm-10">
              <select name="group_id" class="form-control" id="jquery-select-customer">
                <?
				$sql = "SELECT * FROM `group_users` ORDER BY `id` ASC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['title'] ?>
                </option>
                <? } ?>
              </select>
            </div>
          </div>
          <? } ?>
          
          
          <? if($_GET['institute'] != ''){ ?>
          <input name="institutes_id" type="hidden" id="institutes_id" value="<?= $_GET['institute'] ?>">
        <div class="form-group">
          <label class="col-sm-2 control-label">المجموعة</label>
          <div class="col-sm-10">
            <select name="group_id" class="form-control" id="jquery-select-customer">
              <option value="4"> الموظفين </option>
              <option value="5"> رؤساء اقسام </option>
              <option value="6"> هيئة التدريس </option>
              <option value="7"> مشرفين </option>
              <option value="8"> رئيس المعهد </option>
            </select>
          </div>
        </div>
          <? } ?>
		<? if($_GET['type'] == 'employee'){ ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">المسؤول المباشر</label>
            <div class="col-sm-10">
              <select name="to_follow" class="form-control" id="jquery-select-customer">
              <option value="0"> لاأحد </option>
                <?
				$sql = "SELECT * FROM `users` WHERE `institutes_id` = ".$_GET['institute']." ORDER BY `id` ASC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['username'] ?>
                </option>
                <? } ?>
              </select>
            </div>
          </div>
          
          <? } ?>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">اسم المستخدم</label>
            <div class="col-sm-10">
              <input name="username" type="text" class="form-control" id="username">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">كلمة المرور</label>
            <div class="col-sm-10">
              <input name="password" type="text" class="form-control" id="password">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnadd" id="btnadd" value="اضافة">
            </div>
          </div>

    </div>
  </div>
</form>
