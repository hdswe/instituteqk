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
    <div class="panel-heading"> <span class="panel-title">اعددات المسابقة</span> </div>
    <div class="panel-body">
<div class="form-group">
            <label class="col-sm-2 control-label">التصنيف</label>
            <div class="col-sm-10">
              <select name="category_id" class="form-control" id="jquery-select-customer">
                <?
				$sql_mn = "SELECT * FROM `event_category` WHERE `event_type` = 'competitions' ORDER BY `id` DESC";
				$rows_mn = $pdo->pdoGetAll($sql_mn);
				foreach($rows_mn as $result_mn) {
				?>
                <option <? if($result['menu_id'] == $result_mn['id']){ echo 'selected="selected"'; } ?> value="<?= $result_mn['id'] ?>">
                <?= $result_mn['title'] ?>
                </option>
                <? } ?>
              </select>
        </div>
      </div>      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">عنوان المسابقة</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
        </div>
      </div>
            <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">تاريخ المسابقة</label>
        <div class="col-sm-10">
          <input name="date_competition" type="text" class="form-control" id="bs-datepicker-example" value="<?= $result['date_competition'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">وقت البرنامج</label>
        <div class="col-sm-10">
          <div class="radio" style="margin-top: 0;">
            <label>
              <input name="time_competition" type="radio" class="px" id="optionsRadios1" value="AM" <? if($result['time_competition'] == 'AM'){ echo 'checked="checked"'; } ?>>
              <span class="lbl">صباحي</span> </label>
          </div>
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="time_competition" id="optionsRadios1" value="PM" class="px" <? if($result['time_competition'] == 'PM'){ echo 'checked="checked"'; } ?>>
              <span class="lbl">مسائي</span> </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">هل يحتاج حضور ام لا</label>
        <div class="col-sm-10">
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="need_attend" id="optionsRadios1" value="yes" <? if($result['need_attend'] == 'yes'){ echo 'checked="checked"'; } ?> class="px">
              <span class="lbl">نعم</span> </label>
          </div>
          <div class="radio" style="margin-top: 0;">
            <label>
              <input type="radio" name="need_attend" id="optionsRadios1" value="no" class="px" <? if($result['need_attend'] == 'no'){ echo 'checked="checked"'; } ?>>
              <span class="lbl">لا</span> </label>
          </div>
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
