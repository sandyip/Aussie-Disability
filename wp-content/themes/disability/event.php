<?php get_header();
/*Template Name: Event Page*/
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
                        <div class="evnt-wrp remove-ext8">
                        	<?php $args = array(
                        		'post_type'   => 'events',
                        		'posts_per_page'   => 4,
                        		'orderby'           => 'date',
                        		'order'           => ''
                        	);
                        	$events = new WP_Query($args);
                        	while($events->have_posts()) : $events-> the_post();
                        	?>
                            <div class="evnt-bx">
                                <div class="evnt-thmb"><a href="<?php the_permalink();?>" title="" itemprop="url"><img src="<?php echo the_post_thumbnail_url();?>" alt="evnt-img1-1.jpg" itemprop="image"></a></div>
                                <div class="evnt-inf">
                                    <div class="evnt-inf-tp">
                                        <span class="thm-clr"><?php the_field('event_date');?></span>
                                        <div class="evnt-orgn">
                                        	<?php 
			                                $id_image = get_field('organizer_profile');
			                                $image = wp_get_attachment_image_src($id_image, 'home');
			                                ?>
			                                <img src="<?php echo $image[0]; ?>" alt="evnt-orgn1-1.jpg" itemprop="image">
                                            
                                            <div class="evnt-orgn-inf">
                                                <h6 itemprop="headline"><?php the_field('organizer_name');?></h6>
                                                <span>Organizer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 itemprop="headline"><a href="<?php the_permalink();?>" title="" itemprop="url"><?php the_title();?></a></h4>
                                    <!-- <p itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit uam, odioserunt provident maiores consectetur adipisic Aliquam odio dese runtesseu</p> -->

                                    <?php echo wp_trim_words(get_the_content(), 60); ?>
                                    <div class="evnt-inf-btm">
                                        <a class="thm-btn2" href="<?php the_permalink();?>" title="" itemprop="url">Join The Movement</a>
                                        <span class="evnt-loc"><i class="fa fa-map-marker"></i><span><?php the_field('event_location');?></span></span>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata();?>
                        </div><!-- Event Wrap Style 1 -->
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
<?php get_footer();?>