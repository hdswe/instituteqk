
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات السلايد</span> </div>
    <div class="panel-body">

          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان السلايد</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
            <div class="col-sm-10">
              <input name="url" type="text" class="form-control" id="url">
            </div>
          </div>
          <div class="form-group">

            <label class="col-sm-2 control-label">الصورة</label>

                <div class="col-sm-10">

                  <input name="image" type="file" id="image" class="form-control">
                <p style="margin-top:10px;">القياس الخاص بالصور هو 1400 × 860 ويمكنك <a href="https://placeholdit.imgix.net/~text?txtsize=117&txt=1400%C3%97860&w=1400&h=931">تحميل النموذج من هنا</a></p>

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
							placeholder: "اختر العرض القاري"
						});

					});
				</script>
