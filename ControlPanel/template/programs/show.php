				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('قائمة البرامج');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">قائمة البرامج</span>
					</div>
					<div class="panel-body">
                                        <a href="?do=add" class="btn btn-primary btn-add">جديد</a>

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
									  <th>اسم البرنامج</th>
									  <th>صفحات البرنامج</th>
									  <th>الفعاليات</th>
									  <th>الطلاب</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
                                    $sql = "SELECT * FROM `programs` ORDER BY `id` DESC";
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $result['id'] ?></td>
									  <td><?= $result['title'] ?></td>
									  <td><a href="pages.php?do=programs_page&program_id=<?= $result['id'] ?>">ادارة الصفحات</a></td>
									  <td><a href="events_programs.php?do=show&program_id=<?= $result['id'] ?>">ادارة الفعاليات</a></td>
									  <td><a href="students.php?do=show&program=active&program_id=<?= $result['id'] ?>">المقبولين في البرنامج</a></td>
									  <td class="center">
                                        <a href="?do=edit&id=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="تعديل" data-original-title="تعديل"><i class="fa fa-edit"></i></a>
                                        <a href="?del=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ هذا الأجراء لايمكن التراجع عنه بعد تنفيذه')"><i class="fa fa-trash-o"></i></a>
                                        </td>
									</tr>
                                    <? } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>