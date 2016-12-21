
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الملف</span> </div>
    <div class="panel-body">
                <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">عنوان الملف</label>
            <div class="col-sm-10">
              <input name="title" type="text" class="form-control" id="title">
            </div>
          </div>
          <div class="form-group">

            <label class="col-sm-2 control-label">الملف</label>

                <div class="col-sm-10">

                  <input name="file" type="file" id="file" class="form-control">

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
						});

					});
				</script> 
