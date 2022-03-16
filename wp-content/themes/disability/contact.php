<?php get_header();
/*Template Name: Contact Us Page*/
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
            <section>
                <div class="block">
                    <div class="container">
                        <div class="cnt-wrp">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-lg-8">
                                    <div class="cnt-inr" style="background-image: url(assets/images/pattern-bg2.png);">
                                       
                                        <?php the_content();?>
                                        <!-- <form class="cnt-frm">
                                            <div class="row mrg10">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <input type="text" placeholder="First Name">
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <input type="text" placeholder="Last Name">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="email" placeholder="Email Address">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea placeholder="Message"></textarea>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <button class="thm-btn" type="submit">Send Message<span></span></button>
                                                </div>
                                            </div>
                                        </form> -->
                                        <?php echo do_shortcode('[wpforms id="264" title="false" description="false"]');?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="cnt-inf thm-layer opc9">
                                        <div class="fixed-bg patern-bg thm-bg back-blend-multiply" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pattern-bg1.jpg);"></div>
                                        <p itemprop="description"><?php the_field('detail_header');?></p>
                                        <ul class="cnt-inf-lst">
                                            <li><span>Email:</span><a href="#" title="" itemprop="url"><?php the_field('email_address');?></a></li>
                                            <li><span>Telephone:</span><?php the_field('telophone');?></li>
                                            <li><span>Address:</span><?php the_field('address');?></li>
                                        </ul>
                                        <div class="cnt-scl">
                                            <a class="facebook" href="<?php the_field('facebook_link');?>" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a class="pinterest" href="<?php the_field('pinterest_link');?>" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                            <a class="twitter" href="<?php the_field('twitter_link');?>" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a class="linkedin" href="<?php the_field('linkedin_link');?>" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="cnt-mp" id="cnt-mp">
                                    	<?php the_field('google_map');?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Contact Wrap -->
                        <div class="cnt-fq text-center">
                            <h2 itemprop="headline"><i class="fa fa-cog"></i>Find Your Answer Here<a class="thm-btn" href="#" title="" itemprop="url">Faq's<span></span></a></h2>
                        </div>
                    </div>
                </div>
            </section>
<?php get_footer();?>