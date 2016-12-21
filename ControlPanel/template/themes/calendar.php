
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات التقويم</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">النص</label>
        <div class="col-sm-10">
        <textarea name="calendar_text" class="form-control" id="calendar_text"><?= $result['calendar_text'] ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">رابط صفحة التقويم</label>
        <div class="col-sm-10">
                  <input name="calendar_link" type="text" class="form-control" id="calendar_link" value="<?= $result['calendar_link'] ?>">

        </div>
      </div>
      
      <div class="form-group">

                <label class="col-sm-2 control-label">الصورة الحالية</label>

        <div class="col-sm-6">

               <img src="<?= $upload_folder.$result['calendar_img'] ?>" class="img-responsive" alt=""/> </div>
                 <input name="hdn_calendar_img" type="hidden" id="hdn_image" value="<?= $result['calendar_img'] ?>">
             </div>

              <div class="form-group">

                <label class="col-sm-2 control-label">صورة جديدة</label>

                <div class="col-sm-6">

                  <input name="calendar_img" type="file" id="calendar_img" class="form-control">

                </div>

              </div>


      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" name="btnedit_calendar" id="btnedit_calendar" value="تعديل">
        </div>
      </div>
    </div>
  </div>
</form>
