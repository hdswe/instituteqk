<?
 include('header.php');

?>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2>المرشحين في المسابقة</h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="sp-main-body" class="page-class">
            <div class="container">            
            <table class="table table-bordered table-striped">
  <tr>
    <th width="1">#</th>
    <th>الاسم</th>
    <th>رقم الهوية</th>
  </tr>
				<?
				$i=1;
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
											  register_events.type_event = 'competitions' And
											  register_events.event_id = ".$_GET['id']." And
  											  register_events.case_register = '".$case_register."'";

				$sql_student = $pdo->pdoGetAll($sql);
				foreach($sql_student as $result_student) {
				?>
  <tr>
    <td><?= $i ?></td>
	<td><?= $result_student['first_name']." ".$result['father_name']." ".$result['grand_name']." ".$result['family_name'] ?></td>
	<td><?= $result_student['id_number'] ?></td>
  </tr>
  <? $i++;  } ?>
</table>


            </div>
         </section>
         
         <? include('footer.php'); ?>

        