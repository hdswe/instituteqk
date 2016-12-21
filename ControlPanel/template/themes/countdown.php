
<form method="post" enctype="multipart/form-data" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات العداد</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">النص</label>
        <div class="col-sm-10">
        <textarea name="event_countdown_text" class="form-control" id="event_countdown_text"><?= $result['event_countdown_text'] ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">التاريخ</label>
        <div class="col-sm-10">
                  <input name="event_countdown_date" type="text" class="form-control" id="event_countdown_date" placeholder="08/10/2015 12:00 AM" value="<?= $result['event_countdown_date'] ?>">

        </div>
      </div>
      
              
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" name="btnedit_event_countdown" id="btnedit_event_countdown" value="تعديل">
        </div>
      </div>
    </div>
  </div>
</form>
