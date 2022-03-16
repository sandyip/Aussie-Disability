<?php get_header();
/*Template Name: Ndis Page*/
?>

  <section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo the_post_thumbnail_url();?>);"></div>
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

                <div class="block">
                    <div class="container">
                       
                        <div class="cus-dtl-wrp">
                            <div class="cus-dtl-inf">
                                
                                <h1 itemprop="headline"><?php the_field('ndis_title');?></h1>    
                            </div>
                            <?php the_field('ndis_content');?>

                            <div class="cus-dtl-desc-bx">
                                <div class="cus-dtl-desc-inf">
                                    <h4 itemprop="headline"><?php the_field('second_title');?></h4>
                                    <?php the_field('second_textarea');?>
                                </div>
                                <div class="cus-dtl-desc-thmb">
                                     <?php 
			                                $id_image = get_field('second_image');
			                                $image = wp_get_attachment_image_src($id_image, 'home');
			                                ?>
			                                <img src="<?php echo $image[0]; ?>" alt="evnt-orgn1-1.jpg" itemprop="image">
                                </div>
                            </div>
                            <div class="cus-dtl-desc-bx rev">
                                <div class="cus-dtl-desc-thmb">
                                     <?php 
			                                $id_image = get_field('third_image');
			                                $image = wp_get_attachment_image_src($id_image, 'home');
			                                ?>
			                                <img src="<?php echo $image[0]; ?>" alt="evnt-orgn1-1.jpg" itemprop="image">
                                </div>
                                <div class="cus-dtl-desc-inf">
                                    <h4 itemprop="headline"><?php the_field('third_title');?></h4>
                                    <?php the_field('third_textarea');?>
                                </div>
                            </div>
                            <div class="cus-dtl-desc-bx">
                                <div class="cus-dtl-desc-inf">
                                    <h4 itemprop="headline"><?php the_field('fourth_title');?></h4>
                                    <?php the_field('fourth_content');?>
                                </div>
                                <div class="cus-dtl-desc-thmb">
                                    <?php 
			                                $id_image = get_field('fourth_image');
			                                $image = wp_get_attachment_image_src($id_image, 'home');
			                                ?>
			                                <img src="<?php echo $image[0]; ?>" alt="evnt-orgn1-1.jpg" itemprop="image">
                                </div>
                            </div>
                        </div><!-- Cause Detail Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block black-layer opc7" id="ndis-banner">
                    <div class="fixed-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/prlx-bg12.jpg);"></div>
                    <div class="container">
                        <div class="no-chld-wrp text-center">
                            <div class="no-chld-inr">
                                <i class="flaticon-world"></i>
                                <h2 itemprop="headline">No child should get sik or die for lack of a vitamin that costs less than $1.</h2>
                                <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="block">
                    <div class="container">
                        <div class="sec-ttl v2 text-center">
                            <div class="sec-ttl-inr">
                                <h2 itemprop="headline">Charity Organizations Work In The Fundraising</h2>
                                <span>Trusted by world-class organizations. he people of Equity Trust enable.</span>
                            </div>
                        </div><!-- Sec Title Style 2 -->
                        <div class="orgn-wrp2 remove-ext3 text-center">
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
                        </div><!-- Organization Wrap Style 2 -->
                    </div>
                </div>
            </section>
            </div>
<?php get_footer();?>