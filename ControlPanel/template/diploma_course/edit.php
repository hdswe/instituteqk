
<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات المقرر</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">العنوان</label>
        <div class="col-sm-10">
          <input name="title" type="text" class="form-control" id="title" value="<?= $result['title'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">التفاصيل</label>
        <div class="col-sm-10">
        <textarea name="details" rows="4" class="form-control" id="details"><?= $result['details'] ?>
        </textarea>
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">المستوى</label>
        <div class="col-sm-10">
          <input name="level" type="text" class="form-control" id="level" value="<?= $result['level'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الوحدات التعليمية</label>
        <div class="col-sm-10">
          <input name="modules" type="text" class="form-control" id="modules" value="<?= $result['modules'] ?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">الوزن النسبي للمقرر</label>
        <div class="col-sm-10">
          <input name="relative_weight" type="text" class="form-control" id="relative_weight" value="<?= $result['relative_weight'] ?>">
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