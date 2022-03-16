<footer>
                <div class="block dark-layer opc3">
                    <div class="fixed-bg drk-bg back-blend-darken" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/prlx-bg2.jpg);"></div>
                    <div class="container">
                        <div class="ftr-dta-wrp remove-ext10">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="wdgt-bx">
                                        <div class="logo"><a href="index.html" title="Home" itemprop="url"><img src="<?php echo get_theme_mod('ndis_img_handle');?>" itemprop="image"></a></div>
                                        <p itemprop="description"><?php echo get_theme_mod('ndis_content_handle');?></p>
                                        <ul class="abt-cnt-lst">
                                            <li><i class="flaticon-telephone thm-clr"></i><?php echo get_theme_mod('ndis_phone_content_handle');?></li>
                                            <li><i class="fa fa-envelope thm-clr"></i><?php echo get_theme_mod('ndis_email_content_handle');?></li>
                                            <li><i class="fa fa-map-marker thm-clr"></i><?php echo get_theme_mod('ndis_address_handle');?>?</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    <div class="wdgt-bx">
                                        <h4 itemprop="headline">Important Links</h4>
                                        <?php
                          wp_nav_menu(
                            array(
                              'menu' => 'footer-menu',
                              'container' => '',
                              'menu_class' => 'menu-item-has-children',
                              
                            )
                          ) 

                          ?>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                    
                                    <div class="ftr-sbscrb thm-layer opc9">
                                        <div class="fixed-bg back-blend-multiply thm-bg patern-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/pattern-bg1.jpg);"></div>
                                        <p itemprop="description">Subscribe to our mailing list to get the <strong>update to you email.</strong></p>
                                        <a href="#" title="" itemprop="url">Sign Up Now</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="copyright">
                                    <p class="cpyrgt-p" itemprop="description">&copy; <?php echo get_theme_mod('ndis_copyright_handle');?>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="policy" style="padding-top: 10px; padding-left: 20px;">
                                        <a href=""><p style="color: #d7d7d7 !Important; font-family: Rubik;">privacy & policy</p></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="developd" style="padding-top: 10px; padding-left: 20px;">
                                        <p class="developd-p" style="color: #d7d7d7; font-family: Rubik;" >Developed by : <img src="<?php echo get_template_directory_uri();?>/assets/images/logo_dev.png" style="margin-top: -20px; width: 175px; height: 62px;"></p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div><!-- Footer Data Wrap -->
                    </div>
                </div>
            </footer><!-- Footer -->
        </main><!-- Main Wrapper -->
       <?php wp_footer();?>
    </body> 
</html>