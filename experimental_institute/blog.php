<?
 include('header.php');
 	if($_GET['cat'] != NULL){
		$sql_cat = "SELECT * FROM `blog_category` WHERE `id`=".$_GET['cat']."";
        $result_cat = $pdo->pdoGetRow($sql_cat);
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
                                 <span><?= $result_cat['title'] ?></span>
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
                        <div class="blog">
                           <div class="items-row row-0 row clearfix">
									<?
                                    $sql_blog = "SELECT * FROM `blog` WHERE category_id= ".$_GET['cat']." AND insert_id=".$institute_id." ORDER BY `id` DESC";
                                    $rows_blog = $pdo->pdoGetAll($sql_blog);
                                    foreach($rows_blog as $result_blog) {
                                    ?>
                              <div class="col-sm-6">
                                 <article class="item column-1">
                                 <div class="img-blog">
                                    <img src="<?= $url_file ?>/upload/<?= $result_blog['img'] ?>" class="img-responsive">
                                    </div>
                                    <div class="entry-header">
                                       <dl class="article-info">
                                          <dd class="published">
                                             <i class="fa fa-calendar-o"></i>
                                             <time datetime="<?= date("F j, Y", $result_blog['post_date']); ?>"  data-toggle="tooltip" title="Published Date">
                                             <?= date("F j, Y", $result_blog['post_date']); ?></time>
                                          </dd>
                                          <dd class="hits">
                                             <span class="fa fa-eye"></span>
                                             Hits: 102
                                          </dd>
                                       </dl>
                                       <h2>
                                          <a href="<?= $subdomain_url ?>/post/<?= $result_blog['seo_link'] ?>">
                                          <?= $result_blog['title'] ?>
                                          </a>
                                       </h2>
                                    </div>
									<?
									$text = strip_tags($result_blog['details']);
									$clean_text = cutText($text,400);
									echo "<p>".$clean_text."</p>";
									?>                                    
                                    <p class="readmore">
                                       <a class="btn btn-default" href="<?= $subdomain_url ?>/post/<?= $result_blog['seo_link'] ?>">
                                       التفاصيل...
                                       </a>
                                    </p>
                                 </article>
                                 <!-- end item -->
                              </div>
                              <? } ?>
                              <!-- end col-sm-* -->
                           </div>

                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <? include('footer.php'); ?>