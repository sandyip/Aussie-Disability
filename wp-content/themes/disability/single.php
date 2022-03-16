<?php get_header();?>
<section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner.png);"></div>
                </div>
            </section>
            <div class="gray-bg3 brdcrmb-wrp">
                <div class="container">
                    <div class="brdcrmb-inr flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('home');?>" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo site_url('blog');?>" title="" itemprop="url">Blog</a></li>
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
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-lg-8">
                                <div class="blog-dtl-wrp">
                                    <div class="blg-dtl-thmb">
                                        <img src="<?php echo the_post_thumbnail_url();?>" alt="blg-dtl-img1-1.jpg" itemprop="image">
                                    </div>
                                    <div class="blg-inf">
                                            <span class="blg-dat thm-bg">
                                                <a href="<?php the_permalink();?>" title="" itemprop="url"><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?>
                                                    
                                                </a>
                                            </span>
                                            <span class="blg-tgs">
                                                <i class="fa fa-tag"></i>
                                                
                                                <?php
                                                $posttags = get_the_tags();
                                                if ($posttags) {
                                                  foreach($posttags as $tag) {
                                                    echo $tag->name . ' '; 
                                                  }
                                                }
                                                ?>
                                            </span>
                                            <h4 itemprop="headline">
                                                <a href="<?php the_permalink();?>" title="" itemprop="url"><?php the_title();?></a>
                                            </h4>
                                            <ul class="pst-mta">
                                                <li>
                                                    <i class="fa fa-user thm-clr"></i>
                                                    <a href="<?php the_permalink();?>" title="" itemprop="url"><?php the_author();?></a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments thm-clr"></i><?php wp_count_comments();?>
                                                </li>
                                            </ul>
                                            <p itemprop="description"><?php echo wp_trim_words(get_the_content(), 60);?></p>
                                        </div>
                                    <div class="blg-dtl-desc">
                                        <?php the_content();?>
                                        <!-- <div class="gallery">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="gallery-item">
                                                        <a href="assets/images/resources/blg-dtl-gal-img1-1.jpg" title="" data-fancybox="gallery" itemprop="url"><img src="assets/images/resources/blg-dtl-gal-img1-1.jpg" alt="blg-dtl-gal-img1-1.jpg" itemprop="image"></a>
                                                    </div>
                                                </div>                                                
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div class="gallery-item">
                                                        <a href="assets/images/resources/blg-dtl-gal-img1-2.jpg" title="" data-fancybox="gallery" itemprop="url"><img src="assets/images/resources/blg-dtl-gal-img1-2.jpg" alt="blg-dtl-gal-img1-2.jpg" itemprop="image"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        
                                       <!--  <div class="blg-scl">
                                            <span><i class="fa fa-share-alt"></i>45</span>
                                            <a class="facebook-hvr" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a class="twitter-hvr" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <a class="pinterest-hvr" href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                            <a class="linkedin-hvr" href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <a class="yahoo-hvr" href="#" title="Yahoo" itemprop="url" target="_blank"><i class="fa fa-yahoo"></i></a>
                                            <a class="instagram-hvr" href="#" title="Instagram" itemprop="url" target="_blank"><i class="fa fa-instagram"></i></a>
                                        </div> -->
                                    </div>
                                    <!-- <div class="athr-bx">
                                        <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/athr-img1-1.jpg" alt="athr-img1-1.jpg" itemprop="image">
                                        <div class="athr-inf">
                                            <h4 itemprop="headline">About Admin</h4>
                                            <p itemprop="description">Lorem ipsum dolor sit amet, consectetur alim Vivamus scele Don malesuada sodales neque in faucibus.</p>
                                            <div class="athr-scl">
                                                <a class="facebook" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a class="pinterest" href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                                <a class="twitter" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                            </div>
                                        </div>
                                    </div> --><!-- Author Box -->
                                    <!-- <div class="cmt-wrp">
                                        <h4 itemprop="headline">02 Comments</h4>
                                        <ul class="cmt-lst">
                                            <li>
                                                <div class="cmt-bx">
                                                    <img src="assets/images/resources/cmt-img1-1.jpg" alt="cmt-img1-1.jpg" itemprop="image">
                                                    <div class="cmt-inf">
                                                        <h6 itemprop="headline">Jockon Don</h6>
                                                        <span class="thm-clr">10 months ago</span>
                                                        <p itemprop="description">Cupcake ipsum dolor sit amet. Dragée sweet roll tiramisu sweet cupcake croissant lollipop candy.</p>
                                                        <a class="comment-reply-link" href="#" title="" itemprop="url">Reply</a>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="cmt-bx">
                                                            <img src="assets/images/resources/cmt-img1-2.jpg" alt="cmt-img1-2.jpg" itemprop="image">
                                                            <div class="cmt-inf">
                                                                <h6 itemprop="headline">Thomas Tom</h6>
                                                                <span class="thm-clr">10 months ago</span>
                                                                <p itemprop="description">Cupcake ipsum dolor sit amet. Dragée sweet roll tiramisu li cupcake croissant lollipop candy.</p>
                                                                <a class="comment-reply-link" href="#" title="" itemprop="url">Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div> --><!-- Comments Wrap -->
                                    <div class="rply-cmt">
                                        <h4 itemprop="headline">Leave A Comment</h4>
                                        <!-- <form>
                                            <div class="row mrg10">
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <input type="text" placeholder="Subject">
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-12">
                                                    <textarea placeholder="Message"></textarea>
                                                    <button class="thm-btn" type="submit">Send Message<span></span></button>
                                                </div>
                                            </div>
                                        </form> -->

                                        <?php echo do_shortcode('[wpforms id="373" title="false" description="false"]');?>
                                    </div>
                                </div><!-- Blog Detail Wrap -->
                            </div>
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <aside class="sdbr-wrp">
                                    <?php if(is_active_sidebar('blog-sidebar') ):?>
                                    <?php dynamic_sidebar('blog-sidebar');?>
                                  <?php endif;?>                                    
                                </aside><!-- Aside -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php get_footer();?>