
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الصفحة</span> </div>
    <div class="panel-body">
      
      <div class="tab-content tab-content-bordered">
        <div class="tab-pane fade active in" id="arabic">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان الصفحة</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
            </div>
          </div>
          <? if(!isset($_GET['program_id']) && !isset($_GET['diploma_id'])  && !isset($_GET['competition_id'])) { ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">الصورة الحالية</label>
            <div class="col-sm-6"> <img src="<?= $upload_folder.$result['img'] ?>" class="img-responsive" alt=""/> </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">صورة جديدة</label>
            <div class="col-sm-6">
              <input name="image" type="file" id="image" class="form-control">
              <input name="hdn_image" type="hidden" id="hdn_image" value="<?= $result['img'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">ربطه بالقائمة</label>
            <div class="col-sm-10">
              <select name="menu_id" class="form-control" id="jquery-select-customer">
                <option value="0">غير مربوط</option>
                <?
				$sql_mn = "SELECT * FROM `menu` ORDER BY `id` DESC";
				$rows_mn = $pdo->pdoGetAll($sql_mn);
				foreach($rows_mn as $result_mn) {
				?>
                <option <? if($result['menu_id'] == $result_mn['id']){ echo 'selected="selected"'; } ?> value="<?= $result_mn['id'] ?>">
                <?= $result_mn['title'] ?>
                </option>
                <? } ?>
              </select>
            </div>
          </div>
          <? } ?>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">التفاصيل</label>
            <div class="col-sm-10">
              <textarea name="details" rows="3" class="form-control" id="details"><?= stripslashes($result['details']) ?>
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
            <div class="col-sm-10">
              <input name="seo_link" type="text" class="form-control" id="seo_link" value="<?= $result['seo_link'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الوصف</label>
            <div class="col-sm-10">
              <textarea name="description" type="text" class="form-control" id="description"><?= $result['description'] ?>
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الكلمات المفتاحية</label>
            <div class="col-sm-10">
              <textarea name="keywords" type="text" class="form-control" id="keywords"><?= $result['keywords'] ?>
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnedit" id="btnedit" value="تعديل">
            </div>
          </div>
        </div>
      <!-- / .tab-pane --></div>
      <!-- / .tab-content --> 
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
