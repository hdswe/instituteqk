
<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات المعهد</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">اسم المعهد</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
        </div>
      </div>
      <div class="form-group">
            <label class="col-sm-2 control-label">مدير المعهد</label>
            <div class="col-sm-10">
              <select name="user_id" class="form-control" id="jquery-select-customer">
                <?
				$sql_mn = "SELECT * FROM `users` WHERE group_id=2 or group_id=1 ORDER BY `id` DESC";
				$rows_mn = $pdo->pdoGetAll($sql_mn);
				foreach($rows_mn as $result_mn) {
				?>
                <option <? if($result['user_id'] == $result_mn['id']){ echo 'selected="selected"'; } ?> value="<?= $result_mn['id'] ?>">
                <?= $result_mn['first_name'] ?>
                </option>
                <? } ?>
              </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
        <div class="col-sm-10">
          <input name="seo_link" type="text" class="form-control" id="seo_link" value="<?= $result['seo_link'] ?>">
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

<script>

					init.push(function () {
						// Single select
						$("#jquery-select-customer").select2({
							allowClear: true,
							placeholder: "العرض في القائمة"
						});

					});
				</script> 
