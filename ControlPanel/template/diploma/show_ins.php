				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('عناصر الدبلومات');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">المعاهد</span>
					</div>
					<div class="panel-body">
					<a href="#" class="btn btn-primary btn-add" data-toggle="modal" data-target="#myModala">اضافة معهد لهذا الدبلوم</a>
                    <!-- Button trigger modal -->
<!-- Modal -->
<form method="post">
 <div class="modal fade" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">اضافة معهد</h4>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label class="col-sm-2 control-label">المعهد</label>
            <div class="col-sm-10">
              <select name="institutes_id" class="form-control" id="jquery-select-customer">
                <?
				$sql = "SELECT * FROM `institutes` ORDER BY `id` ASC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['title'] ?>
                </option>
                <? } ?>
              </select>
            </div>
          </div>
          
      </div>
      <div class="modal-footer">
        <input name="btnaddins" type="submit" class="btn btn-primary" id="btnaddins" value="اضافة">
      </div>
    </div>
  </div>
</div>
</form>

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
									  <th>المعهد</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
                                    $sql = "Select
  institutes.title,
  diploma_ins.id,
  diploma_ins.diploma_id,
  diploma_ins.ins_id,
  institutes.id As id1
From
  diploma_ins Inner Join
  institutes
    On diploma_ins.ins_id = institutes.id
	Where
  diploma_ins.diploma_id = ".$_GET['id']."";
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $result['id'] ?></td>
									  <td><?= $result['title'] ?></td>
									  <td class="center">
                                        <a href="?del_ins=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ هذا الأجراء لايمكن التراجع عنه بعد تنفيذه')"><i class="fa fa-trash-o"></i></a>
                                      </td>
									</tr>
                                    <? } ?>
								</tbody>
							</table>
						</div>
  </div>
				</div>
                
                
               