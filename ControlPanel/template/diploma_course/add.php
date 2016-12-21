
<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات المقرر</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">العنوان</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">التفاصيل</label>
        <div class="col-sm-10">
        <textarea name="details" rows="4" class="form-control" id="details"></textarea>
        </div>
      </div>
      <div class="form-group">
            <label class="col-sm-2 control-label">المجال</label>
            <div class="col-sm-10">
              <select name="area_id" class="form-control" id="jquery-select-customer">
                <?
				$sql = "SELECT * FROM `diploma_area` ORDER BY `id` DESC";
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
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">المستوى</label>
        <div class="col-sm-10">
          <input name="level" type="text" class="form-control" id="level">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الوحدات التعليمية</label>
        <div class="col-sm-10">
          <input name="modules" type="text" class="form-control" id="modules">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الوزن النسبي للمقرر</label>
        <div class="col-sm-10">
          <input name="relative_weight" type="text" class="form-control" id="relative_weight">
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