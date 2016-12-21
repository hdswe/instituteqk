<?
 include('header.php');
 	if($_GET['seo_link'] != NULL){
		$sql_post = "SELECT * FROM `blog` WHERE `seo_link` LIKE '".$_GET['seo_link']."'";
        $result_post = $pdo->pdoGetRow($sql_post);
		
/*		$sql = "SELECT * FROM `institutes` WHERE id=".$result_post['insert_id']."";
        $result = $pdo->pdoGetRow($sql, $data);
		$institute_id = $result['user_id'];
		$_SESSION['institute_name'] = $result['title'];
*/
	} else { die(); }

?>
         <!-- end header -->
         <!-- start page title -->
         <section id="sp-page-title">
            <div class="row">
               <div id="sp-title" class="col-sm-12 col-md-12">
                  <div class="sp-column "></div>
               </div>
            </div>
         </section>
         <!-- end page title -->
         <!-- start breadcrumbs -->
         <section id="sp-breadcrumbs">
            <div class="container">
               <div class="row">
                  <div id="sp-breadcrumb" class="col-sm-12 col-md-12">
                     <div class="sp-column ">
                        <div class="sp-module ">
                           <div class="sp-module-content">
                              <div class="lan_page_title">
                                 <span><?= $result_post['title'] ?></span>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end breadcrumbs -->
         <!-- start main body -->
         <section id="sp-main-body">
            <div class="container">
               <div class="row">
                  <div id="sp-component" class="col-sm-12 col-md-12">
                     <div class="sp-column ">
                        <div id="system-message-container">
                        </div>
                        <article class="item item-page">
                           <div class="entry-image full-image">
                             <img src="<?= $url_file ?>/upload/<?= $result_post['img'] ?>" class="img-responsive">
                           </div>
                           <div class="entry-header has-post-format">
                              <dl class="article-info">
                                 <dt class="article-info-term"></dt>
                                 <dd class="published">
                                    <i class="fa fa-calendar-o"></i>
                                    <time datetime="<?= date("F j, Y", $result_post['post_date']); ?>" data-toggle="tooltip" title="" data-original-title="Published Date">
                                     <?= date("F j, Y", $result_post['post_date']); ?></time>
                                 </dd>
                                 <dd class="hits">
                                    <span class="fa fa-eye"></span>
                                    Hits: 410
                                 </dd>
                                 
                              </dl>
                              <h2>
                                 <?= $result_post['title'] ?>							
                              </h2>
                           </div>
                           <div class="content_rating">
                              <p class="unseen element-invisible">User Rating:&nbsp;<span>5</span>&nbsp;/&nbsp;<span>5</span>
                              </p>
                              <img src="../media/system/images/rating_star.png" alt="Star Active">
                              <img src="../media/system/images/rating_star.png" alt="Star Active">
                              <img src="../media/system/images/rating_star.png" alt="Star Active">
                              <img src="../media/system/images/rating_star.png" alt="Star Active">
                              <img src="../media/system/images/rating_star.png" alt="Star Active">
                           </div>
                           <form method="post" action="#" class="form-inline">
                              <span class="content_vote">
                                 <label class="unseen element-invisible" for="content_vote_73">Please Rate</label>
                                 <select id="content_vote_73" name="user_rating">
                                    <option value="1">Vote 1</option>
                                    <option value="2">Vote 2</option>
                                    <option value="3">Vote 3</option>
                                    <option value="4">Vote 4</option>
                                    <option value="5" selected="selected">Vote 5</option>
                                 </select>
                                 &nbsp;<input class="btn btn-mini" type="submit" name="submit_vote" value="Rate"><input type="hidden" name="task" value="article.vote"><input type="hidden" name="hitcount" value="0"><input type="hidden" name="url" value="standard-post-formatf463.html?hitcount=0"><input type="hidden" name="93d9e17fd69fccbbd05f44b725e7fbc7" value="1">
                              </span>
                           </form>
                           <div class="content-para">
                              <?= $result_post['details'] ?>
                           </div>
                           
                           <div id="sp-comments"></div>
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <? include('footer.php'); ?>