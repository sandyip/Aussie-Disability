<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png" sizes="32x32" type="image/png">
        <?php wp_head();?>
    </head>
    <body itemscope>
        
        <main>
            <!-- <div class="page-loader">
                <div class="loader">
                    <div class='loader-style-1 panelLoad'>
                        <div class='cube-face cube-face-front'>P</div>
                        <div class='cube-face cube-face-back'>O</div>
                        <div class='cube-face cube-face-left'>V</div>
                        <div class='cube-face cube-face-right'>E</div>
                        <div class='cube-face cube-face-bottom'>R</div>
                        <div class='cube-face cube-face-top'>T</div>
                    </div>
                    <span class="cube-face">Povert</span>
                </div>
            </div> --><!-- Page Loader -->
            <header class="style4 stick flex">
                <div class="container">
                    <div class="wb-lgmnu-wrp flex">
                        <div class="logo">
                            <a href="index.html" title="Home" itemprop="url">
                                <?php 
                                    if(has_custom_logo() || is_customize_preview()){
                                    the_custom_logo();
                                }else{
                                    ?>
                                    Disability
                                <?php } ?>
                            </a>
                        </div><!-- Logo -->
                        <div class="tp-scl">
                            <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Pinterest" itemprop="url" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#" title="Linkedin" itemprop="url" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <nav>
                            <div>
                                <!-- <ul>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Home</a>
                                        <ul>
                                            <li><a href="index.html" title="" itemprop="url">Homepage 1</a></li>
                                            <li><a href="index2.html" title="" itemprop="url">Homepage 2</a></li>
                                            <li><a href="index3.html" title="" itemprop="url">Homepage 3</a></li>
                                            <li><a href="index4.html" title="" itemprop="url">Homepage 4</a></li>
                                            <li><a href="index5.html" title="" itemprop="url">Homepage 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Pages</a>
                                        <ul>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Event</a>
                                                <ul>
                                                    <li><a href="event-style1.html" title="" itemprop="url">Event Style 1</a></li>
                                                    <li><a href="event-style2.html" title="" itemprop="url">Event Style 2</a></li>
                                                    <li><a href="event-detail.html" title="" itemprop="url">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Gallery</a>
                                                <ul>
                                                    <li><a href="gallery-style1.html" title="" itemprop="url">Gallery Style 1</a></li>
                                                    <li><a href="gallery-style2.html" title="" itemprop="url">Gallery Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Sponsor Child</a>
                                                <ul>
                                                    <li><a href="sponsor-child.html" title="" itemprop="url">Sponsor Child</a></li>
                                                    <li><a href="sponsor-child-detail.html" title="" itemprop="url">Sponsor Child Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Team</a>
                                                <ul>
                                                    <li><a href="team-style1.html" title="" itemprop="url">Team</a></li>
                                                    <li><a href="team-detail.html" title="" itemprop="url">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="donate-now.html" title="" itemprop="url">Donate Now</a></li>
                                            <li><a href="search-found.html" title="" itemprop="url">Search Found</a></li>
                                            <li><a href="search-not-found.html" title="" itemprop="url">Search Not Found</a></li>
                                            <li><a href="coming-soon.html" title="" itemprop="url">Coming Soon</a></li>
                                            <li><a href="404.html" title="" itemprop="url">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Blog</a>
                                        <ul>
                                            <li><a href="blog-style1.html" title="" itemprop="url">Blog Style 1</a></li>
                                            <li><a href="blog-style2.html" title="" itemprop="url">Blog Style 2</a></li>
                                            <li><a href="blog-style3.html" title="" itemprop="url">Blog Style 3</a></li>
                                            <li><a href="blog-style4.html" title="" itemprop="url">Blog Style 4</a></li>
                                            <li><a href="blog-detail.html" title="" itemprop="url">Blog Details</a></li>
                                            <li><a href="blog-detail-no-sidebar.html" title="" itemprop="url">Blog Details No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Cause</a>
                                        <ul>
                                            <li><a href="cause-style1.html" title="" itemprop="url">Cause Style 1</a></li>
                                            <li><a href="cause-style2.html" title="" itemprop="url">Cause Style 2</a></li>
                                            <li><a href="cause-style3.html" title="" itemprop="url">Cause Style 3</a></li>
                                            <li><a href="cause-detail.html" title="" itemprop="url">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html" title="" itemprop="url">About</a></li>
                                    <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                                </ul> -->
                                <?php
                          wp_nav_menu(
                            array(
                              'menu' => 'primary-menu',
                              'container' => '',
                              'menu_class' => 'menu-item-has-children',
                            )
                          ) 

                          ?>
                                <span class="mnu-btn"><i></i><i></i><i></i></span>
                                <!-- <a class="thm-btn" href="donate-now.html" title="" itemprop="url">Donate Now<span></span></a> -->
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="sticky-header flex">
                <div class="container">
                    <div class="wb-lgmnu-wrp flex justify-content-between">
                        <div class="logo"><a href="index.html" title="Home" itemprop="url"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo2.png" alt="logo2.png" itemprop="image"></a></div><!-- Logo -->
                        <nav>
                            <div>
                                <!-- <ul>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Home</a>
                                        <ul>
                                            <li><a href="index.html" title="" itemprop="url">Homepage 1</a></li>
                                            <li><a href="index2.html" title="" itemprop="url">Homepage 2</a></li>
                                            <li><a href="index3.html" title="" itemprop="url">Homepage 3</a></li>
                                            <li><a href="index4.html" title="" itemprop="url">Homepage 4</a></li>
                                            <li><a href="index5.html" title="" itemprop="url">Homepage 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Pages</a>
                                        <ul>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Event</a>
                                                <ul>
                                                    <li><a href="event-style1.html" title="" itemprop="url">Event Style 1</a></li>
                                                    <li><a href="event-style2.html" title="" itemprop="url">Event Style 2</a></li>
                                                    <li><a href="event-detail.html" title="" itemprop="url">Event Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Gallery</a>
                                                <ul>
                                                    <li><a href="gallery-style1.html" title="" itemprop="url">Gallery Style 1</a></li>
                                                    <li><a href="gallery-style2.html" title="" itemprop="url">Gallery Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Sponsor Child</a>
                                                <ul>
                                                    <li><a href="sponsor-child.html" title="" itemprop="url">Sponsor Child</a></li>
                                                    <li><a href="sponsor-child-detail.html" title="" itemprop="url">Sponsor Child Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Team</a>
                                                <ul>
                                                    <li><a href="team-style1.html" title="" itemprop="url">Team</a></li>
                                                    <li><a href="team-detail.html" title="" itemprop="url">Team Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="donate-now.html" title="" itemprop="url">Donate Now</a></li>
                                            <li><a href="search-found.html" title="" itemprop="url">Search Found</a></li>
                                            <li><a href="search-not-found.html" title="" itemprop="url">Search Not Found</a></li>
                                            <li><a href="coming-soon.html" title="" itemprop="url">Coming Soon</a></li>
                                            <li><a href="404.html" title="" itemprop="url">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Blog</a>
                                        <ul>
                                            <li><a href="blog-style1.html" title="" itemprop="url">Blog Style 1</a></li>
                                            <li><a href="blog-style2.html" title="" itemprop="url">Blog Style 2</a></li>
                                            <li><a href="blog-style3.html" title="" itemprop="url">Blog Style 3</a></li>
                                            <li><a href="blog-style4.html" title="" itemprop="url">Blog Style 4</a></li>
                                            <li><a href="blog-detail.html" title="" itemprop="url">Blog Details</a></li>
                                            <li><a href="blog-detail-no-sidebar.html" title="" itemprop="url">Blog Details No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Cause</a>
                                        <ul>
                                            <li><a href="cause-style1.html" title="" itemprop="url">Cause Style 1</a></li>
                                            <li><a href="cause-style2.html" title="" itemprop="url">Cause Style 2</a></li>
                                            <li><a href="cause-style3.html" title="" itemprop="url">Cause Style 3</a></li>
                                            <li><a href="cause-detail.html" title="" itemprop="url">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html" title="" itemprop="url">About</a></li>
                                    <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                                </ul> -->
                                 <?php
                          wp_nav_menu(
                            array(
                              'menu' => 'primary-menu',
                              'container' => '',
                              'menu_class' => 'menu-item-has-children',
                            )
                          ) 

                          ?>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </div><!-- Sticky Header -->
            <div class="rspns-hdr">
                <div class="rspns-lg-mnu-br">
                    <div class="container">
                        <div class="logo"><a href="index.html" title="Home" itemprop="url"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo2.png" alt="logo2.png" itemprop="image"></a></div>
                        <span class="rspns-mnu-btn"><i class="fa fa-align-justify"></i></span>
                    </div>
                    <div class="rspns-mnu">
                        <span class="rspns-cls-btn"><i class="fa fa-times"></i></span>
                        <!-- <ul>
                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Home</a>
                                <ul>
                                    <li><a href="index.html" title="" itemprop="url">Homepage 1</a></li>
                                    <li><a href="index2.html" title="" itemprop="url">Homepage 2</a></li>
                                    <li><a href="index3.html" title="" itemprop="url">Homepage 3</a></li>
                                    <li><a href="index4.html" title="" itemprop="url">Homepage 4</a></li>
                                    <li><a href="index5.html" title="" itemprop="url">Homepage 5</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Pages</a>
                                <ul>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Event</a>
                                        <ul>
                                            <li><a href="event-style1.html" title="" itemprop="url">Event Style 1</a></li>
                                            <li><a href="event-style2.html" title="" itemprop="url">Event Style 2</a></li>
                                            <li><a href="event-detail.html" title="" itemprop="url">Event Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Gallery</a>
                                        <ul>
                                            <li><a href="gallery-style1.html" title="" itemprop="url">Gallery Style 1</a></li>
                                            <li><a href="gallery-style2.html" title="" itemprop="url">Gallery Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Sponsor Child</a>
                                        <ul>
                                            <li><a href="sponsor-child.html" title="" itemprop="url">Sponsor Child</a></li>
                                            <li><a href="sponsor-child-detail.html" title="" itemprop="url">Sponsor Child Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Team</a>
                                        <ul>
                                            <li><a href="team-style1.html" title="" itemprop="url">Team</a></li>
                                            <li><a href="team-detail.html" title="" itemprop="url">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donate-now.html" title="" itemprop="url">Donate Now</a></li>
                                    <li><a href="search-found.html" title="" itemprop="url">Search Found</a></li>
                                    <li><a href="search-not-found.html" title="" itemprop="url">Search Not Found</a></li>
                                    <li><a href="coming-soon.html" title="" itemprop="url">Coming Soon</a></li>
                                    <li><a href="404.html" title="" itemprop="url">Error Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Blog</a>
                                <ul>
                                    <li><a href="blog-style1.html" title="" itemprop="url">Blog Style 1</a></li>
                                    <li><a href="blog-style2.html" title="" itemprop="url">Blog Style 2</a></li>
                                    <li><a href="blog-style3.html" title="" itemprop="url">Blog Style 3</a></li>
                                    <li><a href="blog-style4.html" title="" itemprop="url">Blog Style 4</a></li>
                                    <li><a href="blog-detail.html" title="" itemprop="url">Blog Details</a></li>
                                    <li><a href="blog-detail-no-sidebar.html" title="" itemprop="url">Blog Details No Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#" title="" itemprop="url">Cause</a>
                                <ul>
                                    <li><a href="cause-style1.html" title="" itemprop="url">Cause Style 1</a></li>
                                    <li><a href="cause-style2.html" title="" itemprop="url">Cause Style 2</a></li>
                                    <li><a href="cause-style3.html" title="" itemprop="url">Cause Style 3</a></li>
                                    <li><a href="cause-detail.html" title="" itemprop="url">Cause Details</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html" title="" itemprop="url">About</a></li>
                            <li><a href="contact.html" title="" itemprop="url">Contact</a></li>
                        </ul> -->
                         <?php
                          wp_nav_menu(
                            array(
                              'menu' => 'primary-menu',
                              'container' => '',
                              'menu_class' => 'menu-item-has-children',
                            )
                          ) 

                          ?>
                    </div>
                </div>
                <!--  -->
            </div><!-- Responsive Header -->