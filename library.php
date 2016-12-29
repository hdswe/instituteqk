<?
 include('header.php');


?>
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div class="sp-page-title">
                        <div class="container">
                           <h2>
						   <?
						    if($_GET['id'] == 1){ echo 'المكتبة الإدارية'; }
							elseif($_GET['id'] == 1){ echo 'المكتبة  التعليمية'; }
							elseif($_GET['id'] == 1){ echo 'المكتبة العامة'; }
							elseif($_GET['id'] == 1){ echo 'البحوث والدراسات'; }
							elseif($_GET['id'] == 1){ echo 'تنزيل المقررات'; }
						   
						   ?></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="sp-main-body" class="page-class">
            <div class="container">
            <div class="search">
<form method="get" class="form-inline">

  <div class="form-group">
    <label for="title">اسم الكتاب</label>
    <input name="title" type="text" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="author">المؤلف</label>
    <input name="author" type="text" class="form-control" id="author">
  </div>

  <div class="form-group">
    <label for="diploma_area_id">المجال</label>
<select name="diploma_area_id" class="form-control" id="diploma_area_id">
                <option value="0">بدون تصنيف</option>
                <?
				$sql = "SELECT * FROM `diploma_area` ORDER BY `id` DESC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['title'] ?>
                </option>
                <? } ?>
              </select>
  </div>

  <div class="form-group">
    <label for="diploma_course_id">التصنيف</label>
<select name="diploma_course_id" class="form-control" id="diploma_course_id">
                <option value="0">بدون تصنيف</option>
                <?
				$sql = "SELECT * FROM `diploma_course` ORDER BY `id` DESC";
				$rows = $pdo->pdoGetAll($sql);
				foreach($rows as $result) {
				?>
                <option value="<?= $result['id'] ?>">
                <?= $result['title'] ?>
                </option>
                <? } ?>
              </select> 
              
               </div>

    <div class="form-group">
<br>

  <input name="btnsearch" type="submit" id="btnsearch" class="btn btn-primary" value="بحث">
  </div>
</form>

			</div><br>
<br>

             <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
								<thead>
									<tr>
									  <th>#</th>
									  <th>اسم الكتاب</th>
									  <th>المؤلف</th>
									  <th>المجال</th>
									  <th>التصنيف</th>
									  <th>نوع الملف</th>
									  <th align="center">تحميل</th>
									</tr>
								</thead>
								<tbody>
									<?
									$i=1;
									if($_GET['title'] != ''){
									$sql = "SELECT * FROM `library` WHERE `title` LIKE '%".$_GET['title']."%'";
									} else {
                                    $sql = "SELECT * FROM `library` ORDER BY `id` DESC";
									}
                                    $rows = $pdo->pdoGetAll($sql);
                                    foreach($rows as $result) {
                                    ?>
									<tr class="odd gradeX">
									  <td><?= $i ?></td>
									  <td><?= $result['title'] ?></td>
									  <td><?= $result['author'] ?></td>
									  <td>
                                      <?
									  if($result['diploma_area_id'] == 0) {
										  echo "---";
									  } else {
										$sql_menu = "SELECT * FROM `diploma_area` where id=".$result['diploma_area_id']."";
										$result_menu = $pdo->pdoGetRow($sql_menu);
										echo $result_menu['title'];
									  }
									  ?>
                                      </td>
									  <td>                                      <?
									  if($result['diploma_course_id'] == 0) {
										  echo "---";
									  } else {
										$sql_menu = "SELECT * FROM `diploma_course` where id=".$result['diploma_course_id']."";
										$result_menu = $pdo->pdoGetRow($sql_menu);
										echo $result_menu['title'];
									  }
									  ?>
</td>

									  <td align="center" class="center">
                                        <p href="upload/<?= $result['file'] ?>" data-toggle="tooltip" data-placement="top" data-original-title="<?=pathinfo($result['file'], PATHINFO_EXTENSION)?>"><i class="
                                        <?$ext=pathinfo($result['file'], PATHINFO_EXTENSION); if($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png'|| $ext == 'gif'){echo 'fa fa-picture-o';}
                                            elseif($ext == 'mp4' || $ext == 'mov' || $ext == 'mpg' || $ext == 'flv'){echo 'fa fa-video-camera';}
                                            elseif($ext == 'mp3' || $ext == 'wav' || $ext == 'spx' || $ext == 'cda'){echo 'fa fa-file-audio-o';}
                                            else{echo 'fa fa-file';}

                                            ?>

                                        "></i></p>
                                      </td>
                                        <td align="center" class="center">
                                            <a href="upload/<?= $result['file'] ?>" data-toggle="tooltip" data-placement="top" title="تحميل" data-original-title="تحميل"><i class="fa fa-download"></i></a>
                                        </td>
									</tr>
                                    <? $i++; }  ?>
								</tbody>
			  </table>
             
            </div>
         </section>
         
         <? include('footer.php'); ?>

        