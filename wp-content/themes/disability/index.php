 <?php get_header();?>
 <section>
                <div class="block no-padding">
                    <div class="pg-tp-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/banner.png;"></div>
                </div>
            </section>
            <div class="gray-bg3 brdcrmb-wrp">
                <div class="container">
                    <div class="brdcrmb-inr flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('/home');?>" title="" itemprop="url">Home</a></li>
                            <li class="breadcrumb-item active">Blog </li>
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
                                <div class="blg-wrp style4 remove-ext6">
                                    <?php while(have_posts()) : the_post();?>
                                    <div class="blg-bx lst">
                                        <div class="blg-thmb">
                                            <a href="<?php the_permalink();?>" title="" itemprop="url"><img src="<?php echo the_post_thumbnail_url();?>" alt="blg-img3-1.jpg" itemprop="image"></a>
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
                                    </div>
                                     <?php endwhile;?>
                                </div><!-- Blog Wrap Style 4 -->
                                <div class="pgntin-wrp">
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

                            
                            <div class="col-md-4 col-sm-6 col-lg-4">
                                <?php if(is_active_sidebar('blog-sidebar') ):?>
                                    <?php dynamic_sidebar('blog-sidebar');?>
                                  <?php endif;?>
                            </div> 
                        </div>
                    </div>
                </div>
            </section> 
<?php get_footer();?>