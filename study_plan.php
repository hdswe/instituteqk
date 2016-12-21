<?
 include('header.php');

?>
<style>

.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    vertical-align: middle;
	    padding: 10px;
}
th { text-align:center }
</style>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2>الخطة الدراسية</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="sp-main-body" class="page-class">
            <div class="container">
              <table cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                
                <tr>
                  <th rowspan="3" align="center" valign="bottom" bgcolor="#F5F5F5">المجال</th>
                  <th width="30%" rowspan="3" align="center" valign="bottom" bgcolor="#F5F5F5">المقرر الدراسي</th>
                  <th colspan="3" align="center" valign="bottom" bgcolor="#F5F5F5">الدبلوم العالي</th>
                  <th rowspan="3" align="center" valign="bottom" bgcolor="#F5F5F5">الوزن النسبي للمقرر</th>
                  <th width="10%" rowspan="3" align="center" valign="bottom" bgcolor="#F5F5F5">الوزن النسبي للمجال</th>
                </tr>
                <tr>
                  <th colspan="2" align="center" valign="bottom" bgcolor="#F5F5F5">المستوى</th>
                  <th rowspan="2" align="center" valign="bottom" bgcolor="#F5F5F5">الوحدات التعليمية</th>
                </tr>
                <tr>
                  <th align="center" valign="bottom" bgcolor="#F5F5F5">1</th>
                  <th align="center" valign="bottom" bgcolor="#F5F5F5">2</th>
                </tr>
				<?
				$sql = "SELECT * FROM `diploma_area` ORDER BY `id` ASC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
					//count diploma course
					$sql_count_diploma_course = $pdo->pdoExecute("SELECT * FROM `diploma_course` WHERE `area_id` = ".$result['id']."");
					$count_diploma_course = $pdo->pdoRowCount($sql_count_diploma_course);

                    $rows_diploma_course = $pdo->pdoGetAll("SELECT * FROM `diploma_course` WHERE `area_id` = ".$result['id']."");

                    foreach($rows_diploma_course as $result_diploma_course) {
				   $sum = $result_diploma_course['relative_weight']; 
				   $esum = $sum + $esum;

					}
                    $rows_diploma_course = $pdo->pdoGetAll("SELECT * FROM `diploma_course` WHERE `area_id` = ".$result['id']."");
					$i = 1;
                    foreach($rows_diploma_course as $result_diploma_course) {
                    ?>
                <tr>
                <? if($i == 1) { ?>
                  <td align="center" valign="middle" <? if($i == 1) { echo 'rowspan="'.$count_diploma_course.'"'; } ?>><?= $result['title'] ?></td>
                  <? } ?>
                  <td align="center" valign="middle"><a href="#" data-toggle="tooltip" data-placement="top" title="<?= $result_diploma_course['details'] ?>"><?= $result_diploma_course['title'] ?></a></td>
                  <td align="center" valign="middle"><?= $result_diploma_course['level'] ?></td>
                  <td align="center" valign="middle"><?= $result_diploma_course['level'] ?></td>
                  <td align="center" valign="middle"><?= $result_diploma_course['modules'] ?></td>
                  <td align="center" valign="middle"><?= $result_diploma_course['relative_weight'] ?>%</td>
                <? if($i == 1) { ?>
                  <td align="center" valign="middle" <? if($i == 1) { echo 'rowspan="'.$count_diploma_course.'"'; } ?>><?

				   echo $esum;
				   ?></td>
                  <? } ?>
                </tr>
                <? $i++; } ?>
                  <? } ?>
<!--                <tr>
                  <td colspan="2" width="183">مجموع المحاضرات</td>
                  <td>24</td>
                  <td>24</td>
                  <td>48</td>
                  <td>100%</td>
                  <td dir="LTR">100%</td>
                </tr>
                <tr>
                  <td colspan="2" width="183">مجموع المقررات</td>
                  <td>13</td>
                  <td>12</td>
                  <td>25</td>
                  <td>-</td>
                  <td dir="LTR">-</td>
                </tr>
-->              </table>
            </div>
         </section>
         
         <? include('footer.php'); ?>

        