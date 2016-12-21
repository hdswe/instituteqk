

<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الصفحة</span> </div>
    <div class="panel-body">
      
      
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان السلايد</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
            <div class="col-sm-10">
              <input name="url" type="text" class="form-control" id="url" value="<?= $result['url'] ?>">
            </div>
          </div>
          <div class="form-group">

            <label class="col-sm-2 control-label">الصورة الحالية</label>

                <div class="col-sm-6">

                <img src="<?= $upload_folder.$result['img'] ?>" class="img-responsive" alt=""/> </div>

              </div>

              <div class="form-group">

                <label class="col-sm-2 control-label">صورة جديدة</label>

                <div class="col-sm-6">

                  <input name="image" type="file" id="image" class="form-control">

                  <input name="hdn_image" type="hidden" id="hdn_image" value="<?= $result['img'] ?>">

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
							placeholder: "اختر العرض القاري"
						});

					});
				</script>
