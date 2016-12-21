<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الموقع</span> </div>
    <div class="panel-body">
      <? if ($_GET['process'] == 'successfully') { ?>
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        تمت العملية بنجاح </div>
      <? } ?>
      <ul id="uidemo-tabs-default-demo" class="nav nav-tabs">
        <li class="active"> <a href="#arabic" data-toggle="tab">عربي</a> </li>
        <li> <a href="#genral" data-toggle="tab">معلومات عامة</a> </li>
        <li> <a href="#contact" data-toggle="tab">بيانات الاتصال</a> </li>
      </ul>
      <div class="tab-content tab-content-bordered">
        <div class="tab-pane fade active in" id="arabic">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">اسم الموقع</label>
            <div class="col-sm-10">
              <input name="sitename" type="text" class="form-control" id="sitename" value="<?= $result['sitename'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الشعار</label>
            <div class="col-sm-10">
              <input name="description" type="text" class="form-control" id="description" value="<?= $result['description'] ?>">
              <p class="help-block">بكلمات قليلة، أكتب نبذة قصيرة عن الموقع.</p>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">رابط الموقع</label>
            <div class="col-sm-10">
              <input name="site_url" type="text" class="form-control" id="site_url" value="<?= $result['site_url'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">البريد الالكتروني</label>
            <div class="col-sm-10">
              <input name="site_email" type="text" class="form-control" id="site_email" value="<?= $result['site_email'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الكلمات المفتاحية</label>
            <div class="col-sm-10">
              <textarea name="keywords" rows="3" class="form-control" id="keywords"><?= $result['keywords'] ?>
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">مجلد رفع الملفات</label>
            <div class="col-sm-10">
              <input name="upload_folder" type="text" class="form-control" id="upload_folder" value="<?= $result['upload_folder'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الامتددات المسموحة</label>
            <div class="col-sm-10">
              <input name="types_fileupload" type="text" class="form-control" id="types_fileupload" value="<?= $result['types_fileupload'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">ألوان القالب</label>
            <div class="col-sm-10">
              <select name="theme_color" id="theme_color" class="form-control">
                <option value="theme-adminflare">theme-adminflare</option>
                <option value="theme-asphalt">theme-asphalt</option>
                <option value="theme-clean">theme-clean</option>
                <option value="theme-default">theme-default</option>
                <option value="theme-dust">theme-dust</option>
                <option value="theme-fresh">theme-fresh</option>
                <option value="theme-frost">theme-frost</option>
                <option value="theme-purple-hills">theme-purple-hills</option>
                <option value="theme-silver">theme-silver</option>
                <option value="theme-white">theme-white</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnedit" id="btnedit" value="تعديل">
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">الايميل المستقبل لنموذج الاتصال</label>
            <div class="col-sm-10">
              <input name="contact_form_email" type="text" class="form-control" id="contact_form_email" value="<?= $result['contact_form_email'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">بيانات الاتصال في الصفحة</label>
            <div class="col-sm-10">
              <textarea name="contact_form_details" rows="3" class="form-control" id="contact_form_details"><?= $result['contact_form_details'] ?>
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnedit" id="btnedit" value="تعديل">
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="genral">
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">أرقام الجوال المنشورة</label>
            <div class="col-sm-10">
              <input name="hed_phone" type="text" class="form-control" id="hed_phone" value="<?= $result['hed_phone'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">البريد الالكتروني المنشور</label>
            <div class="col-sm-10">
              <input name="hed_email" type="text" class="form-control" id="hed_email" value="<?= $result['hed_email'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">Facebook</label>
            <div class="col-sm-10">
              <input name="facebook" type="text" class="form-control" id="facebook" value="<?= $result['facebook'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">Twitter</label>
            <div class="col-sm-10">
              <input name="twitter" type="text" class="form-control" id="twitter" value="<?= $result['twitter'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">Youtube</label>
            <div class="col-sm-10">
              <input name="youtube" type="text" class="form-control" id="youtube" value="<?= $result['youtube'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">Instagram</label>
            <div class="col-sm-10">
              <input name="instagram" type="text" class="form-control" id="instagram" value="<?= $result['instagram'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">GooglePlus</label>
            <div class="col-sm-10">
              <input name="googleplus" type="text" class="form-control" id="googleplus" value="<?= $result['googleplus'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail2" class="col-sm-2 control-label">Flickr</label>
            <div class="col-sm-10">
              <input name="flickr" type="text" class="form-control" id="flickr" value="<?= $result['flickr'] ?>">
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-primary" name="btnedit" id="btnedit" value="تعديل">
            </div>
          </div>
        </div>
	</div>
      <!-- / .tab-content --> 
    </div>
  </div>
</form>
