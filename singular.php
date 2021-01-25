<?php get_header(); ?> 

        <div class="wrapper-page">
            <!-- Header -->
            <header class="header">
                <div class="header-content">

                    <div class="profile-picture-block">
                        <div class="my-photo">

                            <?php 
                                $img = $options['profile_pic'];
                                $img_url = $options['profile_pic']['url'];
                                if($img_url = $options['profile_pic']['url']) { ?>
                                <img class="img-fluid" src="<?php echo $img_url; ?>" alt="<?php echo ($img['title']) ?>">
                            <?php } else { ?>
                                <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/md-sumon-mia.jpg" alt="<?php echo $options['your_name']; ?>">
                            <?php } ?>
                            
                        </div>
                    </div>

                    <!-- Header Head -->
                    <div class="site-title-block">
                        <div class="site-title"><?php echo $options['your_name']; ?></div>
                        <div class="type-wrap">
                            <div class="typed-strings">

                                <?php 
                                    $works = $options['works'];
                                    foreach ($works as $work) { ?>
                                        <span><?php echo $work['work']; ?></span>
                                    <?php }
                                ?>

                            </div>
                                <span class="typed"></span>
                        </div>
                    </div>
                    <!-- /Header Head -->

                    <!-- Navigation -->
                    <div class="site-nav">
                        <!-- Main menu -->
                        <ul class="header-main-menu">
                            <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="fas fa-home"></i> Home</a></li>
                            <li><a class="active" href="#"><i class="fas fa-book-reader"></i> Blog Single</a></li>
                        </ul> 
                        <!-- /Main menu -->

                        <!-- Copyrights -->
                        <div class="copyrights">© <?php echo get_the_date('Y') . ' ' . $options['copyright_text']; ?></div>
                        <!-- / Copyrights -->
                    </div>
                    <!-- /Navigation -->
                </div>
            </header>
            <!-- /Header -->

             <!-- Mobile Header -->
             <div class="responsive-header">
                <div class="responsive-header-name">
                    
                    <?php 
                        $img = $options['profile_pic'];
                        $img_url = $options['profile_pic']['url'];
                        if($img_url = $options['profile_pic']['url']) { ?>
                        <img class="responsive-logo" src="<?php echo $img_url; ?>" alt="<?php echo ($img['title']) ?>">
                    <?php } else { ?>
                        <img class="responsive-logo" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/md-sumon-mia.jpg" alt="<?php echo $options['your_name']; ?>">
                    <?php } ?>

                    <?php echo $options['your_name']; ?>

                </div> 
                <span class="responsive-icon"><i class="lnr lnr-menu"></i></span>
            </div>
            <!-- /Mobile Header -->

            <!-- Main Content Pages -->
            <div class="content-pages">
                <!-- Subpages -->
                <div class="sub-home-pages">
                    <!-- Titlebar -->
                    <div id="titlebar">
                        <div class="container">
                            <div class="special-block-bg">
                                <h2><?php echo esc_html_e( 'My Blog', 'sumoncv' ) ?></h2>
                                <!-- Breadcrumbs -->
                                <nav id="breadcrumbs">
                                    <ul>
                                        <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="lnr lnr-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                                        <li><?php echo get_the_title(); ?></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- /Titlebar -->

                    <!-- Content -->
                    <div class="container">
                        <!-- Blog Posts -->
                        <div class="blog-page">
                            <div class="row">
                                <!-- Post Content -->
                                <div class="col-lg-8 col-md-8">

                                    <!-- Blog Post -->
                                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                        <?php get_template_part('template-parts/content', 'single-post') ?>
                                    <?php endwhile; else: ?>
                                        <?php get_template_part('template-parts/content', 'none') ?>
                                    <?php endif; ?>
                                    <!-- Blog Post / End -->

                                    <!-- About Author -->
                                    <div class="about-author">

                                    <?php 
                                        $img = $options['profile_pic'];
                                        $img_url = $options['profile_pic']['url'];
                                        if($img_url = $options['profile_pic']['url']) { ?>
                                        <img src="<?php echo $img_url; ?>" alt="<?php echo ($img['title']) ?>">
                                    <?php } else { ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/md-sumon-mia.jpg" alt="<?php echo $options['your_name']; ?>">
                                    <?php } ?>

                                        <div class="about-description">
                                            <h4><?php echo $options['your_name']; ?></h4>

                                            <a href="mailto:<?php echo $options['your_email']; ?>"><span ><?php echo $options['your_email']; ?></span></a>

                                            <p><?php echo $options['short_bio']; ?></p>
                                        </div>
                                    </div>

                                    <!-- Related Posts -->
                                    <div class="clearfix"></div>
                                    
                                    <?php get_template_part('template-parts/content', 'related-post') ?>

                                    <!-- Related Posts / End -->
                                    <div class="margin-top-50"></div>
                                    <!-- Reviews -->
                                    
                                    <?php
                                        if(comments_open() || get_comments_number() ) {
                                            comments_template();
                                        }
                                    ?>

                                    <div class="clearfix"></div>
                                    <!-- Add Comment -->

                                    <!-- Add Review Box / End -->
                                </div>
                                <!-- Content / End -->

                                <!-- Widgets -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="sidebar right">

                                        <?php get_sidebar('primary-sidebar'); ?>

                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar / End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->


    <?php get_footer(); ?>