<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']		= $result_user['id'];
		for($i=1; $i<=42; $i++){
			$data['f'.$i.'']		= trim($_POST['f'.$i.'']);
		}
			$insert					= $pdo->pdoInsUpd('account_print_definition_benefit', $data);
		header('Location: print-definition-benefit.php');
    }

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>

<form method="post" enctype="multipart/form-data">

<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <th colspan="4" class="tr-hed">معلومات شخصية</th>
    </tr>
  <tr>
    <td>اسم الطالب رباعيا</td>
    <td colspan="3"><input type="text" name="f1" id="f1"></td>
    </tr>
  <tr>
    <td>تاريخ الميلاد</td>
    <td><input type="text" name="f2" id="f2"></td>
    <td>مكان الميلاد</td>
    <td><input type="text" name="f3" id="f3"></td>
  </tr>
  <tr>
    <td>عدد أقراد الأسرة</td>
    <td><input type="text" name="f4" id="f4"></td>
    <td>الوضع العائلي</td>
    <td><label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio1" value="option1"> مستقر 
</label>
<label class="radio-inline">
  <input type="radio" name="f5" id="inlineRadio2" value="option2"> يتيم 
</label>
</td>
  </tr>
  <tr>
    <td>رقم بطاقة الأحوال/الإقامة</td>
    <td><input type="text" name="f6" id="f6"></td>
    <td>الجنسية </td>
    <td><input type="text" name="f6" id="f6"></td>
  </tr>
  <tr>
    <td>مستوى تعليم الوالدين:الأب/الأم</td>
    <td colspan="3"><label class="radio-inline">
      <input type="radio" name="f7" id="inlineRadio1" value="أمي"> أمي 
      </label>
      <label class="radio-inline">
        <input type="radio" name="f7" id="inlineRadio2" value="دون القانوني"> دون القانوني
        </label>
      <label class="radio-inline">
        <input type="radio" name="f7" id="inlineRadio3" value="ثانوي"> ثانوي 
        </label>
      <label class="radio-inline">
        <input type="radio" name="f7" id="inlineRadio3" value="جامعي"> جامعي  
        </label>
</td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">معلومات السكن</th>
    </tr>
  <tr>
    <td>السـكن</td>
    <td colspan="3"><label class="radio-inline">
      <input type="radio" name="f8" id="inlineRadio1" value="مع العائلة"> مع العائلة 
      </label>
      <label class="radio-inline">
        <input type="radio" name="f8" id="inlineRadio2" value="سكن العمل"> سكن العمل
        </label>
      <label class="radio-inline">
        <input type="radio" name="f8" id="inlineRadio3" value="إيجار"> إيجار  
        </label>
      <label class="radio-inline">
        <input type="radio" name="f8" id="inlineRadio3" value="ملك"> ملك  
</label></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">عنوان المنزل</th>
    </tr>
  <tr>
    <td>الحـي </td>
    <td><input type="text" name="f9" id="f9"></td>
    <td>المدينة </td>
    <td><input type="text" name="f10" id="f10"></td>
  </tr>
  <tr>
    <td>هاتف المنزل</td>
    <td><input type="text" name="f11" id="f11"></td>
    <td>الجوَّال </td>
    <td><input type="text" name="f12" id="f12"></td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed">معـلـومـات وظـيفـية عن الوالد</th>
    </tr>
  <tr>
    <td>الحالة</td>
    <td colspan="3"><label class="radio-inline">
      <input type="radio" name="f13" id="inlineRadio1" value="لايعمل"> لايعمل 
      </label>
      <label class="radio-inline">
        <input type="radio" name="f13" id="inlineRadio2" value="متقاعد"> متقاعد 
        </label>
      <label class="radio-inline">
        <input type="radio" name="f13" id="inlineRadio3" value="عمل خاص"> عمل خاص  
        </label>
      <label class="radio-inline">
        <input type="radio" name="f13" id="inlineRadio3" value="موظف"> موظف   
</label>&nbsp;</td>
    </tr>
  <tr>
    <td>اسم جهة العمل</td>
    <td><input type="text" name="f14" id="f14"></td>
    <td>المدينة </td>
    <td><input type="text" name="f15" id="f15"></td>
  </tr>
  <tr>
    <td>الحي </td>
    <td><input type="text" name="f16" id="f16"></td>
    <td>هاتف </td>
    <td><input type="text" name="f17" id="f17"></td>
  </tr>
  <tr>
    <td>تحولية </td>
    <td><input type="text" name="f18" id="f18"></td>
    <td>المسمى الوظيفي</td>
    <td><input type="text" name="f19" id="f19"></td>
  </tr>
  <tr>
    <td>الراتب الشهري </td>
    <td><input type="text" name="f20" id="f20"></td>
    <td>سنوات الخدمة</td>
    <td><input type="text" name="f21" id="f21"></td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed">عنـوان المـراسـلة&nbsp;</th>
    </tr>
  <tr>
    <td>ص . ب </td>
    <td><input type="text" name="f22" id="f22"></td>
    <td>المدينة </td>
    <td><input type="text" name="f23" id="f23"></td>
  </tr>
  <tr>
    <td>الرمز البريدي</td>
    <td><input type="text" name="f24" id="f24"></td>
    <td>البريد الألكتروني</td>
    <td><input type="text" name="f25" id="f25"></td>
  </tr>
  <tr>
    <td>الصورة الفوتوغرافية&nbsp;</td>
    <td colspan="3"><input type="file" name="f26" id="f26"></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">معلومات صحية وسلوكية&nbsp;</th>
    </tr>
  <tr>
    <td>الحالة الصحية</td>
    <td colspan="3"><input type="text" name="f27" id="f27"></td>
    </tr>
  <tr>
    <th colspan="4" class="tr-hed">الصات الشخصية والسمات السلوكية&nbsp;</th>
    </tr>
  <tr>
    <td>البصر </td>
    <td><input type="text" name="f28" id="f28"></td>
    <td>السمع</td>
    <td><input type="text" name="f29" id="f29"></td>
  </tr>
  <tr>
    <td>النطق </td>
    <td><input type="text" name="f30" id="f30"></td>
    <td>الحركة </td>
    <td><input type="text" name="f31" id="f31"></td>
  </tr>
  <tr>
    <td>الاهتمام بالظهر العام</td>
    <td><input type="text" name="f32" id="f32"></td>
    <td>الشعور بالمسؤولية</td>
    <td><input type="text" name="f33" id="f33"></td>
  </tr>
  <tr>
    <td>النزعة القيادية</td>
    <td><input type="text" name="f34" id="f34"></td>
    <td>الشعور بالقلق</td>
    <td><input type="text" name="f35" id="f35"></td>
  </tr>
  <tr>
    <td>انفعالي </td>
    <td><input type="text" name="f36" id="f36"></td>
    <td>انظوائي </td>
    <td><input type="text" name="f37" id="f37"></td>
  </tr>
  <tr>
    <td>عدواني </td>
    <td><input type="text" name="f38" id="f38"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" class="tr-hed"> العنوان في البلد الأم (لغير السعوديين)   &nbsp;</th>
    </tr>
  <tr>
    <td>البلد </td>
    <td><input type="text" name="f39" id="f39"></td>
    <td>المدينة </td>
    <td><input type="text" name="f40" id="f40"></td>
  </tr>
  <tr>
    <td>ص . ب </td>
    <td><input type="text" name="f41" id="f41"></td>
    <td>هاتف </td>
    <td><input type="text" name="f42" id="f42"></td>
  </tr>
  <tr>
    <td><input type="submit" name="btnsave" id="btnsave" value="طباعة"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>