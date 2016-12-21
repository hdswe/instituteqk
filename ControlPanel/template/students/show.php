				<script>
					init.push(function () {
						$('#jq-datatables-example').dataTable();
						$('#jq-datatables-example_wrapper .table-caption').text('قائمة الطلاب');
						$('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'بحث ...');
					});
				</script>

<div class="panel">
					<div class="panel-heading">
						<span class="panel-title">الطلاب</span>
					</div>
					<div class="panel-body">
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
									  <th>#</th>
									  <th>اسم الطالب</th>
									  <th>رقم بطاقة الاحوال</th>
                                      <? if($_GET['type'] == 'program' || $_GET['type'] == 'competition'){
									  echo '<th>عنوان الفعالية</th>';
									  } ?>
									  <th>رقم الجوال</th>
									  <th>البريد الالكتروني</th>
									  <th>الحالة</th>
									  <th></th>
									</tr>
								</thead>
								<tbody>
									<?
									$i = 1;
									if($_GET['type'] == 'program'){
										$case_register = $_GET['case_register'];
										$sql = "Select
											  programs.id As programs_id,
											  register_events.id As register_events_id,
											  users.*,
											  register_events.type_event,
											  register_events.user_id,
											  register_events.event_id,
											  register_events.events_programs As events_programs1,
											  register_events.case_register,
											  programs.title
											From
											  register_events Inner Join
											  users
												On register_events.user_id = users.id Inner Join
											  programs
												On register_events.event_id = programs.id
											Where
											  register_events.type_event = 'programs' And
  											  register_events.case_register = '".$case_register."'";
									} elseif($_GET['type'] == 'competition'){
										$case_register = $_GET['case_register'];
										$sql = "Select
												  register_events.id As register_events_id,
												  users.*,
												  register_events.type_event,
												  register_events.user_id,
												  register_events.event_id,
												  register_events.events_programs As events_programs1,
											  	  register_events.case_register,
												  competitions.id As id1,
												  competitions.title
												From
												  register_events Inner Join
												  users
													On register_events.user_id = users.id Inner Join
												  competitions
													On register_events.event_id = competitions.id
												Where
												  register_events.type_event = 'competitions' And
  												  register_events.case_register = '".$case_register."'";
									} else {
										if($_SESSION['insert_id'] != 1) {
										$sql_user = $pdo->pdoGetRow("SELECT * FROM  `institutes` WHERE  `user_id`=".$_SESSION['insert_id']."");
										$institute_id = $sql_user['id'];
										$where = "AND institute_id=".$institute_id."";
										}
	
										$sql = "SELECT * FROM `users` WHERE group_id=3 ".$where." ORDER BY `id` DESC";
									
									}
									
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $i ?></td>
									  <td><?= $result['first_name']." ".$result['father_name']." ".$result['grand_name']." ".$result['family_name'] ?></td>
									  <td><?= $result['id_number'] ?></td>
                                      <? if($_GET['type'] == 'program' || $_GET['type'] == 'competition'){
									  echo '<td>'.$result['title'].'</td>';
									  } ?>
									  <td><?= $result['mobile'] ?></td>
									  <td><?= $result['email'] ?></td>
									  <td><?
									  if($_GET['type'] == 'program') {
										  echo '<a href="?case_register_events=acceptable&id='.$result['register_events_id'].'&type=program" class="btn btn-success btn-sm">قبول</a> &nbsp;';
										  echo '<a href="?case_register_events=unacceptable&id='.$result['register_events_id'].'&type=program" class="btn btn-danger btn-sm">رفض</a> &nbsp;';
										  echo '<a href="?case_register_events=winners&id='.$result['register_events_id'].'&type=program" class="btn btn-warning btn-sm">فائز</a>';
									  } elseif($_GET['type'] == 'competition'){
										  echo '<a href="?case_register_events=acceptable&id='.$result['register_events_id'].'&type=competition" class="btn btn-success btn-sm">قبول</a> &nbsp;';
										  echo '<a href="?case_register_events=unacceptable&id='.$result['register_events_id'].'&type=competition" class="btn btn-danger btn-sm">رفض</a> &nbsp;';
										  echo '<a href="?case_register_events=winners&id='.$result['register_events_id'].'&type=competition" class="btn btn-warning btn-sm">فائز</a> &nbsp;';
									  }else{ if($result['active'] == 'yes') echo 'مفعل'; else echo 'غير مفعل';  }
									   
									   ?></td>
									  <td class="center">
                                        <a href="?do=edit&id=<?= $result['id'] ?><? if($_GET['program'] == 'wating'){ echo'&case=program'; } if($_GET['competition'] == 'wating'){ echo'&case=competition'; } ?>" data-toggle="tooltip" data-placement="top" title="تعديل" data-original-title="تعديل"><i class="fa fa-edit"></i></a>
                                        <a href="?del=<?= $result['id'] ?>" data-toggle="tooltip" data-placement="top" title="حذف" data-original-title="حذف" onclick="return confirm('هل انت متأكد من عملية الحذف؟ هذا الأجراء لايمكن التراجع عنه بعد تنفيذه')"><i class="fa fa-trash-o"></i></a>
                                        </td>
									</tr>
                                    <? $i++; }  ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>