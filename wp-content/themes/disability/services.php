<?php get_header();
/*Template Name: Services Page*/
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
                            <li class="breadcrumb-item"><a href="sponsor-child.html" title="" itemprop="url">Services</a></li>
                            <li class="breadcrumb-item active"><?php the_title();?></li>
                        </ol>
                        <form class="pg-srch-frm">
                            <input type="text" placeholder="Search All Resources">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div><!-- Breadcrumbs Wrap -->   
            <section>
                <div class="block">
                    <div class="container">
                        <div class="spnsr-chld-dtl-wrp">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-lg-12">
                                    <div class="spnsr-chld-inr-wrp">
                                        <div class="spnsr-chld-dtl-inf">
                                            <div class="row align-items-center">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <?php 
		                                $id_image = get_field('services_image');
		                                $image = wp_get_attachment_image_src($id_image, 'home');
		                                ?>
		                                <img src="<?php echo $image[0]; ?>" alt="org-img2-1.png" itemprop="image">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="spnsr-chld-dtl-inf-inr">
                                                        <h2 itemprop="headline"><?php the_field('title');?></h2>
                                                        <i class="thm-clr"><?php the_field('subtitle');?></i> <br>
                                                        <!-- <ul class="spnsr-chld-inf-lst">
                                                            <li><i class="thm-clr fa fa-smile-o"></i>Gender:<span>Male</span></li>
                                                            <li><i class="thm-clr fa fa-birthday-cake"></i>Birthday:<span>17/09/2015</span></li>
                                                            <li><i class="thm-clr fa fa-globe"></i>Country:<span>Guatemala</span></li>
                                                        </ul> -->
                                                        <span>Waiting For 4 Months</span>
                                                    </div>
                                                </div>
                                                <section>
                <div class="block remove-bottom">
                    <div class="container">
                        <div class="srv-wrp remove-ext4 text-center">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="srv-bx">
                                        <i class="flaticon-tshirt thm-clr"></i>
                                        <div class="srv-inr">
                                            <h4 itemprop="headline"><?php the_field('desc_1');?></h4>
                                            <p itemprop="description"><?php the_field('desc_content_1');?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="srv-bx">
                                        <i class="flaticon-ribbon thm-clr"></i>
                                        <div class="srv-inr">
                                            <h4 itemprop="headline"><?php the_field('desc_2');?></h4>
                                            <p itemprop="description"><?php the_field('desc_content_2');?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="srv-bx">
                                        <i class="flaticon-heart-1 thm-clr"></i>
                                        <div class="srv-inr">
                                            <h4 itemprop="headline"><?php the_field('desc_3');?></h4>
                                            <p itemprop="description"><?php the_field('desc_content_3');?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="srv-bx">
                                        <i class="flaticon-charity thm-clr"></i>
                                        <div class="srv-inr">
                                            <h4 itemprop="headline"><?php the_field('desc_4');?></h4>
                                            <p itemprop="description"><?php the_field('desc_content_4');?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Services Style 1 -->
                    </div>
                </div>
            </section>

                                            </div>
                                        </div>



                                        <div class="spnsr-chld-dtl-tbs">
                                            <ul class="nav nav-tabs">
                                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#spnsr-chld1"><?php the_field('detail_1');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld2"><?php the_field('detail_2');?></a></li>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#spnsr-chld3"><?php the_field('detail_3');?></a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="spnsr-chld1">
                                                   <?php the_field('detail_1_content');?>
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="spnsr-chld2">
                                                    <?php the_field('detail_2_content');?>
                                                </div>
                                                <div class="tab-pane fade" id="spnsr-chld3">
                                                    <?php the_field('detail_3_content');?>
                                                </div>
                                            </div>
                                        </div>
                                          
                                    </div>
                                </div>
                                
                            </div>
                        </div><!-- Sponsor Child Detail Wrap -->
                    </div>
			<section>
                <div class="block white-layer opc5">
                    <div class="fixed-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/prlx-bg4.jpg);"></div>
                    <div class="container">
                        <div class="huslnd-wrp">
                            <div class="row">
                                <div class="col-md-4 col-sm-5 col-lg-4">
                                    <div class="huslnd-inf">
                                        <span class="counter thm-clr">160,000</span>
                                        <h6 itemprop="headline">homeless households in Britain</h6>
                                        <a class="thm-btn2" href="donate-now.html" title="" itemprop="url">Start Donation</a>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-7 col-lg-8">
                                    <h3 itemprop="headline">Rough sleeping is forecast to rise by 76 per cent in the next decade unless the government takes action to tackle it.</h3>
                                </div>
                            </div>
                        </div><!-- Household Wrap -->
                    </div>
                </div>
            </section>

                </div>
            </section>
<?php get_footer();?>