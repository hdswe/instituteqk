<?php
	if(isset($_POST['btnsave'])) {
		$data['user_id']		= $result_user['id'];
		for($i=1; $i<=24; $i++){
			$data['f'.$i.'']		= trim($_POST['f'.$i.'']);
		}
			$insert					= $pdo->pdoInsUpd('account_evaluate_educational_environment', $data);
		header('Location: ?do=account-evaluate-educational-environment&process=successfully');
    }
	
	$sql = "SELECT * FROM `account_evaluate_educational_environment` WHERE `user_id` = ".$result_user['id']."";
	$execsql = $pdo->pdoExecute($sql);
	if($pdo->pdoRowCount($execsql) == 1) {
		$table_show = 'yes';
		$reslut = $pdo->pdoGetRow($sql);
	}
 
?>
<style>
h1{  margin-bottom:20px; }
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<h1>تقييم البيئة التعليمية:</h1>
<p>أختنا الطالبة : فضلا عبري عن وجهة نظرك الخاصة بوضع إشارة على إحدى خلايا القياس المقابلة لكل بند من البنود</p>
<form method="post">
<? if($table_show == 'yes') { ?>
<div class="alert alert-success" role="alert">قمت بالتقييم مسبقاً وهذه هي نتيجة تقييمك</div>

<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td colspan="2" class="tr-hed">التعامل</td>
  </tr>
  <tr>
    <th width="20%">المحاضرات</th>
<td><?= $reslut['f1'] ?></td>  </tr>
  <tr>
    <th>الإداريات</th>
    <td><?= $reslut['f2'] ?></td>
  </tr>
  <tr>
    <th>الطالبات مع بعضهن</th>
    <td><?= $reslut['f3'] ?></td>
  </tr>
  <tr>
    <th>العاملات</th>
    <td><?= $reslut['f4'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">توقيت الدراسة</td>
  </tr>
  <tr>
    <th>بداية الفصل ونهايته</th>
    <td><?= $reslut['f5'] ?></td>
  </tr>
  <tr>
    <th>بداية اليوم الدراسي ونهايته</th>
    <td><?= $reslut['f6'] ?></td>
  </tr>
  <tr>
    <th>مدة المحاضرات</th>
    <td><?= $reslut['f7'] ?></td>
  </tr>
  <tr>
    <th>الاستراحة 25 دقيقة</th>
    <td><?= $reslut['f8'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">التجهيزات</td>
  </tr>
  <tr>
    <th>القاعة الدراسية</th>
    <td><?= $reslut['f9'] ?></td>
  </tr>
  <tr>
    <th>قاعة التدريب</th>
    <td><?= $reslut['f10'] ?></td>
  </tr>
  <tr>
    <th>التكييف</th>
    <td><?= $reslut['f11'] ?></td>
  </tr>
  <tr>
    <th>الاضاءة</th>
    <td><?= $reslut['f12'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الرسوم</td>
  </tr>
  <tr>
    <th>الدراسة</th>
    <td><?= $reslut['f13'] ?></td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><?= $reslut['f14'] ?></td>
  </tr>
  <tr>
    <th>الحضانة</th>
    <td><?= $reslut['f15'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الخدمات</td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><?= $reslut['f16'] ?></td>
  </tr>
  <tr>
    <th>المقصف</th>
    <td><?= $reslut['f17'] ?></td>
  </tr>
  <tr>
    <th>النظافة</th>
    <td><?= $reslut['f18'] ?></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">اثر المعهد على الطالبة</td>
  </tr>
  <tr>
    <th>العلمي</th>
    <td><?= $reslut['f19'] ?></td>
  </tr>
  <tr>
    <th>التربوي</th>
    <td><?= $reslut['f20'] ?></td>
  </tr>
  <tr>
    <th>أكتساب المهارات</th>
    <td><?= $reslut['f21'] ?></td>
  </tr>
  <tr>
    <th>تناقل التجارب بين المدارس</th>
    <td><?= $reslut['f22'] ?></td>
  </tr>
  <tr>
    <th>مقترحات</th>
    <td><?= $reslut['f23'] ?></td>
  </tr>
  <tr>
    <th>ملحوظات</th>
    <td><?= $reslut['f24'] ?></td>
  </tr>
</table>
<? } else { ?>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td colspan="2" class="tr-hed">التعامل</td>
  </tr>
  <tr>
    <th width="20%">المحاضرات</th>
<td><div class="form-group">
  <div class="col-md-12">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="f1" id="radios-0" value="ممتاز" checked="checked">
      ممتاز
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="f1" id="radios-1" value="جيد جدا">
      جيد جدا
    </label>
	</div>
  <div class="radio">
    <label for="radios-2">
      <input type="radio" name="f1" id="radios-2" value="جيد">
      جيد
    </label>
	</div>
  <div class="radio">
    <label for="radios-3">
      <input type="radio" name="f1" id="radios-3" value="مقبول">
      مقبول
    </label>
	</div>
  </div>
</div>

</td>  </tr>
  <tr>
    <th>الإداريات</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-4">
            <input type="radio" name="f2" id="radios-4" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-5">
            <input type="radio" name="f2" id="radios-5" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-6">
            <input type="radio" name="f2" id="radios-6" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-7">
            <input type="radio" name="f2" id="radios-7" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>الطالبات مع بعضهن</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-8">
            <input type="radio" name="f3" id="radios-8" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-9">
            <input type="radio" name="f3" id="radios-9" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-10">
            <input type="radio" name="f3" id="radios-10" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-11">
            <input type="radio" name="f3" id="radios-11" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>العاملات</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-12">
            <input type="radio" name="f4" id="radios-12" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-13">
            <input type="radio" name="f4" id="radios-13" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-14">
            <input type="radio" name="f4" id="radios-14" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-15">
            <input type="radio" name="f4" id="radios-15" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">توقيت الدراسة</td>
  </tr>
  <tr>
    <th>بداية الفصل ونهايته</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-20">
            <input type="radio" name="f5" id="radios-20" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-21">
            <input type="radio" name="f5" id="radios-21" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-22">
            <input type="radio" name="f5" id="radios-22" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-23">
            <input type="radio" name="f5" id="radios-23" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>بداية اليوم الدراسي ونهايته</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-24">
            <input type="radio" name="f6" id="radios-24" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-25">
            <input type="radio" name="f6" id="radios-25" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-26">
            <input type="radio" name="f6" id="radios-26" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-27">
            <input type="radio" name="f6" id="radios-27" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>مدة المحاضرات</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-28">
            <input type="radio" name="f7" id="radios-28" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-29">
            <input type="radio" name="f7" id="radios-29" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-30">
            <input type="radio" name="f7" id="radios-30" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-31">
            <input type="radio" name="f7" id="radios-31" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>الاستراحة 25 دقيقة</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-32">
            <input type="radio" name="f8" id="radios-32" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-33">
            <input type="radio" name="f8" id="radios-33" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-34">
            <input type="radio" name="f8" id="radios-34" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-35">
            <input type="radio" name="f8" id="radios-35" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">التجهيزات</td>
  </tr>
  <tr>
    <th>القاعة الدراسية</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-36">
            <input type="radio" name="f9" id="radios-36" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-37">
            <input type="radio" name="f9" id="radios-37" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-38">
            <input type="radio" name="f9" id="radios-38" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-39">
            <input type="radio" name="f9" id="radios-39" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>قاعة التدريب</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-40">
            <input type="radio" name="f10" id="radios-40" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-41">
            <input type="radio" name="f10" id="radios-41" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-42">
            <input type="radio" name="f10" id="radios-42" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-43">
            <input type="radio" name="f10" id="radios-43" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>التكييف</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-44">
            <input type="radio" name="f11" id="radios-44" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-45">
            <input type="radio" name="f11" id="radios-45" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-46">
            <input type="radio" name="f11" id="radios-46" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-47">
            <input type="radio" name="f11" id="radios-47" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>الاضاءة</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-48">
            <input type="radio" name="f12" id="radios-48" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-49">
            <input type="radio" name="f12" id="radios-49" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-50">
            <input type="radio" name="f12" id="radios-50" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-51">
            <input type="radio" name="f12" id="radios-51" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الرسوم</td>
  </tr>
  <tr>
    <th>الدراسة</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-52">
            <input type="radio" name="f13" id="radios-52" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-53">
            <input type="radio" name="f13" id="radios-53" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-54">
            <input type="radio" name="f13" id="radios-54" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-55">
            <input type="radio" name="f13" id="radios-55" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-56">
            <input type="radio" name="f14" id="radios-56" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-57">
            <input type="radio" name="f14" id="radios-57" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-58">
            <input type="radio" name="f14" id="radios-58" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-59">
            <input type="radio" name="f14" id="radios-59" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>الحضانة</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-60">
            <input type="radio" name="f15" id="radios-60" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-61">
            <input type="radio" name="f15" id="radios-61" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-62">
            <input type="radio" name="f15" id="radios-62" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-63">
            <input type="radio" name="f15" id="radios-63" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">الخدمات</td>
  </tr>
  <tr>
    <th>النقل</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-64">
            <input type="radio" name="f16" id="radios-64" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-65">
            <input type="radio" name="f16" id="radios-65" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-66">
            <input type="radio" name="f16" id="radios-66" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-67">
            <input type="radio" name="f16" id="radios-67" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>المقصف</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-68">
            <input type="radio" name="f17" id="radios-68" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-69">
            <input type="radio" name="f17" id="radios-69" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-70">
            <input type="radio" name="f17" id="radios-70" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-71">
            <input type="radio" name="f17" id="radios-71" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>النظافة</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-72">
            <input type="radio" name="f18" id="radios-72" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-73">
            <input type="radio" name="f18" id="radios-73" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-74">
            <input type="radio" name="f18" id="radios-74" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-75">
            <input type="radio" name="f18" id="radios-75" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" class="tr-hed">اثر المعهد على الطالبة</td>
  </tr>
  <tr>
    <th>العلمي</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-76">
            <input type="radio" name="f19" id="radios-76" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-77">
            <input type="radio" name="f19" id="radios-77" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-78">
            <input type="radio" name="f19" id="radios-78" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-79">
            <input type="radio" name="f19" id="radios-79" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>التربوي</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-80">
            <input type="radio" name="f20" id="radios-80" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-81">
            <input type="radio" name="f20" id="radios-81" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-82">
            <input type="radio" name="f20" id="radios-82" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-83">
            <input type="radio" name="f20" id="radios-83" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>أكتساب المهارات</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-84">
            <input type="radio" name="f21" id="radios-84" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-85">
            <input type="radio" name="f21" id="radios-85" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-86">
            <input type="radio" name="f21" id="radios-86" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-87">
            <input type="radio" name="f21" id="radios-87" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>تناقل التجارب بين المدارس</th>
    <td><div class="form-group">
      <div class="col-md-12">
        <div class="radio">
          <label for="radios-88">
            <input type="radio" name="f22" id="radios-88" value="ممتاز" checked="checked">
            ممتاز </label>
        </div>
        <div class="radio">
          <label for="radios-89">
            <input type="radio" name="f22" id="radios-89" value="جيد جدا">
            جيد جدا </label>
        </div>
        <div class="radio">
          <label for="radios-90">
            <input type="radio" name="f22" id="radios-90" value="جيد">
            جيد </label>
        </div>
        <div class="radio">
          <label for="radios-91">
            <input type="radio" name="f22" id="radios-91" value="مقبول">
            مقبول </label>
        </div>
      </div>
    </div></td>
  </tr>
  <tr>
    <th>مقترحات</th>
    <td><textarea name="f23" class="form-control" id="f23" rows="5"></textarea></td>
  </tr>
  <tr>
    <th>ملحوظات</th>
    <td><textarea name="f24" class="form-control" id="f24" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Submit"></td>
  </tr>
</table>
<? } ?>
</form>