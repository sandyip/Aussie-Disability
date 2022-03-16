<?php get_header();
/*Template Name: About Us page*/
?>
            <section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo the_post_thumbnail_url();?>"></div>
                </div>
            </section>
            <div class="gray-bg3 brdcrmb-wrp">
                <div class="container">
                    <div class="brdcrmb-inr flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active"><?php the_title();?></li>
                        </ol>
                        <form class="pg-srch-frm">
                            <input type="text" placeholder="Search All Resources">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div><!-- Breadcrumbs Wrap -->
            <div class="container">
            <section>
                <div class="container">
                <div class="abt-why text-center">
                    <h4 style="color: #00c674; font-family: Rubik; font-weight: 400; font-size: 1.5rem;">Why choose us ?</h4>
                    <p itemprop="" style="margin-left: 50px; margin-right: 50px;"><?php the_field('title_content');?></p>
                </div>
                 <div class="spnsr-chld-dtl-tbs">
                                            <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#spnsr-chld1"><?php the_field('about_title_1');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld2"><?php the_field('about_title_2');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld3"><?php the_field('about_title_3');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld4"><?php the_field('about_title_4');?></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="spnsr-chld1">
                                                  <?php the_field('about_content_1');?>
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="spnsr-chld2">
                                                    <?php the_field('about_content_2');?>
                                                </div>
                                                <div class="tab-pane fade" id="spnsr-chld3">
                                                    <?php the_field('about_content_3');?>
                                                </div>
                                                <div class="tab-pane fade" id="spnsr-chld4">
                                                    <?php the_field('about_content_4');?>
                                                </div>
                                            </div>
                                        </div>
                </div>
              
            </section>
            <section>
                <div class="block">
                    <div class="container">
                        <div class="abt-pg-wrp">
                            <h2 itemprop="headline"><?php the_field('about_main_title');?></h2>
                            <div class="abt-pg-inr">
                                <div class="row align-items-center">
                                    <div class="col-md-7 col-sm-12 col-lg-7">
                                        <div class="abt-pg-desc">
                                            <?php the_field('about_main_content');?>
                                            
                            <?php 
                                $id_image = get_field('about_main_small_image');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>"alt="sgn.png" itemprop="image">

                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12 col-lg-5">
                                        <div class="abt-pg-imgs">
                                            <?php 
                                $id_image = get_field('about_main_image_1');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>"alt="sgn.png" itemprop="image">

                                <?php 
                                $id_image = get_field('about_main_image_2');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>"alt="sgn.png" itemprop="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Page Wrap -->
                    </div>
                </div>
            </section>    
            <!-- <section>
                <div class="block black-layer opc3">
                    <div class="fixed-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/prlx-bg7.jpg);"></div>
                    <div class="container">
                        <div class="vdo-wrp text-center">
                            <div class="vdo-inr">
                                <a href="https://www.youtube.com/embed/5Y0Qrtew4VE" data-fancybox title="" itemprop="url"><i class="fa fa-play thm-bg"></i><span>1:04</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section>
                <div class="block bottom-spac80 top-spac80 thm-layer opc9">
                    <div class="fixed-bg patern-bg thm-bg back-blend-multiply" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pattern-bg1.jpg);"></div>
                    <div class="container">
                        <div class="ceo-wrp">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-sm-4 col-lg-3">
                                    <span>
                                    	<?php 
                                $id_image = get_field('about_testimonial_img');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="ceo-img.jpg" itemprop="image">
                                    	
                                    </span>
                                </div>
                                <div class="col-md-9 col-sm-8 col-lg-9">
                                    <div class="ceo-msg">
                                        <p itemprop="description">“ <?php the_field('about_testimonial_content');?> ”</p>
                                        <cite>- <?php the_field('about_name_and_address');?></cite>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Ceo Wrap Style 1 -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block gray-layer opc97">
                    <div class="fixed-bg patern-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pattern-bg2.png);"></div>
                    <div class="container">
                        <div class="fq-wrp">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-lg-5">
                                    <div class="fq-lst-wrp">
                                        <h2 itemprop="headline" style="font-weight: 500;">Helping Faq's</h2>
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#fq-tb1"><?php the_field('question_1');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb2"><?php the_field('question_2');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb3"><?php the_field('question_3');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb4"><?php the_field('question_4');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb5"><?php the_field('question_5');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb6"><?php the_field('question_6');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb7"><?php the_field('question_7');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#fq-tb8"><?php the_field('question_8');?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-lg-7">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="fq-tb1">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_1');?></h2>
                                            <p itemprop="description"><?php the_field('question_1_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb2">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_2');?></h2>
                                            <p itemprop="description"><?php the_field('question_2_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb3">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_3');?></h2>
                                            <p itemprop="description"><?php the_field('question_3_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb4">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_4');?></h2>
                                            <p itemprop="description"><?php the_field('question_4_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb5">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_5');?></h2>
                                            <p itemprop="description"><?php the_field('question_5_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb6">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_6');?></h2>
                                            <p itemprop="description"><?php the_field('question_6_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb7">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_7');?></h2>
                                            <p itemprop="description"><?php the_field('question_7_ans');?></p>
                                        </div>
                                        <div class="tab-pane fade" id="fq-tb8">
                                            <h2 itemprop="headline" class="thm-clr"><?php the_field('question_8');?></h2>
                                            <p itemprop="description"><?php the_field('question_8_ans');?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Faq's Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block">
                    <div class="container">
                        <div class="sec-ttl text-center">
                            <div class="sec-ttl-inr">
                                <h2 itemprop="headline"><?php the_field('expert_title');?></h2>
                                <p><?php the_field('expert_subtitle');?></p>
                                <i class="flaticon-sweat thm-clr"></i>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="tem-wrp text-center remove-ext4">
                            <div class="row">

                            	<?php $args = array(
                            		'post_type'  => 'experts',
                            		'posts_per_page' => 4,
                            		'orderby'         => 'title',
                            		'order'           => 'ASC'
                            	);
                            	$experts = new WP_Query($args);
                            	while($experts->have_posts()) : $experts -> the_post();
                            	?>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="tem-bx">
                                        <div class="tem-thmb" style="background-image: url(<?php echo the_post_thumbnail_url();?>);">
                                            <a href="team-detail.html" title="" itemprop="url"><i class="fa fa-chevron-right"></i></a>
                                            <div class="tem-scl">
                                                <a class="facebook" href="<?php the_field('facebook_link');?>" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="pinterest" href="<?php the_field('pinterest_link');?>" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                                <a class="twitter" href="<?php the_field('twitter_link');?>" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                        <div class="tem-inf">
                                            <h4 itemprop="headline"><a href="team-detail.html" title="" itemprop="url"><?php the_title();?></a></h4>
                                            <span><?php the_field('position');?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata();?>
                                <div class="fndrs-desc">
                                    <a class="thm-btn" href="<?php echo site_url('/team');?>" title="" itemprop="url">View All<span></span></a>
                                </div>
                            </div>
                        </div><!-- Team Style 1 -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block remove-gap">
                    <div class="container">
                        <div class="fndrs-wrp">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="fndrs-desc">
                                        <h2 itemprop="headline"><?php the_field('bottom_title')?></h2>
                                        <p itemprop="description"><?php the_field('bottom_subtitle');?></p>
                                        <a class="thm-btn" href="#" title="" itemprop="url"><?php the_field('bottom_button');?><span></span></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="fndrs-img">
                                    	<?php 
                                $id_image = get_field('bottom_image');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>" alt="fndrs-img.png" itemprop="image">
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- Fundraising Wrap -->
                    </div>
                </div>
            </section>
        </div>
<?php get_footer();?>