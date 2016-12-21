
<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات القائمة</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">عنوان القائمة</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
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
