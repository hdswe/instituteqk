<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الكتاب</span> </div>
    <div class="panel-body">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان الكتاب</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
            </div>
          </div>
<div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">المؤلف</label>
            <div class="col-sm-10">
              <input name="author" type="text" class="form-control" id="author" value="<?= $result['author'] ?>">
            </div>
      </div>
      
      <div class="form-group">
            <label class="col-sm-2 control-label">القسم</label>
            <div class="col-sm-10">
              <select name="category" class="form-control" id="jquery-select-customer">
                <option value="1" <? if($result['category'] == 1){ echo 'selected="selected"'; } ?>>المكتبة الإدارية</option>
                <option value="2" <? if($result['category'] == 2){ echo 'selected="selected"'; } ?>>المكتبة  التعليمية</option>
                <option value="3" <? if($result['category'] == 3){ echo 'selected="selected"'; } ?>>المكتبة العامة</option>
                <option value="4" <? if($result['category'] == 4){ echo 'selected="selected"'; } ?>>البحوث والدراسات</option>
                <option value="5" <? if($result['category'] == 5){ echo 'selected="selected"'; } ?>>تنزيل المقررات</option>
              </select>
        </div>
      </div>
          
          
      <div class="form-group">
            <label class="col-sm-2 control-label">الملف الحالي</label>
        <div class="col-sm-6"> <a href="<?= $upload_folder.$result['file'] ?>" class="img-responsive" alt=""/> <?= $upload_folder.$result['file'] ?></a></div>
	<input name="hdn_file" type="hidden" id="hdn_file" value="<?= $result['file'] ?>">

          </div>
      <div class="form-group">
            <label class="col-sm-2 control-label">ملف جديد</label>
            <div class="col-sm-10">
              <input name="file" type="file" id="file" class="form-control">
        </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">المجال</label>
            <div class="col-sm-10">
              <select name="diploma_area_id" class="form-control" id="jquery-select-customer">
                <option value="0">بدون تصنيف</option>
                <?
				$sql_da = "SELECT * FROM `diploma_area` ORDER BY `id` DESC";
				$rows_da = $pdo->pdoGetAll($sql_da);
				foreach($rows_da as $result_da) {
				?>
                <option value="<?= $result_da['id'] ?>" <? if($result['diploma_area_id'] == $result_da['id']){ echo 'selected="selected"'; } ?>>
                <?= $result_da['title'] ?>
                </option>
                <? } ?>
              </select>
            </div>
          </div>

<div class="form-group">
            <label class="col-sm-2 control-label">التصنيف</label>
            <div class="col-sm-10">
              <select name="diploma_course_id" class="form-control" id="jquery-select-customer2">
                <option value="0">بدون تصنيف</option>
                <?
				$sql_dc = "SELECT * FROM `diploma_course` ORDER BY `id` DESC";
				$rows_dc = $pdo->pdoGetAll($sql_dc);
				foreach($rows_dc as $result_dc) {
				?>
                <option value="<?= $result_dc['id'] ?>" <? if($result['diploma_course_id'] == $result_dc['id']){ echo 'selected="selected"'; } ?>>
                <?= $result_dc['title'] ?>
                </option>
                <? } ?>
              </select>
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
						$("#jquery-select-customer2").select2({
							allowClear: true,
							placeholder: "العرض في القائمة"
						});

					});
				</script> 

