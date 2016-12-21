
      <link rel="stylesheet" href="../frontend/css/legacy.css" type="text/css" />

  <div class="panel">
    <div class="panel-heading"> <span class="panel-title">اعددات العضو</span> </div>
    <div class="panel-body">
<form method="post" class="form-horizontal" >
              <fieldset>
                
                <!-- Form Name -->
                <legend>بيانات عامة</legend>
                
                <!-- Text input-->
                <div class="control-group">
                  <label class="control-label" for="first_name">الاسم</label>
                  <div class="controls">
                    <div class="col-md-3">
                      <input name="first_name" type="text"  class="form-control" id="first_name" placeholder="الاسم الأول" value="<?= $result['first_name'] ?>">
                    </div>
                    <div class="col-md-3">
                      <input name="father_name" type="text"  class="form-control" id="father_name" placeholder="اسم الأب" value="<?= $result['father_name'] ?>">
                    </div>
                    <div class="col-md-3">
                      <input name="grand_name" type="text"  class="form-control" id="grand_name" placeholder="اسم الجد" value="<?= $result['grand_name'] ?>">
                    </div>
                    <div class="col-md-3">
                      <input name="family_name" type="text"  class="form-control" id="family_name" placeholder="اسم العائلة" value="<?= $result['family_name'] ?>">
                    </div>
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="nationality">الجنسية</label>
                  <div class="controls">
                    <input name="nationality" type="text"   class="form-control" id="nationality" placeholder="" value="<?= $result['nationality'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="marital_status">الحالة الاجتماعية</label>
                  <div class="controls">
                    <input name="marital_status" type="text"   class="form-control" id="marital_status"  placeholder="" value="<?= $result['marital_status'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="family_members">عدد افراد الاسرة</label>
                  <div class="controls">
                    <input name="family_members" type="text"   class="form-control" id="family_members" placeholder="" value="<?= $result['family_members'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="phone">رقم الهاتف</label>
                  <div class="controls">
                    <input name="phone" type="text"   class="form-control" id="phone" placeholder="" value="<?= $result['phone'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="mobile">الجوال</label>
                  <div class="controls">
                    <input name="mobile" type="text"   class="form-control" id="mobile" placeholder="" value="<?= $result['mobile'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="birthday">تاريخ الميلاد</label>
                  <div class="controls">
                    <input name="birthday" type="text"   class="form-control" id="birthday" placeholder="" value="<?= $result['birthday'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="state_birth">دولة الميلاد</label>
                  <div class="controls">
                    <input name="state_birth" type="text"   class="form-control" id="state_birth" placeholder="" value="<?= $result['state_birth'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="id_number">رقم السجل المدني/ الإقامة</label>
                  <div class="controls">
                    <input name="id_number" type="text"   class="form-control" id="id_number" placeholder="" value="<?= $result['id_number'] ?>">
                  </div>
                </div>
              </fieldset>
              <fieldset>
                
                <!-- Form Name -->
                <legend>المؤهل العلمي</legend>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="qualification">المؤهل العلمي</label>
                  <div class="controls">
                    <input name="qualification" type="text"  class="form-control" id="qualification" placeholder="" value="<?= $result['qualification'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="college">الكلية</label>
                  <div class="controls">
                    <input name="college" type="text"  class="form-control" id="college" placeholder="" value="<?= $result['college'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="specialization">التخصص</label>
                  <div class="controls">
                    <input name="specialization" type="text"  class="form-control" id="specialization" placeholder="" value="<?= $result['specialization'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="graduation_date">تاريخ التخرج</label>
                  <div class="controls">
                    <input name="graduation_date" type="text"  class="form-control" id="graduation_date" placeholder="" value="<?= $result['graduation_date'] ?>">
                  </div>
                </div>
                
                <!-- Multiple Radios -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="is_work_teaching_qoran">هل سبق العمل في مدارس تحفيظ القرآن الكريم؟</label>
                  <div class="col-md-4">
                    <div class="radio">
                      <label for="is_work_teaching_qoran-0">
                        <input type="radio" name="is_work_teaching_qoran" id="is_work_teaching_qoran-0" value="yes" <? if($result['is_work_teaching_qoran'] == 'yes'){ echo 'checked="checked"'; } ?>>
                        نعم </label>
                    </div>
                    <div class="radio">
                      <label for="is_work_teaching_qoran-1">
                        <input type="radio" <? if($result['is_work_teaching_qoran'] == 'no'){ echo 'checked="checked"'; } ?> name="is_work_teaching_qoran" id="is_work_teaching_qoran-1" value="no">
                        لا </label>
                    </div>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="supervision_centers">مركز الإشراف التابعة له </label>
                  <div class="controls">
                    <select id="supervision_centers" name="supervision_centers" class="form-control">
<?
	$sql_supervision_centers = $pdo->pdoGetAll("SELECT * FROM `supervision_centers` ORDER BY `id` DESC");
	foreach($sql_supervision_centers as $result_sp) {
?>
<option value="<?= $result_sp['id'] ?>" <? if($result['supervision_centers'] == $result_sp['id']){ echo 'selected'; } ?>><?= $result_sp['title'] ?></option>
<? } ?>
                    </select>
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="school_name">اسم المدرسة التابعة لها </label>
                  <div class="controls">
                    <input name="school_name" type="text"  class="form-control" id="school_name" placeholder="" value="<?= $result['school_name'] ?>">
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <!-- Form Name -->
                <legend>بيانات السكن</legend>
			<? if($_GET['case'] != 'program' && $_GET['case'] != 'competition'){ ?>

                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="types_diploma_id">المعهد المطلوب الالتحاق به </label>
                  <div class="controls">
                                      <select id="institute_id" name="institute_id" class="form-control">

<?
                                    $sql_institute = $pdo->pdoGetAll("SELECT * FROM `institutes` ORDER BY `id` DESC");
                                    foreach($sql_institute as $result_institute) {
?>                      <option value="<?= $result_institute['id'] ?>" <? if($result['institute_id'] == $result_institute['id']){ echo 'selected'; } ?>><?= $result_institute['title'] ?></option>
<? } ?>
</select>
                  </div>
                </div>
                
                <div class="control-group col-md-6">
                  <label class="control-label" for="types_diploma_id">نوع الدبلوم  </label>
                  <div class="controls">
                                      <select id="types_diploma_id" name="types_diploma_id" class="form-control">

<?
                                    $sql_types_diploma = $pdo->pdoGetAll("SELECT * FROM `types_diploma` ORDER BY `id` DESC");
                                    foreach($sql_types_diploma as $result_types_diploma) {
?>                      <option value="<?= $result_types_diploma['id'] ?>" <? if($result['types_diploma_id'] == $result_types_diploma['id']){ echo 'selected'; } ?>><?= $result_types_diploma['title'] ?></option>
<? } ?>
</select>
                  </div>
                </div>
                <? } else { ?>


                <? if($_GET['case'] == 'program') { ?>
                <div class="control-group col-md-6">
                  <label class="control-label" for="diploma_id">البرنامج</label>
                  <div class="controls">
                    <select id="program_id" name="program_id" class="form-control" required>
                      <option value="0">---أختر البرنامج---</option>
                      <?
	$sql_programs = $pdo->pdoGetAll("SELECT * FROM `programs` ORDER BY `id` DESC");
	foreach($sql_programs as $result_programs) {
?>
                      <option value="<?= $result_programs['id'] ?>" <? if($result['program_id'] == $result_programs['id']) { echo 'selected'; } ?>>
                      <?= $result_programs['title'] ?>
                      </option>
                      <? } ?>
                    </select>
                  </div>
                </div>
                <? } ?>
                <? if($_GET['case'] == 'competition') { ?>
                <div class="control-group col-md-6">
                  <label class="control-label" for="diploma_id">المسابقة</label>
                  <div class="controls">
                    <select id="competition_id" name="competition_id" class="form-control" required>
                      <option value="0">---أختر المسابقة---</option>
                      <?
	$sql_competition = $pdo->pdoGetAll("SELECT * FROM `competitions` ORDER BY `id` DESC");
	foreach($sql_competition as $result_competition) {
?>
                      <option value="<?= $result_competition['id'] ?>" <? if($result['competition_id'] == $result_competition['id']) { echo 'selected'; } ?>>
                      <?= $result_competition['title'] ?>
                      </option>
                      <? } ?>
                    </select>
                  </div>
                </div>
                <? } ?>
                
                <? } ?>
                <div class="control-group col-md-6">
                  <label class="control-label" for="types_diploma_id">مكان السكن</label>
                  <div class="controls">
                    <select id="address" name="address" class="form-control">
<?
	$sql_residential_neighborhoods = $pdo->pdoGetAll("SELECT * FROM `residential_neighborhoods` ORDER BY `id` DESC");
	foreach($sql_residential_neighborhoods as $result_residential_neighborhoods) {
?>	
<option value="<?= $result_residential_neighborhoods['id'] ?>" <? if($result['address'] == $result_residential_neighborhoods['id']){ echo 'selected'; } ?>><?= $result_residential_neighborhoods['title'] ?></option>
<? } ?>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="accommodation_type">نوع السكن</label>
                  <div class="controls">
                    <select id="accommodation_type" name="accommodation_type" class="form-control">
<?
	$sql_accommodation_type = $pdo->pdoGetAll("SELECT * FROM `accommodation_type` ORDER BY `id` DESC");
	foreach($sql_accommodation_type as $result_accommodation_type) {
?>	
<option value="<?= $result_accommodation_type['id'] ?>" <? if($result['accommodation_type'] == $result_accommodation_type['id']){ echo 'selected'; } ?>><?= $result_accommodation_type['title'] ?></option>
<? } ?>
                    </select>
                  </div>
                </div>
                
                <!-- Select Multiple -->
                
                
                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="is_transport_bus">هل ترغب النقل بواسطة حافلات المعهد؟ </label>
                  <div class="controls">
                    <select id="is_transport_bus" name="is_transport_bus" class="form-control">
                      <option value="نعم">نعم</option>
                      <option value="لا">لا</option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <!-- Form Name -->
                <legend>بيانات ولي أمر الطالبة</legend>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_name">الاسم</label>
                  <div class="controls">
                    <input name="parent_name" type="text"  class="form-control input-md" id="parent_name" placeholder="" value="<?= $result['parent_name'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_id">رقم الهوية</label>
                  <div class="controls">
                    <input name="parent_id" type="text"  class="form-control input-md" id="parent_id" placeholder="" value="<?= $result['parent_id'] ?>">
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_nationality">الجنسية</label>
                  <div class="controls">
<select name="parent_nationality" class="form-control" id="parent_nationality">
  <option value="إثيوبيا">إثيوبيا</option>
  <option value="أذربيجان">أذربيجان</option>
  <option value="الأرجنتين">الأرجنتين</option>
  <option value="الأردن">الأردن</option>
  <option value="جمهورية أرض الصومال">جمهورية أرض الصومال</option>
  <option value="أرمينيا">أرمينيا</option>
  <option value="أروبا">أروبا</option>
  <option value="إريتريا">إريتريا</option>
  <option value="إسبانيا">إسبانيا</option>
  <option value="أستراليا">أستراليا</option>
  <option value="إستونيا">إستونيا</option>
  <option value="عمان">عمان</option>
  <option value="جزيرة أسينشين">جزيرة أسينشين</option>
  <option value="جمهورية أفريقيا الوسطى">جمهورية أفريقيا الوسطى</option>
  <option value="أفغانستان">أفغانستان</option>
  <option value="أكروتيري ودكليا">أكروتيري ودكليا</option>
  <option value="الإكوادور">الإكوادور</option>
  <option value="ألبانيا">ألبانيا</option>
  <option value="ألمانيا">ألمانيا</option>
  <option value="الإمارات">الإمارات</option>
  <option value="أنتيغا وباربودا">أنتيغا وباربودا</option>
  <option value="جزر الأنتيل الهولندية">جزر الأنتيل الهولندية</option>
  <option value="أندورا">أندورا</option>
  <option value="إندونسيا">إندونسيا</option>
  <option value="أنغولا">أنغولا</option>
  <option value="أنغويلا">أنغويلا</option>
  <option value="الأوروغواي">الأوروغواي</option>
  <option value="أوزبكستان">أوزبكستان</option>
  <option value="أوستيا الجنوبية">أوستيا الجنوبية</option>
  <option value="أوغندا">أوغندا</option>
  <option value="أوكرانيا">أوكرانيا</option>
  <option value="أولان">أولان</option>
  <option value="إيران">إيران</option>
  <option value="جمهورية أيرلندا">جمهورية أيرلندا</option>
  <option value="أيسلندا">أيسلندا</option>
  <option value="إيطاليا">إيطاليا</option>
  <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
  <option value="الباراغواي">الباراغواي</option>
  <option value="باربادوس">باربادوس</option>
  <option value="باكستان">باكستان</option>
  <option value="بالاو">بالاو</option>
  <option value="البحرين">البحرين</option>
  <option value="البرازيل">البرازيل</option>
  <option value="البرتغال">البرتغال</option>
  <option value="جزر برمودا">جزر برمودا</option>
  <option value="بروناي">بروناي</option>
  <option value="بلجيكا">بلجيكا</option>
  <option value="بلغاريا">بلغاريا</option>
  <option value="بليز">بليز</option>
  <option value="بنغلاديش">بنغلاديش</option>
  <option value="بنما">بنما</option>
  <option value="بنين">بنين</option>
  <option value="البهاما">البهاما</option>
  <option value="بوتان">بوتان</option>
  <option value="بوتسوانا">بوتسوانا</option>
  <option value="بورتو ريكو">بورتو ريكو</option>
  <option value="بوركينا فاسو">بوركينا فاسو</option>
  <option value="بوروندي">بوروندي</option>
  <option value="البوسنة والهرسك">البوسنة والهرسك</option>
  <option value="بولندا">بولندا</option>
  <option value="بوليفيا">بوليفيا</option>
  <option value="بولينسيا الفرنسية">بولينسيا الفرنسية</option>
  <option value="جزر بيتكيرن">جزر بيتكيرن</option>
  <option value="البيرو">البيرو</option>
  <option value="تايلند">تايلند</option>
  <option value="تايوان">تايوان</option>
  <option value="ترانسنيستريا">ترانسنيستريا</option>
  <option value="جزر تركس وكايكوس">جزر تركس وكايكوس</option>
  <option value="تركمنستان">تركمنستان</option>
  <option value="تركيا">تركيا</option>
  <option value="تريستان دا كونا">تريستان دا كونا</option>
  <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
  <option value="تشاد">تشاد</option>
  <option value="التشيك">التشيك</option>
  <option value="تشيلي">تشيلي</option>
  <option value="تنزانيا">تنزانيا</option>
  <option value="توغو">توغو</option>
  <option value="توفالو">توفالو</option>
  <option value="توكلو">توكلو</option>
  <option value="تونس">تونس</option>
  <option value="تونغا">تونغا</option>
  <option value="تيمور الشرقية">تيمور الشرقية</option>
  <option value="جاميكا">جاميكا</option>
  <option value="الجبل الأسود">الجبل الأسود</option>
  <option value="مستعمرة جبل طارق">مستعمرة جبل طارق</option>
  <option value="الجزائر">الجزائر</option>
  <option value="جنوب أفريقيا">جنوب أفريقيا</option>
  <option value="جورجيا">جورجيا</option>
  <option value="جيبوتي">جيبوتي</option>
  <option value="جزيرة جيرزي">جزيرة جيرزي</option>
  <option value="الدانمارك">الدانمارك</option>
  <option value="رواندا">رواندا</option>
  <option value="روسيا">روسيا</option>
  <option value="روسيا البيضاء">روسيا البيضاء</option>
  <option value="رومانيا">رومانيا</option>
  <option value="زامبيا">زامبيا</option>
  <option value="زمبابوي">زمبابوي</option>
  <option value="ساحل العاج">ساحل العاج</option>
  <option value="ساموا">ساموا</option>
  <option value="ساموا الأمريكية">ساموا الأمريكية</option>
  <option value="سان بارتليمي">سان بارتليمي</option>
  <option value="سان بيار وميكلون">سان بيار وميكلون</option>
  <option value="سان مارتين">سان مارتين</option>
  <option value="سان مارينو">سان مارينو</option>
  <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
  <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
  <option value="سانت لوسيا">سانت لوسيا</option>
  <option value="سانت هلينا">سانت هلينا</option>
  <option value="ساو تومي وبرينسيبي">ساو تومي وبرينسيبي</option>
  <option value="سريلانكا">سريلانكا</option>
  <option value="السعودية">السعودية</option>
  <option value="سفالبارد">سفالبارد</option>
  <option value="السلفادور">السلفادور</option>
  <option value="سلوفاكيا">سلوفاكيا</option>
  <option value="سلوفينيا">سلوفينيا</option>
  <option value="جزر سليمان">جزر سليمان</option>
  <option value="سنغافورة">سنغافورة</option>
  <option value="السنغال">السنغال</option>
  <option value="سوازيلند">سوازيلند</option>
  <option value="السودان">السودان</option>
  <option value="سوريا">سوريا</option>
  <option value="سورينام">سورينام</option>
  <option value="السويد">السويد</option>
  <option value="سويسرا">سويسرا</option>
  <option value="سيراليون">سيراليون</option>
  <option value="سيشيل">سيشيل</option>
  <option value="شمال قبرص التركية">شمال قبرص التركية</option>
  <option value="الجمهورية العربية الصحراوية الديمقراطية">الجمهورية العربية الصحراوية الديمقراطية</option>
  <option value="جمهورية صربيا">جمهورية صربيا</option>
  <option value="الصومال">الصومال</option>
  <option value="جمهورية الصين الشعبية">جمهورية الصين الشعبية</option>
  <option value="طاجيكستان">طاجيكستان</option>
  <option value="العراق">العراق</option>
  <option value="الجزر العذراء الأمريكية">الجزر العذراء الأمريكية</option>
  <option value="الجزر العذراء البريطانية">الجزر العذراء البريطانية</option>
  <option value="جزيرة عيد الميلاد">جزيرة عيد الميلاد</option>
  <option value="الغابون">الغابون</option>
  <option value="غامبيا">غامبيا</option>
  <option value="غانا">غانا</option>
  <option value="غرينادا">غرينادا</option>
  <option value="غرينلاند">غرينلاند</option>
  <option value="غواتيمالا">غواتيمالا</option>
  <option value="غوام">غوام</option>
  <option value="غويانا">غويانا</option>
  <option value="غيرنزي">غيرنزي</option>
  <option value="غينيا">غينيا</option>
  <option value="غينيا الاستوائية">غينيا الاستوائية</option>
  <option value="غينيا بيساو">غينيا بيساو</option>
  <option value="الفاتيكان">الفاتيكان</option>
  <option value="جزر فارو">جزر فارو</option>
  <option value="فانواتو">فانواتو</option>
  <option value="فرنسا">فرنسا</option>
  <option value="الفلبين">الفلبين</option>
  <option value="فلسطين">فلسطين</option>
  <option value="فنزويلا">فنزويلا</option>
  <option value="فنلندا">فنلندا</option>
  <option value="جزر فوكلاند">جزر فوكلاند</option>
  <option value="فيتنام">فيتنام</option>
  <option value="فيجي">فيجي</option>
  <option value="قبرص">قبرص</option>
  <option value="قرة باغ">قرة باغ</option>
  <option value="قرغيزستان">قرغيزستان</option>
  <option value="قطر">قطر</option>
  <option value="جزر القمر">جزر القمر</option>
  <option value="كازاخستان">كازاخستان</option>
  <option value="كاليدونيا الجديدة">كاليدونيا الجديدة</option>
  <option value="الكاميرون">الكاميرون</option>
  <option value="جزر كايمان">جزر كايمان</option>
  <option value="كرواتيا">كرواتيا</option>
  <option value="كمبوديا">كمبوديا</option>
  <option value="كندا">كندا</option>
  <option value="كوبا">كوبا</option>
  <option value="كوريا الجنوبية">كوريا الجنوبية</option>
  <option value="كوريا الشمالية">كوريا الشمالية</option>
  <option value="كوستاريكا">كوستاريكا</option>
  <option value="كوسوفو">كوسوفو</option>
  <option value="جزر كوك">جزر كوك</option>
  <option value="جزر كوكس">جزر كوكس</option>
  <option value="كولومبيا">كولومبيا</option>
  <option value="جمهورية الكونغو">جمهورية الكونغو</option>
  <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
  <option value="الكويت">الكويت</option>
  <option value="كيريباس">كيريباس</option>
  <option value="كينيا">كينيا</option>
  <option value="لاتفيا">لاتفيا</option>
  <option value="لاوس">لاوس</option>
  <option value="لبنان">لبنان</option>
  <option value="لوكسمبورغ">لوكسمبورغ</option>
  <option value="ليبيا">ليبيا</option>
  <option value="ليبيريا">ليبيريا</option>
  <option value="ليتوانيا">ليتوانيا</option>
  <option value="ليختنشتاين">ليختنشتاين</option>
  <option value="ليسوتو">ليسوتو</option>
  <option value="جزر مارشال">جزر مارشال</option>
  <option value="جزر ماريانا الشمالية">جزر ماريانا الشمالية</option>
  <option value="ماكاو">ماكاو</option>
  <option value="المالديف">المالديف</option>
  <option value="مالطا">مالطا</option>
  <option value="مالي">مالي</option>
  <option value="ماليزيا">ماليزيا</option>
  <option value="جزيرة مان">جزيرة مان</option>
  <option value="مايوطه">مايوطه</option>
  <option value="المجر">المجر</option>
  <option value="مدغشقر">مدغشقر</option>
  <option value="مصر">مصر</option>
  <option value="المغرب">المغرب</option>
  <option value="مقدونيا">مقدونيا</option>
  <option value="المكسيك">المكسيك</option>
  <option value="ملاوي">ملاوي</option>
  <option value="المملكة المتحدة">المملكة المتحدة</option>
  <option value="منغوليا">منغوليا</option>
  <option value="موريتانيا">موريتانيا</option>
  <option value="موريشيوس">موريشيوس</option>
  <option value="موزمبيق">موزمبيق</option>
  <option value="مولدافيا">مولدافيا</option>
  <option value="موناكو">موناكو</option>
  <option value="مونتسرات">مونتسرات</option>
  <option value="ميانمار">ميانمار</option>
  <option value="ولايات ميكرونيسيا المتحدة">ولايات ميكرونيسيا المتحدة</option>
  <option value="ناميبيا">ناميبيا</option>
  <option value="ناورو">ناورو</option>
  <option value="النرويج">النرويج</option>
  <option value="النمسا">النمسا</option>
  <option value="جزيرة نورفولك">جزيرة نورفولك</option>
  <option value="النيبال">النيبال</option>
  <option value="النيجر">النيجر</option>
  <option value="نيجيريا">نيجيريا</option>

  <option value="***اراغوا">***اراغوا</option>
  <option value="نيوزيلندا">نيوزيلندا</option>
  <option value="نيويه">نيويه</option>
  <option value="هايتي">هايتي</option>
  <option value="الهند">الهند</option>
  <option value="هندوراس">هندوراس</option>
  <option value="هولندا">هولندا</option>
  <option value="هونغ كونغ">هونغ كونغ</option>
  <option value="والس وفوتونا">والس وفوتونا</option>
  <option value="الولايات المتحدة">الولايات المتحدة</option>
  <option value="اليابان">اليابان</option>
  <option value="اليمن">اليمن</option>
  <option value="اليونان">اليونان</option>
</select>

                    
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_source_nationality">مصدرها</label>
                  <div class="controls">
                    <input name="parent_source_nationality" type="text"  class="form-control" id="parent_source_nationality" placeholder="" value="<?= $result['parent_source_nationality'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_source_nationality">صلة القرابة</label>
                  <div class="controls">
                    <input name="parent_kinship" type="text"  class="form-control" id="parent_kinship" placeholder="" value="<?= $result['parent_kinship'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_history">تاريخها</label>
                  <div class="controls">
                    <input name="parent_history" type="text"  class="form-control" id="parent_history" placeholder="" value="<?= $result['parent_history'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_address">عنوان ولي أمر الطالبة</label>
                  <div class="controls">
                    <input name="parent_address" type="text"  class="form-control input-md" id="parent_address" placeholder="" value="<?= $result['parent_address'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_city">المدينة</label>
                  <div class="controls">
                    <input name="parent_city" type="text"  class="form-control input-md" id="parent_city" placeholder="" value="<?= $result['parent_city'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_district">الحي</label>
                  <div class="controls">
                    <input name="parent_district" type="text"  class="form-control input-md" id="parent_district" placeholder="" value="<?= $result['first_name'] ?>">
                  </div>
                </div>
                
                <!-- Search input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_street">الشارع</label>
                  <div class="controls">
                    <input name="parent_street" type="search"  class="form-control input-md" id="parent_street" placeholder="" value="<?= $result['parent_street'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_work_address">عنوان العمل</label>
                  <div class="controls">
                    <input name="parent_work_address" type="text"  class="form-control input-md" id="parent_work_address" placeholder="" value="<?= $result['parent_work_address'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_home_phone">هاتف المنزل</label>
                  <div class="controls">
                    <input name="parent_home_phone" type="text"  class="form-control input-md" id="parent_home_phone" placeholder="" value="<?= $result['parent_home_phone'] ?>">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="control-group col-md-6">
                  <label class="control-label" for="parent_mobile">هاتف الجوال</label>
                  <div class="controls">
                    <input name="parent_mobile" type="text"  class="form-control input-md" id="parent_mobile" placeholder="" value="<?= $result['parent_mobile'] ?>">
                  </div>
                </div>
                
                <div class="control-group col-md-12">

<input name="btnactive" type="submit" class="btn btn-primary" id="btnactive" value="تفعيل">
                </div>
              </fieldset>
            </form>

    </div>
  </div>
