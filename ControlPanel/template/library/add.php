
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الكتاب</span> </div>
    <div class="panel-body">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان الكتاب</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title">
            </div>
          </div>
<div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">المؤلف</label>
            <div class="col-sm-10">
              <input name="author" type="text" class="form-control" id="author">
            </div>
      </div>
      <div class="form-group">
            <label class="col-sm-2 control-label">الملف</label>
            <div class="col-sm-10">
              <input name="file" type="file" id="file" class="form-control">
        </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">القسم</label>
            <div class="col-sm-10">
              <select name="category" class="form-control" id="jquery-select-customer">
                <option value="1">المكتبة الإدارية</option>
                <option value="2">المكتبة  التعليمية</option>
                <option value="3">المكتبة العامة</option>
                <option value="4">البحوث والدراسات</option>
                <option value="5">تنزيل المقررات</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">المجال</label>
            <div class="col-sm-10">
              <select name="diploma_area_id" class="form-control" id="jquery-select-customer">
                <option value="0">بدون تصنيف</option>
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
            <label class="col-sm-2 control-label">التصنيف</label>
            <div class="col-sm-10">
              <select name="diploma_course_id" class="form-control" id="jquery-select-customer2">
                <option value="0">بدون تصنيف</option>
                <?
				$sql = "SELECT * FROM `diploma_course` ORDER BY `id` DESC";
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
