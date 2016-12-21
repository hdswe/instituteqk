<?
include('header.php');

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
         <!-- start main body -->
         <section id="sp-main-body">
            <div class="row">
               <div id="sp-component" class="col-sm-12 col-md-12">
                  <div class="sp-column ">
                     <div id="system-message-container">
                     </div>
                     <div id="sp-page-builder" class="sp-page-builder  page-7">
                        <div class="page-content">
                           <section class="sppb-section" style="background-color:#ffffff;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-12">
                                       <div class="sppb-addon-container" style="">
                                          <div class="sppb-addon sppb-addon-module ">
                                             <div class="sppb-addon-content">
                                                <!-- START REVOLUTION SLIDER 4.3.6 b3 fullwidth mode -->
                                                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:530px;">
                                                   <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:530px;height:530;">
                                                      <ul>
														<?
                                                            $sql_slide = $pdo->pdoGetAll("SELECT * FROM `slideshow` WHERE insert_id=".$institute_id." ORDER BY `id` DESC");
                                                            foreach($sql_slide as $result_slide) {
                                                        ?>                                                         
                                                         <!-- SLIDE  -->
                                                         <li data-transition="random-premium" data-slotamount="7" data-masterspeed="300">
                                                            <!-- MAIN IMAGE -->
                                                             <a href="<?=  $result_slide['url'] ?>"> <img src="<?= $url_file ?>/upload/<?= $result_slide['img'] ?>" alt="slide2" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"></a>
                                                            <!-- LAYERS -->
                                                            <!-- LAYER NR. 1 
                                                            <div class="tp-caption large_bold_white sfl tp-resizeme" data-x="0" data-y="150" data-speed="800" data-start="500" data-easing="Power3.easeInOut" data-splitin="words" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><? //= $result_slide['title'] ?>
                                                            </div>
                                                            <!-- LAYER NR. 3 -->
                                                            
                                                         </li>
                                                         <? } ?>
                                                      </ul>
                                                      <div class="tp-bannertimer tp-bottom" style="display:none; visibility: hidden !important;"></div>
                                                   </div>
                                                </div>
                                                <!-- END REVOLUTION SLIDER -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <section id="lan_countdown" class="sppb-section" style="bottom: -289px;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-8">
                                       <div class="sppb-row">
                                    <div class="sppb-col-sm-4">
                                       <div class="sppb-addon-container sppb-wow fadeInDown" style="" data-sppb-wow-duration="300ms" data-sppb-wow-delay="300ms">
                                          <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                                          <div class="sppb-addon sppb-addon-feature sppb-text-center ">
                                             <div class="sppb-addon-content">
                                                <div class="sppb-icon"><span style="display:inline-block;text-align:center;;"><i class="fa fa-gear" style="font-size:40px;width:42px;height:42px;line-height:42px;;"></i></span></div>
                                                <h3 class="sppb-feature-box-title" style=""><a href="<?= $subdomain_url ?>/register.php">تسجيل الطالبات</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sppb-col-sm-4">
                                       <div class="sppb-addon-container sppb-wow fadeInDown" style="" data-sppb-wow-duration="300ms" data-sppb-wow-delay="400ms">
                                          <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                                          <div class="sppb-addon sppb-addon-feature sppb-text-center ">
                                             <div class="sppb-addon-content">
                                                <div class="sppb-icon"><span style="display:inline-block;text-align:center;;"><i class="fa fa-envelope" style="font-size:40px;width:42px;height:42px;line-height:42px;;"></i></span></div>
                                                <h3 class="sppb-feature-box-title" style=""><a href="<?= $site_url ?>/login_employee.php">دخول الموظفين</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sppb-col-sm-4">
                                       <div class="sppb-addon-container sppb-wow fadeInDown" style="" data-sppb-wow-duration="300ms" data-sppb-wow-delay="400ms">
                                          <div class="sppb-empty-space  clearfix" style="margin-bottom:0px;"></div>
                                          <div class="sppb-addon sppb-addon-feature sppb-text-center ">
                                             <div class="sppb-addon-content">
                                                <div class="sppb-icon"><span style="display:inline-block;text-align:center;;"><i class="fa fa-sign-in" style="font-size:40px;width:42px;height:42px;line-height:42px;;"></i></span></div>
                                                <h3 class="sppb-feature-box-title" style=""><a href="<?= $subdomain_url ?>/login.php">دخول الطلاب</a></h3>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                    </div>
                                    <div class="sppb-col-sm-4 ">
                                       <div class="sppb-addon-container sppb-wow fadeInRight">
                                          <div class="sppb-addon sppb-addon-module countdown">
                                             <h3 class="sppb-addon-title">اخر الفعاليات</h3>
                                             <div class="sppb-addon-content">
                                                <div class="sp_countdown">
                                                   <div class="sp_countdown_pre_text">
                                                      <!-- Pre Text -->
                                                      <?= $event_countdown_text ?> 
                                                   </div>
                                                   <div id="sp_countdown_cntdwn111" class="sp_countdown_container">
                                                      <!-- Dynamically creates timer -->
                                                   </div>
                                                   <!-- Countdown Area -->
                                                   <!-- Button -->
                                                   <div class="sp_countdown_button">
                                                      <a class="button sp_countdown_button_link" href="index.html"><span></span></a>
                                                   </div>
                                                   <div class="clear"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <div class="clear"></div>
                           
                           <section class="sppb-section " style="padding:30px 0 0 0;margin-top: 290px;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-12">
                                       <div class="sppb-addon-container sppb-wow fadeInRight">
                                          <div class="sppb-addon sppb-addon-text-block sppb-text-right lan_title">
                                             <h3 class="sppb-addon-title">أخر الأخبار والمقالات</h3>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <section class="sppb-section" style="padding:55px 0 35px 0;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-8">
                                       <div class="sppb-addon-container sppb-wow fadeInLeft">
                                          <div class="sppb-addon sppb-addon-module ">
                                             <div class="sppb-addon-content">
                                                <div class="module">
                                                   <div class="lan_vertical_timeline">
                                                      <div class="lan_vertical_left">
                                                         <ul class="nav nav-tabs" role="tablist" id="myTab">
                                                         <?
														 $i = 1;
														 $sql_news = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE category_id=1 AND insert_id=".$institute_id." ORDER BY `id` DESC LIMIT 4");
														 foreach($sql_news as $result_news) {
														 ?>
                                                            <li role="presentation" <? if($i == 1) { echo 'class="active"'; }?>>
                                                               <a href="#<?= $result_news['post_date'] ?>" aria-controls="<?= $result_news['post_date'] ?>" role="tab" data-toggle="tab">
                                                                  <ul class="cbp_tmtimeline">
                                                                     <li>
                                                                        <div class="cbp_tmicon"></div>
                                                                        <div class="cbp_tmlabel">
                                                                           <h3><?= $result_news['title'] ?></h3>
																			<?
                                                                            $text = strip_tags($result_news['details']);
                                                                            $clean_text = cutText($text,150);
                                                                            echo "<p>".$clean_text."</p>";
                                                                            ?>                                    
                                                                        </div>
                                                                     </li>
                                                                  </ul>
                                                               </a>
                                                            </li>
                                                            <? $i++; } ?>
                                                         </ul>
                                                      </div>
                                                      <div class="lan_vertical_right tab-content">
                                                         <?
														 $i = 1;
														 $sql_news = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE category_id=1 AND insert_id=".$institute_id." ORDER BY `id` DESC LIMIT 4");
														 foreach($sql_news as $result_news) {
														 ?>
                                                         <div role="tabpanel" class="tab-pane <? if($i == 1) { echo 'active'; }?>" id="<?= $result_news['post_date'] ?>">
                                                            <div class="tab_img">
                                                               <img src="<?= $url_file ?>/upload/<?= $result_news['img'] ?>" alt="" />
                                                            </div>
                                                            <div class="tab_contain">
                                                               <h3><?= $result_news['title'] ?></h3>
																			<?
                                                                            $text = strip_tags($result_news['details']);
                                                                            $clean_text = cutText($text,400);
                                                                            echo "<p>".$clean_text."</p>";
                                                                            ?>                                    
                                                               <a class="btn btn-primary" href="<?= $subdomain_url ?>/post/<?= $result_news['seo_link'] ?>">التفاصيل</a>
                                                            </div>
                                                         </div>
                                                            <? $i++; } ?>
                                                      </div>
                                                   </div>
                                                   <div class="clear"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="sppb-col-sm-4">
                                       <div class="sppb-addon-containerlatest_news sppb-wow fadeInUp">
                                          <div class="sppb-addon sppb-addon-module ">
                                             <div class="sppb-addon-content">
                                                <div id="ns2-110" class="nssp2 ns2-110">
                                                   <div class="ns2-wrap">
                                                      <div id="ns2-art-wrap110" class="ns2-art-wrap nssp2-slide nssp2-fade nssp2-default ">
                                                         <div class="ns2-art-pages nss2-inner">
                                                            <div class="ns2-page item active">
                                                               <div class="ns2-page-inner">
                                                                  
														<?
														 $sql_blog = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE category_id=5 AND insert_id=".$institute_id." ORDER BY `id` DESC LIMIT 4");
														 foreach($sql_blog as $result_blog) {
														 ?>

                                                                  
                                                                  <div class="ns2-row  ns2-even">
                                                                     <div class="ns2-row-inner">
                                                                        <div class="ns2-column flt-left col-1">
                                                                           <div style="padding:3px 3px 3px 3px">
                                                                              <div class="ns2-inner">
                                                                                 <div class="ns2-date-blog">
                                                                                    <span class="ns2_date_day"><?= date("j", $result_blog['post_date']); ?></span>
                                                                                    <div class="ns2_date_month_year"><span class="ns2_date_month"><?= date("F", $result_blog['post_date']); ?></span><span class="ns2_date_year"><?= date("Y", $result_blog['post_date']); ?></span></div>
                                                                                 </div>
                                                                                 <h4 class="ns2-title">
                                                                                    <a href="<?= $subdomain_url ?>/post/<?= $result_blog['seo_link'] ?>">
                                                                                    <?= $result_blog['title'] ?>
                                                                                    </a>
                                                                                 </h4>
                                                                                 <div class="ns2-tools">
                                                                                 </div>
                                                                                 <a href="<?= $subdomain_url ?>/post/<?= $result_blog['seo_link'] ?>">
                                                                                 <img class="ns2-image" style="float:left;margin:0 10px 0 0" src="<?= $subdomain_url ?>/upload/<?= $result_blog['img'] ?>"  width="125px" height="90px" alt="Nullam velitmi feugiat etarcu neeh" title="Nullam velitmi feugiat etarcu neeh" />
                                                                                 </a>
                                                                                 <?
                                                                            $text = strip_tags($result_blog['details']);
                                                                            $clean_text = cutText($text,100);
                                                                            echo "<p class='ns2-introtext'>".$clean_text."</p>";
                                                                            ?>                                    
                                                                                 <div class="ns2-social">
                                                                                 </div>
                                                                                 <div class="clear"></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                     <div class="clear"></div>
                                                                  </div>
                                                                  <? } ?>
                                                                  <div class="clear"></div>
                                                               </div>
                                                               <!--end ns2-page-inner-->
                                                            </div>
                                                            
                                                         </div>
                                                         <div class="clear"></div>
                                                         <div class="ns2-art-controllers">
                                                            <div class="clear"></div>
                                                         </div>
                                                         <div class="clear"></div>
                                                      </div>
                                                      <!--End article layout-->
                                                      <!--Links Layout-->
                                                      <!--End Links Layout-->
                                                      <div class="clear"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <section id="lan_donate" class="sppb-section " style="padding:80px 0;color:#ffffff;background-image:url(<?= $subdomain_url ?>/upload/<?= $calendar_img ?>);background-repeat:no-repeat;background-size:cover;background-attachment:fixed;background-position:50% 50%;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-12">
                                       <div class="sppb-addon-container sppb-wow zoomIn">
                                          <div class="sppb-addon sppb-addon-cta">
                                             <div class="sppb-row">
                                                <div class="sppb-col-sm-8">
                                                   <h3 class="sppb-cta-title" style="color:#ffffff;">التقويم</h3>
                                                   <p class="sppb-cta-text"><a href="<?= $calendar_link ?>"><?= $calendar_text ?></a></p>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <section class="sppb-section " style="padding:30px 0 0 0;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-12">
                                       <div class="sppb-addon-container sppb-wow fadeInRight">
                                          <div class="sppb-addon sppb-addon-text-block sppb-text-right lan_title">
                                             <h3 class="sppb-addon-title">اخر الأحداث</h3>
                                             <div class="sppb-addon-content"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                           <section id="lan_events" class="sppb-section" style="padding:45px 0 55px 0;">
                              <div class="sppb-container">
                                 <div class="sppb-row">
                                    <div class="sppb-col-sm-12">
                                       <div class="sppb-addon-container sppb-wow fadeInUp">
                                          <div class="sppb-addon sppb-addon-module ">
                                             <div class="sppb-addon-content">
                                                <div id="ns2-123" class="nssp2 ns2-123">
                                                   <div class="ns2-wrap">
                                                      <div id="ns2-art-wrap123" class="ns2-art-wrap nssp2-slide nssp2-default ">
                                                         <div class="ns2-art-pages nss2-inner">
                                                            <div class="ns2-page item active">
                                                               <div class="ns2-page-inner">
                                                                  <div class="ns2-row ns2-first ns2-odd">
                                                                     <div class="ns2-row-inner">
														<?
														 $sql_event = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE category_id=2 AND insert_id=".$institute_id." ORDER BY `id` DESC LIMIT 0,4");
														 foreach($sql_event as $result_event) {
														 ?>
                                                                        
                                                                        <div class="ns2-column flt-left col-4">
                                                                           <div style="padding:0 15px">
                                                                              <div class="ns2-inner">
                                                                                 <a href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>">
                                                                                 <img class="ns2-image" style="float:left;margin:0 0 20px 0" src="<?= $subdomain_url ?>/upload/<?= $result_event['img'] ?>" alt="Nullam velitmi feugiat etarcu neeh" title="Nullam velitmi feugiat etarcu neeh" />
                                                                                 </a>
                                                                                 <h4 class="ns2-title">
                                                                                    <a href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>">
                                                                                    <?= $result_event['title'] ?>
                                                                                    </a>
                                                                                 </h4>
                                                                                 <div class="ns2-tools">
                                                                                    <div class="ns2-created">
                                                                                       <?= date("F j, Y", $result_event['post_date']); ?> 
                                                                                    </div>
                                                                                 </div>
                                                                                 <?
                                                                            $text = strip_tags($result_event['details']);
                                                                            $clean_text = cutText($text,100);
                                                                            echo "<p class='ns2-introtext'>".$clean_text."</p>";
                                                                            ?>                                    
                                                                                 <div class="ns2-social">
                                                                                 </div>
                                                                                 <div class="ns2-links">
                                                                                    <a class="sppb-btn sppb-btn-primary ns2-readmore" href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>"><span>التفاصيل</span></a>
                                                                                 </div>
                                                                                 <div class="clear"></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <? } ?>
                                                                        
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                     <div class="clear"></div>
                                                                  </div>
                                                                  <div class="clear"></div>
                                                               </div>
                                                               <!--end ns2-page-inner-->
                                                            </div>
                                                            <div class="ns2-page item">
                                                               <div class="ns2-page-inner">
                                                                  <div class="ns2-row ns2-first ns2-odd">
                                                                     <div class="ns2-row-inner">
                                                                        
														<?
														 $sql_event = $pdo->pdoGetAll("SELECT * FROM `blog` WHERE category_id=2 AND insert_id=".$institute_id." ORDER BY `id` DESC LIMIT 4,8");
														 foreach($sql_event as $result_event) {
														 ?>
                                                                        
                                                                        <div class="ns2-column flt-left col-4">
                                                                           <div style="padding:0 15px">
                                                                              <div class="ns2-inner">
                                                                                 <a href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>">
                                                                                 <img class="ns2-image" style="float:left;margin:0 0 20px 0" src="<?= $subdomain_url ?>/upload/<?= $result_event['img'] ?>" alt="Nullam velitmi feugiat etarcu neeh" title="Nullam velitmi feugiat etarcu neeh" />
                                                                                 </a>
                                                                                 <h4 class="ns2-title">
                                                                                    <a href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>">
                                                                                    <?= $result_event['title'] ?>
                                                                                    </a>
                                                                                 </h4>
                                                                                 <div class="ns2-tools">
                                                                                    <div class="ns2-created">
                                                                                       <?= date("F j, Y", $result_event['post_date']); ?> 
                                                                                    </div>
                                                                                 </div>
                                                                                 <?
                                                                            $text = strip_tags($result_event['details']);
                                                                            $clean_text = cutText($text,100);
                                                                            echo "<p class='ns2-introtext'>".$clean_text."</p>";
                                                                            ?>                                    
                                                                                 <div class="ns2-social">
                                                                                 </div>
                                                                                 <div class="ns2-links">
                                                                                    <a class="sppb-btn sppb-btn-primary ns2-readmore" href="<?= $subdomain_url ?>/post/<?= $result_event['seo_link'] ?>"><span>التفاصيل</span></a>
                                                                                 </div>
                                                                                 <div class="clear"></div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                        <? } ?>
                                                                        
                                                                        
                                                                        <div class="clear"></div>
                                                                     </div>
                                                                     <div class="clear"></div>
                                                                  </div>
                                                                  <div class="clear"></div>
                                                               </div>
                                                               <!--end ns2-page-inner-->
                                                            </div>
                                                         </div>
                                                         <div class="clear"></div>
                                                         <div class="ns2-art-controllers">
                                                            <div class="clear"></div>
                                                         </div>
                                                         <div class="clear"></div>
                                                      </div>
                                                      <!--End article layout-->
                                                      <!--Links Layout-->
                                                      <!--End Links Layout-->
                                                      <div class="clear"></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </section>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end main body -->
<? include('footer.php'); ?>