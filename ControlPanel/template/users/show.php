				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('قائمة الأعضاء');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">الأعضاء</span>
					</div>
					<div class="panel-body">
                    <? if($_SESSION['insert_id'] == '1') { ?>
					<a href="?do=add" class="btn btn-primary btn-add">اضافة مدير تقني للمعهد</a>
                    <? if($_GET['institute'] != '') { ?>
					<a href="?do=add&type=employee&institute=<?= $_GET['institute'] ?>" class="btn btn-primary btn-add">اضافة موظف</a>
					<? } } ?>

					<? if ($_GET['process'] == 'successfully') { ?>
                    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							 تمت العملية بنجاح
						</div>
                     <? } ?>
						<div class="table-light">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
								<thead>
									<tr>
									  <th>ID</th>
									  <th>اسم العضو</th>
									  <th>المجموعة</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
									if($_GET['institute'] != ''){
                                    $sql = "SELECT * FROM `users` WHERE institutes_id=".$_GET['institute']." ORDER BY `id` DESC";
									} else {

									$sql = "SELECT * FROM `users` WHERE group_id IN(1,2) ORDER BY `id` DESC";
									}
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $result['id'] ?></td>
									  <td><?= $result['username'] ?></td>
									  <td>
                                      <?
										$sql_group = "SELECT * FROM `group_users` where id=".$result['group_id']."";
										$result_group = $pdo->pdoGetRow($sql_group);
										echo $result_group['title'];
									  ?>
                                      </td>
									  <td class="center">
                                        <a href="?do=edit&id=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="تعديل" data-original-title="تعديل"><i class="fa fa-edit"></i></a>
                                        <a href="?del=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ هذا الأجراء لايمكن التراجع عنه بعد تنفيذه')"><i class="fa fa-trash-o"></i></a>
                                        </td>
									</tr>
                                    <? }  ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>