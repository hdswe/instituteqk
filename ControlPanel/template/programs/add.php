<script>
					init.push(function () {
						var options = {
							todayBtn: "linked",
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-example').datepicker({format: 'dd/mm/yyyy'});

						$('#bs-datepicker-component').datepicker();

						var options2 = {
							orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
						}
						$('#bs-datepicker-range').datepicker(options2);

						$('#bs-datepicker-inline').datepicker();
					});
				</script>

<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات البرنامج</span> </div>
    <div class="panel-body">
    <div class="form-group">
            <label class="col-sm-2 control-label">التصنيف</label>
            <div class="col-sm-10">
              <select name="category_id" class="form-control" id="jquery-select-customer">
                <?
				$sql = "SELECT * FROM `event_category` WHERE `event_type` = 'programs' ORDER BY `id` DESC";
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
        <label for="inputEmail2" class="col-sm-2 control-label">نوع البرنامج</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title">
        </div>
      </div>
            <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">تاريخ المسابقة</label>
        <div class="col-sm-10">
          <input name="date_competition" type="text" class="form-control" id="bs-datepicker-example">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">وقت البرنامج</label>
        <div class="col-sm-10">
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="time_competition" id="optionsRadios1" value="AM" checked="" class="px">
              <span class="lbl">صباحي</span> </label>
          </div>
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="time_competition" id="optionsRadios1" value="PM" class="px">
              <span class="lbl">مسائي</span> </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">هل يحتاج حضور ام لا</label>
        <div class="col-sm-10">
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="need_attend" id="optionsRadios1" value="yes" checked="" class="px">
              <span class="lbl">نعم</span> </label>
          </div>
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="need_attend" id="optionsRadios1" value="no" class="px">
              <span class="lbl">لا</span> </label>
          </div>
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
