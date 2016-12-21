<?php

	if(isset($_POST['btnsave'])) {
		$data['user_id']		= $result_user['id'];
		for($i=1; $i<=50; $i++){
			$data['f'.$i.'']		= trim($_POST['f'.$i.'']);
		}
			$insert					= $pdo->pdoInsUpd('account_assessment_student', $data);
		header('Location: ?do=account-assessment-student&process=successfully');
    }

	if(isset($_GET['student'])){ 
		$sql = "SELECT * FROM `account_assessment_student` WHERE `user_id` = ".$_GET['student']."";
		$execsql = $pdo->pdoExecute($sql);
		if($pdo->pdoRowCount($execsql) == 1) {
			$table_show = 'yes';
			$reslut = $pdo->pdoGetRow($sql);
		}
	}

?>
<style>
.tr-hed { background-color:#333; color:#FFF; font-weight:bold;  } 
.table>tbody>tr>th { vertical-align: middle; text-align:center; }
</style>
<? if($table_show != 'yes') { ?>

<form method="post">

<p>بطاقة تقييم طالبة /معلمة</p>
<div align="center" dir="rtl">
  <table width="100%" class="table table-bordered table-hover table-striped">
    <tr>
      <td>مهارة</td>
      <td>مفردات    المهارة</td>
      <td>الحد    الأعلى</td>
      <td>الدرجة    المستحقة</td>
    </tr>
    <tr>
      <td rowspan="10">تخطيط الدرس</td>
      <td>تكتب    الخطة الزمنية للمقررات</td>
      <td>2</td>
      <td valign="top"><input name="f1" type="text" id="f1" size="4"></td>
    </tr>
    <tr>
      <td>تكتب    عناصر التحضير اليومية كاملة (أهداف،محتوى،إجراءات وأساليب التدريس،الوسائل    التعليمية،التقويم،الواجب،المراجع)</td>
      <td>2</td>
      <td valign="top"><input name="f2" type="text" id="f2" size="4"></td>
    </tr>
    <tr>
      <td>تحلل    محتوى الدرس</td>
      <td>2</td>
      <td valign="top"><input name="f3" type="text" id="f3" size="4"></td>
    </tr>
    <tr>
      <td>تصوغ    الأهداف السلوكية المناسبة لموضوع الدرس.</td>
      <td>2</td>
      <td valign="top"><input name="f4" type="text" id="f4" size="4"></td>
    </tr>
    <tr>
      <td>تصوغ    التهيئة للدرس</td>
      <td>1</td>
      <td valign="top"><input name="f5" type="text" id="f5" size="4"></td>
    </tr>
    <tr>
      <td>تحدد    طرق التدريس المستخدمة واستراتيجياته</td>
      <td>2</td>
      <td valign="top"><input name="f6" type="text" id="f6" size="4"></td>
    </tr>
    <tr>
      <td>تختار    وسائل تعليمية مناسبة لموضوع الدرس.</td>
      <td>1</td>
      <td valign="top"><input name="f7" type="text" id="f7" size="4"></td>
    </tr>
    <tr>
      <td>تحدد    أساليب التقويم المناسبة.</td>
      <td>1</td>
      <td valign="top"><input name="f8" type="text" id="f8" size="4"></td>
    </tr>
    <tr>
      <td>توزع    زمن الحصة على عناصر الدرس.</td>
      <td>1</td>
      <td valign="top"><input name="f9" type="text" id="f9" size="4"></td>
    </tr>
    <tr>
      <td>تستعين    بالمراجع العلمية المناسبة لتوثيق المادة العلمية للدرس</td>
      <td>1</td>
      <td valign="top"><input name="f10" type="text" id="f10" size="4"></td>
    </tr>
    <tr>
      <td rowspan="15">تنفيذ الدرس</td>
      <td>تراجع    الدرس السابق.</td>
      <td>3</td>
      <td valign="top"><input name="f11" type="text" id="f11" size="4"></td>
    </tr>
    <tr>
      <td>تتقن    التلاوة الصحيحة.</td>
      <td>6</td>
      <td valign="top"><input name="f12" type="text" id="f12" size="4"></td>
    </tr>
    <tr>
      <td>تهيئ    للدرس بطريقة تثير دافعية الطالبة للتعلم.</td>
      <td>2</td>
      <td valign="top"><input name="f13" type="text" id="f13" size="4"></td>
    </tr>
    <tr>
      <td>تربط    الدرس بواقع الحياة العملية.</td>
      <td>2</td>
      <td valign="top"><input name="f14" type="text" id="f14" size="4"></td>
    </tr>
    <tr>
      <td>تربط    الطالبات بالآيات القرآنية وتدبر معانيها.</td>
      <td>3</td>
      <td valign="top"><input name="f15" type="text" id="f15" size="4"></td>
    </tr>
    <tr>
      <td>تراعي    التدرج عند عرض المعلومات.</td>
      <td>2</td>
      <td valign="top"><input name="f16" type="text" id="f16" size="4"></td>
    </tr>
    <tr>
      <td>تبسط    المعلومات بما يناسب المرحلة العمرية.</td>
      <td>2</td>
      <td valign="top"><input name="f17" type="text" id="f17" size="4"></td>
    </tr>
    <tr>
      <td>تستخدم    أساليب تدريسية حديثة ومنوعة ومحفزة للتعلم.</td>
      <td>2</td>
      <td valign="top"><input name="f18" type="text" id="f18" size="4"></td>
    </tr>
    <tr>
      <td>تعرض    أمثلة متنوعة لتحقيق أهداف الدرس.</td>
      <td>2</td>
      <td valign="top"><input name="f19" type="text" id="f19" size="4"></td>
    </tr>
    <tr>
      <td>تطرح    أسئلة سليمة الصياغة ذات مستويات تفكير متنوعة</td>
      <td>3</td>
      <td valign="top"><input name="f20" type="text" id="f20" size="4"></td>
    </tr>
    <tr>
      <td>تراعي    صحة المادة العلمية وحداثتها</td>
      <td>3</td>
      <td valign="top"><input name="f21" type="text" id="f21" size="4"></td>
    </tr>
    <tr>
      <td>توزع    زمن الحصة على مختلف عناصر الدرس.</td>
      <td>2</td>
      <td valign="top"><input name="f22" type="text" id="f22" size="4"></td>
    </tr>
    <tr>
      <td>تراعي    الفروق الفردية بين الطالبات.</td>
      <td>2</td>
      <td valign="top"><input name="f23" type="text" id="f23" size="4"></td>
    </tr>
    <tr>
      <td>تحرص    على تفاعل ومشاركة جميع الطالبات في أنشطة التعلم</td>
      <td>3</td>
      <td valign="top"><input name="f24" type="text" id="f24" size="4"></td>
    </tr>
    <tr>
      <td>تحرص    على سلامة اللغة ووضوح الصوت وتنوع الحركات التعبيرية المفيدة</td>
      <td>2</td>
      <td valign="top"><input name="f25" type="text" id="f25" size="4"></td>
    </tr>
  </table>
</div>
&nbsp;

<p dir="RTL">بطاقة تقييم طالبة /معلمة </p>
<div align="center" dir="rtl">
  <table width="100%" class="table table-bordered table-hover table-striped">
    <tr>
      <td>المهارة</td>
      <td>مفردات    المهارة</td>
      <td>الحد    الأعلى</td>
      <td>الدرجة    المستحقة</td>
    </tr>
    <tr>
      <td rowspan="4">الوسائل<br>
        التعليمية</td>
      <td>تستخدم    الوسائل التعليمية المناسبة للدرس.</td>
      <td>2</td>
      <td valign="top"><input name="f26" type="text" id="f26" size="4"></td>
    </tr>
    <tr>
      <td>تستخدم    السبورة بطريقة منظمة(صحة المعلومات،النظافة،وضوح الخط)</td>
      <td>1</td>
      <td valign="top"><input name="f27" type="text" id="f27" size="4"></td>
    </tr>
    <tr>
      <td>تعرض    الوسيلة  في الوقت المناسب.</td>
      <td>1</td>
      <td valign="top"><input name="f28" type="text" id="f28" size="4"></td>
    </tr>
    <tr>
      <td>تستخدم    الوسيلة بطريقة مشوقة للطالبات.</td>
      <td>1</td>
      <td valign="top"><input name="f29" type="text" id="f29" size="4"></td>
    </tr>
    <tr>
      <td rowspan="2">التعزيز</td>
      <td>تعزز    أداء الدارسات </td>
      <td>2</td>
      <td valign="top"><input name="f30" type="text" id="f30" size="4"></td>
    </tr>
    <tr>
      <td>تنوع    أساليب التعزيز المعنوي والمادي</td>
      <td>2</td>
      <td valign="top"><input name="f31" type="text" id="f31" size="4"></td>
    </tr>
    <tr>
      <td rowspan="3"><p align="right" dir="RTL">إدارة لحلقة</td>
      <td>تضبط    الحلقة على أسس تربوية</td>
      <td>2</td>
      <td valign="top"><input name="f32" type="text" id="f32" size="4"></td>
    </tr>
    <tr>
      <td>تعالج    المواقف الصفية الطارئة بطريقة تربوية</td>
      <td>1</td>
      <td valign="top"><input name="f33" type="text" id="f33" size="4"></td>
    </tr>
    <tr>
      <td>تتحرك    المعلمة داخل الحلقة في الوقت المناسب وحسب الموقف.</td>
      <td>1</td>
      <td valign="top"><input name="f34" type="text" id="f34" size="4"></td>
    </tr>
    <tr>
      <td rowspan="7">التقويم</td>
      <td>تستخدم    أنواع التقويم(قبلي،بنائي،بعدي).</td>
      <td>1</td>
      <td valign="top"><input name="f35" type="text" id="f35" size="4"></td>
    </tr>
    <tr>
      <td>تنوع    أساليب التقويم (شفوية،كتابية).</td>
      <td>1</td>
      <td valign="top"><input name="f36" type="text" id="f36" size="4"></td>
    </tr>
    <tr>
      <td>تربط    أسئلة التقويم بأهداف الدرس.</td>
      <td>1</td>
      <td valign="top"><input name="f37" type="text" id="f37" size="4"></td>
    </tr>
    <tr>
      <td>تكتشف    أخطاء التلاوة عند الدارسات.</td>
      <td>2</td>
      <td valign="top"><input name="f38" type="text" id="f38" size="4"></td>
    </tr>
    <tr>
      <td>تتمكن    من تصويب الخطأ.</td>
      <td>2</td>
      <td valign="top"><input name="f39" type="text" id="f39" size="4"></td>
    </tr>
    <tr>
      <td>تدون    الدرجات في سجل المتابعة.</td>
      <td>1</td>
      <td valign="top"><input name="f40" type="text" id="f40" size="4"></td>
    </tr>
    <tr>
      <td>تنهي    الدرس بطريقة شائقة مع ربط عناصره الرئيسية.</td>
      <td>1</td>
      <td valign="top"><input name="f41" type="text" id="f41" size="4"></td>
    </tr>
    <tr>
      <td rowspan="6">الصفات الشخصية</td>
      <td>تحرص    على القدوة في المظهر العام.</td>
      <td>3</td>
      <td valign="top"><input name="f42" type="text" id="f42" size="4"></td>
    </tr>
    <tr>
      <td>تلتزم    بالسلوكيات والأخلاقيات الإسلامية.</td>
      <td>3</td>
      <td valign="top"><input name="f43" type="text" id="f43" size="4"></td>
    </tr>
    <tr>
      <td>تتصف    باتزان الشخصية.</td>
      <td>2</td>
      <td valign="top"><input name="f44" type="text" id="f44" size="4"></td>
    </tr>
    <tr>
      <td>تستطيع    إدارة المواقف المختلفة.</td>
      <td>2</td>
      <td valign="top"><input name="f45" type="text" id="f45" size="4"></td>
    </tr>
    <tr>
      <td>تتقبل    التوجيهات والاستفادة منها.</td>
      <td>2</td>
      <td valign="top"><input name="f46" type="text" id="f46" size="4"></td>
    </tr>
    <tr>
      <td>تحرص    على المواظبة وعدم الغياب.</td>
      <td>2</td>
      <td valign="top"><input name="f47" type="text" id="f47" size="4"></td>
    </tr>
    <tr>
      <td rowspan="3">العلاقات</td>
      <td>مع    الإدارة</td>
      <td>3</td>
      <td valign="top"><input name="f48" type="text" id="f48" size="4"></td>
    </tr>
    <tr>
      <td>مع    المعلمات </td>
      <td>3</td>
      <td valign="top"><input name="f49" type="text" id="f49" size="4"></td>
    </tr>
    <tr>
      <td>مع    الطالبات</td>
      <td>3</td>
      <td valign="top"><input name="f50" type="text" id="f50" size="4"></td>
    </tr>
    <tr>
      <td>المجموع</td>
      <td width="89%" colspan="3">100</td>
    </tr>
  </table>
</div>
<input name="btnsave" type="submit" id="btnsave">
</form>
<? } else { ?>
<table width="100%" class="table table-bordered table-hover table-striped">
  <tr>
    <td>#</td>
    <th>اسم الطالب</th>
    <th>رقم بطاقة الاحوال</th>
    <th>رقم الجوال</th>
    <th>البريد الالكتروني</th>
    <th>&nbsp;</th>
  </tr>
	<?
	$i = 1;
	$sql = "SELECT * FROM `users` WHERE `group_id` = 3 ORDER BY `id` DESC";
	$rows = $pdo->pdoGetAll($sql);
	foreach($rows as $result) {
	?>
  <tr>
    <td><?= $i ?></td>
    <td><?= $result['first_name']." ".$result['father_name']." ".$result['grand_name']." ".$result['family_name'] ?></td>
    <td><?= $result['id_number'] ?></td>
    <td><?= $result['mobile'] ?></td>
    <td><?= $result['email'] ?></td>
    <td><a href="account.php?do=account-assessment-student&student=<?= $result['id'] ?>">التفاصيل</a></td>
  </tr>
  <? $i++; } ?>
</table>


<? } ?>