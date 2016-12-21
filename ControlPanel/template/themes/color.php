				<!-- Javascript -->

				<!-- / Javascript -->
	<link rel="stylesheet" href="assets/colorpicker/css/colorpicker.css" type="text/css" />
	<script type="text/javascript" src="assets/colorpicker/js/jquery.js"></script>
	<script type="text/javascript" src="assets/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="assets/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="assets/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="assets/colorpicker/js/layout.js?ver=1.0.2"></script>


				<script>

$('#colorpickerField1, #colorpickerField2, #colorpickerField3').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});

				</script>

<form method="post" class="form-horizontal">
  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات الألوان</span> </div>
    <div class="panel-body">
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">شريط القائمة</label>
        <div class="col-sm-10">
		<input name="navbar_color" type="text" class="form-control" id="colorpickerField1" value="<?= $result['navbar_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">القائمة المسندلة</label>
        <div class="col-sm-10">
          <input name="navbar_dropdown_color" type="text" class="form-control" id="colorpickerField2" value="<?= $result['navbar_dropdown_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون خط القائمة</label>
        <div class="col-sm-10">
          <input name="navbar_dropdown_color_font" type="text" class="form-control" id="colorpickerField2" value="<?= $result['navbar_dropdown_color_font'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون التضليل عند مرور الماوس</label>
        <div class="col-sm-10">
          <input name="navbar_dropdown_color_hover" type="text" class="form-control" id="colorpickerField2" value="<?= $result['navbar_dropdown_color_hover'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">خلفية عداد الفعاليات</label>
        <div class="col-sm-10">
          <input name="countdown_bg_color" type="text" class="form-control" id="colorpickerField2" value="<?= $result['countdown_bg_color'] ?>">
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون الفوتر</label>
        <div class="col-sm-10">
          <input name="footer_color" type="text" class="form-control" id="colorpickerField3" value="<?= $result['footer_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون شريط الحقوق</label>
        <div class="col-sm-10">
          <input name="footer_bottom_color" type="text" class="form-control" id="colorpickerField3" value="<?= $result['footer_bottom_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون الشريط على السلايد</label>
        <div class="col-sm-10">
          <input name="slidebar_color" type="text" class="form-control" id="colorpickerField3" value="<?= $result['slidebar_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">لون شريط العنوان</label>
        <div class="col-sm-10">
          <input name="breadcrumb_color" type="text" class="form-control" id="colorpickerField3" value="<?= $result['breadcrumb_color'] ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <input type="submit" class="btn btn-primary" name="btnedit_color" id="btnedit_color" value="تعديل">
        </div>
      </div>
    </div>
  </div>
</form>
