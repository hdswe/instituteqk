
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">الشعار</span> </div>
    <div class="panel-body">
                  <div class="form-group">

                <label class="col-sm-2 control-label">الشعار الحالي بالهيدر</label>

                <div class="col-sm-6">

                <img src="<?= $upload_folder.$result['logo_header'] ?>" class="img-responsive" alt=""/> </div>
                  <input name="hdn_image_logo_header" type="hidden" id="hdn_image" value="<?= $result['logo_header'] ?>">
              </div>

              <div class="form-group">

                <label class="col-sm-2 control-label">شعار جديد للهيدر</label>

                <div class="col-sm-6">

                  <input name="logo_header" type="file" id="logo_header" class="form-control">

                </div>

              </div>

            <div class="form-group">

                <label class="col-sm-2 control-label">الشعار الحالي بالفوتر</label>

                <div class="col-sm-6">

                <img src="<?= $upload_folder.$result['logo_footer'] ?>" class="img-responsive" alt=""/> </div>
                  <input name="hdn_image_logo_footer" type="hidden" id="hdn_image" value="<?= $result['logo_footer'] ?>">
              </div>

              <div class="form-group">

                <label class="col-sm-2 control-label">شعار جديد بالفوتر</label>

                <div class="col-sm-6">

                  <input name="logo_footer" type="file" id="logo_footer" class="form-control">

                </div>

              </div>


      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" name="btnedit_logo" id="btnedit_logo" value="تعديل">
           <input type="submit" class="btn btn-primary" name="btndel_logo" id="btndel_logo" value="حذف الشعار">
        </div>
      </div>
    </div>
  </div>
</form>
