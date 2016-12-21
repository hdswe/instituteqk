
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
        <label for="inputEmail2" class="col-sm-2 control-label">الرابط</label>
        <div class="col-sm-10">
          <input name="link" type="text" class="form-control" id="link" value="<?= $result['link'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label" >المكان</label>
        <div class="col-sm-10">
        <select name="block" id="block" class="form-control">
          <option value="1" <? if($result['block'] == '1'){ echo 'selected="selected"'; } ?>>1</option>
          <option value="2" <? if($result['block'] == '2'){ echo 'selected="selected"'; } ?>>2</option>
          <option value="3" <? if($result['block'] == '3'){ echo 'selected="selected"'; } ?>>3</option>
          <option value="4" <? if($result['block'] == '4'){ echo 'selected="selected"'; } ?>>4</option>
        </select>
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
