
<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات المعهد</span> </div>
    <div class="panel-body">
    					<? if ($_GET['process'] == 'eroor') { ?>
                    <div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button>
							 هذا الاسم موجود مسبقاً قم باختيار مسمى اخر
						</div>
                     <? } ?>

      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">اسم المعهد</label>
        <div class="col-sm-10">
          <input name="title" type="text" required class="form-control" id="title" value="<?= $_GET['title'] ?>">
        </div>
      </div>
      <div class="form-group">
            <label class="col-sm-2 control-label">مدير المعهد</label>
            <div class="col-sm-10">
              <select name="user_id" class="form-control" id="jquery-select-customer">
                <?
				$sql = "SELECT * FROM `users` WHERE group_id=2 or group_id=1  ORDER BY `id` DESC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['first_name'] ?>
                </option>
                <? } ?>
              </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
        <div class="col-sm-10">
          <input name="seo_link" type="text" required class="form-control" id="seo_link" value="<?= $_GET['seo_link'] ?>">
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
<script>

					init.push(function () {
						// Single select
						$("#jquery-select-customer").select2({
							allowClear: true,
							placeholder: "العرض في القائمة"
						});

					});
				</script> 
