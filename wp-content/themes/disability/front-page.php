<?php get_header();?>        
            <section>
                <div class="block remove-bottom">
                    <div class="fixed-bg shp-bg back-post-rgttp" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg.png);"></div>
                    <div class="container">
                        <div class="feat-wrp2">
                            <div class="row align-items-center">
                                <div class="col-md-5 col-sm-6 col-lg-5">
                                    <div class="feat-cap">
                                        <?php the_content();?>
                                        <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Start Donation<span></span></a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-6 col-lg-7">
                                    <div class="feat-img2 text-right">
                                        <img src="<?php echo the_post_thumbnail_url();?>" alt="feat-mckp.png" itemprop="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- Featured Area Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                <div class="block remove-gap">
                    <div class="fixed-bg shp-bg back-post-lftbtm" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg-shp1.png);"></div>
                    <div class="container">
                        <div class="abt-wrp3">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="abt-img">
                                        <?php 
                                                    $id_image = get_field('organize_image');
                                                    $image = wp_get_attachment_image_src($id_image, 'home');
                                                    ?>
                                                    <img src="<?php echo $image[0]; ?>"alt="orgn-mckp1.png" itemprop="image">
                                       
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="abt-desc3">
                                        <h2 itemprop="headline"><?php the_field('title_organize');?></h2>
                                        <p itemprop="description"><?php the_field('organize_content');?></p>
                                        <a class="thm-btn" href="<?php echo site_url('about');?>" title="" itemprop="url">View About Us<span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Style 3 -->
                    </div>
                </div>
            </section>
            <!-- <section>
                <div class="block">
                    <div class="container">
                        <div class="sec-ttl v2 text-center">
                            <div class="sec-ttl-inr">
                                <h2 itemprop="headline"><?php the_field('title_1');?></h2>
                                <span><?php the_field('content_1');?></span>
                            </div>
                        </div> --><!-- Sec Title Style 2 -->
                        <!-- <div class="orgn-wrp2 remove-ext3 text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                    	<?php 
		                                $id_image = get_field('image_1');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                        <?php 
		                                $id_image = get_field('image_2');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                        <?php 
		                                $id_image = get_field('image_3');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                        <?php 
		                                $id_image = get_field('image_4');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                        <?php 
		                                $id_image = get_field('image_5');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="orgn-bx2">
                                        <?php 
		                                $id_image = get_field('image_6');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                    </div>
                                </div>
                            </div>
                        </div> --><!-- Organization Wrap Style 2 -->
                    <!-- </div>
                </div>
            </section> -->
            <section>
                <div class="block remove-gap">
                    <div class="container">
                        <div class="cus-wrp style3 text-center remove-ext9">
                            <div class="services " style="margin-top: -7em; margin-bottom: 1rem;">
                                    <h4 class="service-title" style="font-size: 1.5rem; font-weight: 500; ">Our Services</h4>
                                    <p class="service-subtitle"><?php the_field('our_services_content');?> </p>
                                    <i class="flaticon-sweat thm-clr"></i><br>

                                </div>
                            <div class="row">
                                
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="cus-bx3">
                                        <div class="cus-thmb">
                                            <a href="cause-detail.html" title="" itemprop="url">
                                            	<?php 
					                                $id_image = get_field('charity_image_1');
					                                $image = wp_get_attachment_image_src($id_image, 'home');
					                                ?>
					                                <img src="<?php echo $image[0]; ?>"alt="cus-img3-1.jpg" itemprop="image">
                                            </a>
                                        </div>
                                        <div class="cus-inf3">
                                            <h4 itemprop="headline"><a href="cause-detail.html" title=""><?php the_field('charity_title_1');?></a></h4>
                                            <!-- <span class="cus-amt"><i class="thm-clr">$120 Raised</i> of $1,000</span> -->
                                            <div class="progress">
                                                <div class="progress-bar thm-bg wdth20"><span>20%</span></div>
                                            </div>
                                            <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="cus-bx3">
                                        <div class="cus-thmb">
                                            <a href="cause-detail.html" title="" itemprop="url">
                                            	<?php 
					                                $id_image = get_field('charity_image_2');
					                                $image = wp_get_attachment_image_src($id_image, 'home');
					                                ?>
					                                <img src="<?php echo $image[0]; ?>"alt="cus-img3-1.jpg" itemprop="image">
                                            </a>
                                        </div>
                                        <div class="cus-inf3">
                                            <h4 itemprop="headline"><a href="cause-detail.html" title=""><?php the_field('charity_title_2');?></a></h4>
                                            <!-- <span class="cus-amt"><i class="thm-clr">$120 Raised</i> of $1,000</span> -->
                                            <div class="progress">
                                                <div class="progress-bar thm-bg wdth45"><span>45%</span></div>
                                            </div>
                                            <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="cus-bx3">
                                        <div class="cus-thmb">
                                            <a href="cause-detail.html" title="" itemprop="url">
                                            	<?php 
					                                $id_image = get_field('charity_image_3');
					                                $image = wp_get_attachment_image_src($id_image, 'home');
					                                ?>
					                                <img src="<?php echo $image[0]; ?>"alt="cus-img3-1.jpg" itemprop="image">
                                            </a>
                                        </div>
                                        <div class="cus-inf3">
                                            <h4 itemprop="headline"><a href="cause-detail.html" title=""><?php the_field('charity_title_3');?></a></h4>
                                            <!-- <span class="cus-amt"><i class="thm-clr">$120 Raised</i> of $1,000</span> -->
                                            <div class="progress">
                                                <div class="progress-bar thm-bg wdth65"><span>65%</span></div>
                                            </div>
                                            <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="cus-bx3">
                                        <div class="cus-thmb">
                                            <a href="cause-detail.html" title="" itemprop="url">
                                            	<?php 
					                                $id_image = get_field('charity_image_4');
					                                $image = wp_get_attachment_image_src($id_image, 'home');
					                                ?>
					                                <img src="<?php echo $image[0]; ?>"alt="cus-img3-1.jpg" itemprop="image">
                                            </a>
                                        </div>
                                        <div class="cus-inf3">
                                            <h4 itemprop="headline"><a href="cause-detail.html" title=""><?php the_field('charity_title_4');?></a></h4>
                                            <!-- <span class="cus-amt"><i class="thm-clr">$120 Raised</i> of $1,000</span> -->
                                            <div class="progress">
                                                <div class="progress-bar thm-bg wdth80"><span>80%</span></div>
                                            </div>
                                            <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Causes Style 3 -->
                    </div>
                </div>
            </section>
            
            <section>
                <div class="block remove-gap gray-grdnt-bg">
                    <div class="container"><br><br>
                        <div class="sec-ttl text-center" style="margin-top: 0rem;">
                            <div class="sec-ttl-inr">
                                <h2 itemprop="headline" style="font-size: 1.5rem; font-weight: 500;">Our Testimonials</h2>
                                <span><?php the_field('our_testimonial_subtitle');?></span><br><br>
                                <i class="flaticon-sweat thm-clr"></i>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="testi-wrp">
                            <div class="testi-car owl-carousel">
                            	<?php 
                            	$args = array(
                            		'post_type'   => 'testimonials',
                            		'posts_per_page'   => -1,
                            		'orderby'            => 'title',
                            		'order'              => 'ASC'
                            	);
                            	$testimonials = new WP_Query($args);
                            	while($testimonials-> have_posts()) : $testimonials -> the_post();
                            	?>
                                <div class="testi-itm">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="testi-img1.jpg" itemprop="image">
                                    <div class="testi-inf">
                                        <h4 itemprop="headline"><?php the_title();?></h4>
                                        <p itemprop="description"><?php the_content();?></p>
                                    </div>
                                </div>
                               <?php endwhile; wp_reset_postdata();?>
                            </div>
                        </div><!-- Testimonials Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block no-padding">
                    <div class="container">
                        <div class="abt-wrp3 rev abt-bottom">
                            <div class="row align-items-center">
                                <div class="col-md-5 col-sm-12 col-lg-5">
                                    <div class="abt-desc3">
                                        <h2 itemprop="headline"><?php the_field('middle_banner_title');?></h2>
                                        <p itemprop="description"><?php the_field('middle_banner_content');?></p>
                                        <a class="thm-btn" href="donate-now.html" title="" itemprop="url"><?php the_field('middle_banner_button');?><span></span></a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-lg-7">
                                    <div class="abt-img">
                                        <?php 
                                        $id_image = get_field('middle_banner_image');
                                        $image = wp_get_attachment_image_src($id_image, 'home');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>"alt="orgn-mckp2.png" itemprop="image">

                                       
                                    </div>
                                </div>
                            </div>
                        </div><!-- About Style 3 -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block top-spac100 remove-bottom gray-grdnt-bg">
                    <div class="fixed-bg shp-bg back-post-rgtbtm" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/bg-shp2.png);"></div>
                    <div class="container">
                        <div class="glry text-center" style="margin-top: -2rem;">
                            <h4 class="glry-title">Our Gallery</h4>
                            <p class="glry-subtitle"><?php the_field('galleries_sub-header');?></p>
                            <i class="flaticon-sweat thm-clr"></i>
                        </div>
                        <div class="fndrs-wrp2">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="fndrs-img-wrp">
                                        

                                        <?php 
                                        $id_image = get_field('image_left_1');
                                        $image = wp_get_attachment_image_src($id_image, 'home');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>"alt="fndrs-img1.jpg" itemprop="image">

                                        <?php 
                                        $id_image = get_field('image_left_2');
                                        $image = wp_get_attachment_image_src($id_image, 'home');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>"alt="fndrs-img1.jpg" itemprop="image">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="fndrs-inf text-center thm-layer opc9" style="margin-top: 0px; height: 24rem;">
                                        <div class="fixed-bg thm-bg back-blend-multiply" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pattern-bg1.jpg); "></div>
                                        
                                        <h2 itemprop="headline" style="font-size: 20px; margin-top: 0px;"><?php the_field('galleries_title');?></h2>
                                        <p itemprop="description" style="font-size: 15px;"><?php the_field('galleries_subtitle');?></p>
                                        <a class="thm-btn" href="donate-now.html" title="" itemprop="url"><?php the_field('galleries_button');?><span></span></a>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-sm-4">
                                    <div class="fndrs-img-wrp">
                                       

                                        <?php 
                                        $id_image = get_field('image_right_1');
                                        $image = wp_get_attachment_image_src($id_image, 'home');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>"alt="fndrs-img1.jpg" itemprop="image">

                                        <?php 
                                        $id_image = get_field('image_right_2');
                                        $image = wp_get_attachment_image_src($id_image, 'home');
                                        ?>
                                        <img src="<?php echo $image[0]; ?>"alt="fndrs-img1.jpg" itemprop="image">

                                    </div>
                                </div>
                            </div>
                        </div><!-- Fundraiser Wrap Style 2 -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block gray-grdnt-bg">
                    <div class="container">
                        <div class="sec-ttl text-center">
                            <div class="sec-ttl-inr">
                                <h2 itemprop="headline">Recent Articles</h2>
                                <span><?php the_field('recent_news_subtitle');?></span><br><br>
                                <i class="flaticon-sweat thm-clr"></i>
                            </div>
                        </div><!-- Sec Title -->
                        <div class="blg-wrp style3 remove-ext3">
                            <div class="row">

                                <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page'  => 1,
                                    'orderby'         => 'date',
                                    'order'           => ''
                                );
                                $posts = new WP_Query($args);
                                while($posts->have_posts()) : $posts-> the_post();
                                ?>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="blg-bx2 big">
                                        <div class="blg-thmb">
                                            <a href="<?php the_permalink();?>" title="" itemprop="url"><img src="<?php echo the_post_thumbnail_url();?>" alt="blg-big-img2-1.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="blg-inf2">
                                            <h4 itemprop="headline"><a href="<?php the_permalink();?>" title=""  itemprop="url"><?php the_title();?></a></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 15);?></p>
                                            <ul class="pst-mta">
                                                <li><a href="#" title="" itemprop="url"><?php echo get_the_date('M')?> &nbsp <?php echo get_the_date('j');?> &nbsp <?php echo get_the_date('Y');?></a></li>
                                                <li><i class="fa fa-comments thm-clr"></i><?php wp_count_comments();?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; wp_reset_postdata();?>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page'  => 3,
                                    'orderby'         => 'date',
                                    'order'           => ''
                                );
                                $posts = new WP_Query($args);
                                while($posts->have_posts()) : $posts-> the_post();
                                ?>
                                    <div class="blg-bx2 mid">
                                        <div class="blg-thmb">
                                            <a href="<?php the_permalink();?>" title="" itemprop="url"><img src="<?php echo the_post_thumbnail_url();?>" alt="blg-mid-img2-1.jpg" itemprop="image"></a>
                                        </div>
                                        <div class="blg-inf2">
                                            <h4 itemprop="headline"><a href="<?php the_permalink();?>" title=""  itemprop="url"><?php the_title();?></a></h4>
                                            <ul class="pst-mta">
                                                <li><a href="<?php the_permalink();?>" title="" itemprop="url"><?php echo get_the_date('M')?> &nbsp <?php echo get_the_date('j');?> &nbsp <?php echo get_the_date('Y');?></a></li>
                                                <li><i class="fa fa-comments thm-clr"></i><?php wp_count_comments();?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php endwhile; wp_reset_postdata();?>
                                </div>

                                
                            </div>
                        </div><!-- Blog Wrap Style 3 -->
                        <div class="vw-mr text-center">
                            <a class="thm-btn" href="<?php echo site_url('blog');?>" title="" itemprop="url">View All Posts<span></span></a>
                        </div><!-- View More -->
                    </div>
                </div>
            </section>
            </div>
<?php get_footer();?>