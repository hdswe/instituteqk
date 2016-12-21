
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الفعالية</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">النص</label>
        <div class="col-sm-10">
        <textarea name="event_text" class="form-control" id="event_text"><?= $result['event_text'] ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">رابط للفعالية</label>
        <div class="col-sm-10">
                  <input name="event_link" type="text" class="form-control" id="event_link" value="<?= $result['event_link'] ?>">

        </div>
      </div>
      
              
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" name="btnedit_event" id="btnedit_event" value="تعديل">
        </div>
      </div>
    </div>
  </div>
</form>
