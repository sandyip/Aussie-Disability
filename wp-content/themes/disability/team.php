<?php get_header();
/*Template Name: Team Page*/
?>
<section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pg-tp-bg1.jpg);"></div>
                </div>
            </section>
            <div class="gray-bg3 brdcrmb-wrp">
                <div class="container">
                    <div class="brdcrmb-inr flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/about');?>" title="" itemprop="url">About</a></li>
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
                        <div class="tem-wrp text-center remove-ext5">
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




                            </div>
                        </div><!-- Team Style 1 -->
                        <div class="pgntin-wrp text-center">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link prev" href="#" title="" itemprop="url"><i class="fa fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">1</a></li>
                                <li class="page-item active"><span class="page-link">2</span></li>
                                <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">3</a></li>
                                <li class="page-item">......</li>
                                <li class="page-item"><a class="page-link" href="#" title="" itemprop="url">12</a></li>
                                <li class="page-item"><a class="page-link next" href="#" title="" itemprop="url"><i class="fa fa-angle-right"></i></a></li>
                            </ul><!-- Pagination -->
                        </div><!-- Pagination Wrap -->
                    </div>
                </div>
            </section>
            <section>
                <div class="block gray-layer opc97">
                    <div class="fixed-bg patern-bg" style="background-image: url(assets/images/pattern-bg2.png);"></div>
                    <div class="container">
                        <div class="hlp-wrp text-center">
                            <h2 itemprop="headline">Get Started Helping Povert People</h2>
                            <div class="hlp-inr remove-ext3">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="hlp-bx hlp-bg1">
                                            <h4 itemprop="headline"><?php the_field('title_1');?></h4>
                                            <p itemprop="description"><?php the_field('content_1');?></p>
                                            <a class="thm-btn" href="event-style1.html" title="" itemprop="url"><?php the_field('button_1');?><span></span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="hlp-bx hlp-bg2">
                                            <h4 itemprop="headline"><?php the_field('title_2');?></h4>
                                            <p itemprop="description"><?php the_field('content_2');?></p>
                                            <a class="thm-btn" href="donate-now.html" title="" itemprop="url"><?php the_field('button_2');?><span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Helping Wrap -->
                    </div>
                </div>
            </section>
<?php get_footer();?>