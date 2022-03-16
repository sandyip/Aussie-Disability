<?php get_header();?>
<?php while(have_posts()) : the_post();?>
<section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner.png);"></div>
                </div>
            </section>
            <div class="gray-bg3 brdcrmb-wrp">
                <div class="container">
                    <div class="brdcrmb-inr flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/event');?>" title="" itemprop="url">Event</a></li>
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
                        <div class="evnt-dtl-thmb">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="evnt-dtl-img1-1.jpg" itemprop="image">
                        </div>
                        <div class="evnt-dtl-wrp">
                            <div class="evnt-dtl-inf">
                                <h1 itemprop="headline"><?php the_title();?></h1>
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
                                
                                <div class="evnt-dtl-inf-inr">
                                    <div class="evnt-dtl-dt">
                                        <i class="fa fa-calendar"></i>
                                        <span>Event Date <i class="thm-clr"><?php the_field('event_date');?></i></span>
                                        
                                    </div>
                                    <div class="evnt-dtl-btns">
                                        
                                        <a class="thm-btn" href="#" title="" itemprop="url">Get Ticket<span></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="evnt-dtl-desc">
                                <?php the_content();?>
                            </div>
                            <!-- <div class="evnt-fclt-wrp">
                                <h4 itemprop="headline">Event Facilities</h4>
                                <ul class="evnt-fclt-lst">
                                    <li>
                                        <div class="evnt-fclt-bx">
                                            <i class="thm-clr flaticon-boy-broad-smile"></i>
                                            <h6 itemprop="headline"><?php the_field('event_facilities');?></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="evnt-fclt-bx">
                                            <i class="thm-clr flaticon-radio"></i>
                                            <h6 itemprop="headline">Speak & Music</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="evnt-fclt-bx">
                                            <i class="thm-clr flaticon-signpost"></i>
                                            <h6 itemprop="headline">Playground</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="evnt-fclt-bx">
                                            <i class="thm-clr flaticon-family"></i>
                                            <h6 itemprop="headline">Sponsorship</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="evnt-fclt-bx">
                                            <i class="thm-clr flaticon-save-money"></i>
                                            <h6 itemprop="headline">Provide Fund</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div> --><!-- Event Facilities Wrap -->
                           
                            <div class="evnt-spkrs-wrp">
                                <h4 itemprop="headline">Event Speaker</h4>
                                <div class="evnt-spkr-inr remove-ext1">
                                    <div class="row mrg20">
                                        <?php if(have_rows('speakers')):?>
                                            <?php while(have_rows('speakers')): the_row();?>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="evnt-spkr-bx">
                                                <img src="<?php echo get_sub_field('speaker_profile')['url'];?>" alt="evnt-spkr-img1-1.jpg" itemprop="image">
                                                <div class="evnt-spkr-inf">
                                                    <img src="<?php echo get_sub_field('nationality')['url'];?>" alt="spkr-flg1.jpg" itemprop="image">
                                                    <div class="evnt-spkr-inf-inr">
                                                        <h6 itemprop="headline"><?php the_sub_field('speaker_name');?></h6>
                                                        <span><?php the_sub_field('position_and_country');?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div><!-- Event Speakers Wrap -->
                            <div class="evnt-glry-wrp">
                                <h4 itemprop="headline">Event Gallery</h4>
                                <div class="evnt-glry-inr remove-ext1">
                                    <div class="row mrg20">
                                        <?php if(have_rows('gallery')):?>
                                            <?php while(have_rows('gallery')): the_row();?>
                                        <div class="col-md-6 col-sm-12 col-lg-6">
                                            <div class="gallery-item">
                                                <a href="<?php echo get_sub_field('image')['url'];?>" title="" data-fancybox="gallery" itemprop="url">
                                                    <img src="<?php echo get_sub_field('image')['url'];?>" alt="evnt-dtl-gal-img1-1.jpg" itemprop="image">
                                                </a>
                                            </div>
                                        </div>
                                        <?php endwhile;?>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div><!-- Event Gallery Wrap -->
                          
                           
                            
                        </div><!-- Event Detail Wrap -->
                    </div>
                </div>
            </section>
        <?php endwhile;?>
<?php get_footer();?>