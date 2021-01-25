<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

        <!-- preloader -->
        <div id="preloader">
            <div id="preloader-circle">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- /preloader -->

        <div class="wrapper-page">
            <!-- Header -->
            <header class="header">
                <div class="header-content">
                    <div class="profile-picture-block">
                        <div class="my-photo">
                        <?php if($options['profile_pic']) { 
                                $img = $options['profile_pic'] ?>
                                <img src="<?php echo $img['url']; ?>" alt="">
                            <?php } else { ?>
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/md-sumon-mia.jpg" alt="">
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Header Head -->
                    <div class="site-title-block">
                        <div class="site-title"><?php echo $options['your_name']; ?></div>
                        <div class="type-wrap">
                            <div class="typed-strings">
                                <span>Web Designer</span>
                                <span>Web Developer</span>
                                <span>Wordpress Expert</span>
                            </div>
                                <span class="typed"></span>
                        </div>
                    </div>
                    <!-- /Header Head -->

                    <!-- Navigation -->
                    <div class="site-nav">
                        <!-- Main menu -->
                        <ul class="header-main-menu" id="header-main-menu">
                            <li><a class="active" href="#home"><i class="fas fa-home"></i> Home</a></li>
                            <li><a href="#about-me"><i class="fas fa-user-tie"></i> About Me</a></li>
                            <li><a href="#resume"><i class="fas fa-award"></i> Resume</a></li>
                            <li><a href="#portfolio"><i class="fas fa-business-time"></i> Portfolio</a></li>
                            <li><a href="#blog"><i class="fas fa-book-reader"></i> Blog</a></li>
                            <li><a href="#contact"><i class="fas fa-paper-plane"></i> Contact</a></li>
                        </ul> 
                        <!-- /Main menu -->

                        <!-- Copyrights -->
                        <div class="copyrights">© 2021 All rights reserved.</div>
                        <!-- / Copyrights -->
                    </div>
                    <!-- /Navigation -->
                </div>
            </header>
            <!-- /Header -->

            <!-- Mobile Header -->
            <div class="responsive-header">
                <div class="responsive-header-name">
                    <img class="responsive-logo" src="assets/img/md-sumon-mia.jpg" alt="" />
                    Md Sumon Mia
                </div> 
                <span class="responsive-icon"><i class="lnr lnr-menu"></i></span>
            </div>
            <!-- /Mobile Header -->