				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('المعاهد');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">المعاهد</span>
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
									  <th>اسم المعهد</th>
									  <th>الرابط</th>
									  <th>ادارة الموظفين</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
                                    $sql = "SELECT * FROM `institutes` ORDER BY `id` DESC";
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $result['id'] ?></td>
									  <td><?= $result['title'] ?></td>
									  <td><a href="<?= $site_url ?>/institute/<?= $result['seo_link'] ?>"><?= $site_url ?>/institute/<?= $result['seo_link'] ?></a></td>
									  <td><a href="users.php?do=show&institute=<?= $result['id'] ?>">اضغط هنا لادارة موظفين المعهد</a></td>
									  <td class="center">
                                        <a href="?do=edit&id=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="تعديل" data-original-title="تعديل"><i class="fa fa-edit"></i></a>
                                        <a href="?del=<?= $result['id'] ?>&dir=<?= $result['seo_link'] ?>&user_id=<?= $result['user_id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ سيتم حذف كافه المدخلات المرتبطة بهذا المعهد وفي هذه الحالة لايمكن استرجاعه !')"><i class="fa fa-trash-o"></i></a>
                                        </td>
									</tr>
                                    <? } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>