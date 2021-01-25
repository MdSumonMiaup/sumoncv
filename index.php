
<?php get_header(); 
/*
Template Name: Home
*/
?> 

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
                        <div class="site-title"><?php echo get_option( 'my_framework' )['your_name'] ?></div>
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
                        <ul class="header-main-menu" id="header-main-menu">
                            <li><a class="active" href="#home"><i class="fas fa-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                            <li><a href="#about-me"><i class="fas fa-user-tie"></i> <?php echo esc_html_e( 'About Me', 'sumoncv' ) ?></a></li>
                            <li><a href="#resume"><i class="fas fa-award"></i> <?php echo esc_html_e( 'Resume', 'sumoncv' ) ?></a></li>
                            <li><a href="#portfolio"><i class="fas fa-business-time"></i> <?php echo esc_html_e( 'Portfolio', 'sumoncv' ) ?></a></li>
                            <li><a href="#blog"><i class="fas fa-book-reader"></i> <?php echo esc_html_e( 'Blog', 'sumoncv' ) ?></a></li>
                            <li><a href="#contact"><i class="fas fa-paper-plane"></i> <?php echo esc_html_e( 'Contact', 'sumoncv' ) ?></a></li>
                        </ul> 
                        <!-- /Main menu -->

                        <!-- Copyrights -->
                        <div class="copyrights"><?php echo '© ' . get_the_date('Y') . ' ' . $options['copyright_text']; ?></div>
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
                    <!-- Start Page home -->
                    <section id="home" class="sub-page start-page">
                        <div class="sub-page-inner home-bg">
                            <div id="<?php echo $options['home_effect'] ?>" class="mask <?php echo $options['home_effect'] ?>"></div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="title-block">
                                        <h2><?php echo esc_html_e( "Hello I'm", 'sumoncv' ) ?> <b><?php echo $options['your_name']; ?></b></h2>
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
                                        <div class="home-buttons">
                                            <a href="<?php echo $options['button_1_url']; ?>" class="bt-submit"><i class="<?php echo $options['button_1_icon']; ?>"></i><?php echo $options['button_1']; ?></a>
                                            <a target="_blank" href="<?php echo $options['button_2_url']; ?>" class="bt-submit"><i class="<?php echo $options['button_2_icon']; ?>"></i><?php echo $options['button_2']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Start Page home -->

                    <!-- About Me Subpage -->
                    <section id="about-me" class="sub-page">
                        <div class="sub-page-inner">
                            <div class="section-title">
                                <div class="main-title">
                                    <div class="title-main-page">
                                        <h4><?php echo $options['about_title']; ?></h4>
                                        <p><?php echo $options['about_subtitle']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="section-content">
                                <!-- about me -->
                                <div class="row pb-30">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <h3><?php echo $options['your_name']; ?></h3>
                                        <span class="about-location"><i class="lnr lnr-map-marker"></i> <?php echo $options['your_address']['address']; ?></span>

                                        <?php 
                                            $about_desc = $options['about_desc'];
                                            foreach ($about_desc as $description) { ?>

                                                <p class="about-content"><?php echo $description['description']; ?></p>

                                            <?php }
                                        ?>

                                        <ul class="bout-list-summry row">

                                        <?php 
                                            $achives = $options['about_achive'];
                                            foreach ($achives as $achive) { ?>

                                            <li class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="icon-info">
                                                    <i class="<?php echo $achive['achive_icon']; ?>"></i> 
                                                </div>
                                                <div class="details-info">
                                                    <h6><?php echo $achive['achive_title']; ?></h6>
                                                    <p><?php echo $achive['achive_subtitle']; ?></p>
                                                </div>
                                            </li>

                                            <?php }
                                        ?>

                                        </ul>
                                    </div>

                                    <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                        <div class="box-img">

                                        <?php 
                                            $img = $options['about_sec_pic'];
                                            $img_url = $options['about_sec_pic']['url'];
                                            if ($img_url = $options['about_sec_pic']['url']) {  ?>
                                            <img class="img-fluid" src="<?php echo $img_url; ?>" alt="<?php echo $img['title']; ?>">
                                        <?php } else { ?>
                                            <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/about.png" alt="">
                                        <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <!-- /about me -->

                                <!-- services -->
                                <div class="special-block-bg">
                                    <div class="section-head">
                                        <h4>
                                            <span><?php echo $options['service_subheading']; ?></span>
                                            <?php echo $options['service_heading']; ?>
                                        </h4>
                                    </div>
                                    <div class="row">

                                    <?php 
                                        $services = $options['services'];
                                        foreach ($services as $service) { ?>

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="services-list">
                                                <!-- Service Item 1 -->
                                                <div class="service-block">
                                                    <div class="service-icon">
                                                        <i class="<?php echo $service['service_icon']; ?>"></i>
                                                    </div>
                                                    <div class="service-text">
                                                        <h4><?php echo $service['service_name']; ?></h4>
                                                        <p><?php echo $service['service_desc']; ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Service Item 1 -->
                                            </div>
                                        </div>

                                        <?php }
                                    ?>
                                    </div>
                                </div>
                                <!-- /services -->

                                <!-- Video section -->
                                <div class="video-section">
                                    <div class="overlay pb-40 pt-40">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                                    <div class="sub-title">
                                                        <h6><?php echo $options['hire_heading']; ?></h6>
                                                        <h2><?php echo $options['hire_reason']; ?></h2>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                                    <div class="pulse-icon">
                                                        <div class="icon-wrap">
                                                            <a target="_blank" href="<?php echo $options['video_link']; ?>">
                                                                <i class="fa fa-play"></i> 
                                                            </a>
                                                        </div>
                                                        <div class="elements">
                                                            <div class="circle circle-outer"></div>
                                                            <div class="circle circle-inner"></div>
                                                            <div class="pulse pulse-1"></div>
                                                            <div class="pulse pulse-2"></div>
                                                            <div class="pulse pulse-3"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Video section -->

                                <!-- Fun Facts -->
                                <div class="row pb-30 pt-30">
                                    <div class="section-head col-sm-12">
                                        <h4>
                                            <span><?php echo $options['achivement_subheading']; ?></span>
                                            <?php echo $options['achivement_heading']; ?>
                                        </h4>
                                    </div>
                                    <!-- Achivements -->
                                    
                                    <?php 
                                        $achivements = $options['achivements'];
                                        foreach ($achivements as $achivement) { ?>

                                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                            <div class="pb-30">
                                                <div class="counter-block">
                                                    <i class="pe-7s-smile"></i>
                                                    <h4><?php echo $achivement['achivement_name']; ?></h4>
                                                    <span class="counter-block-value" data-count="<?php echo $achivement['achivement_number']; ?>">0</span>
                                                </div>
                                            </div>
                                        </div>

                                        <?php }
                                    ?>

                                    <!-- / Achivements-->
                                </div>
                                <!-- /Fun Facts -->

                                <!-- List Of Testimonials -->
                                <div class="special-block-bg">
                                    <div class="section-head">
                                        <h4>
                                            <span><?php echo $options['client_subheading'] ?></span>
                                            <?php echo $options['client_heading'] ?>
                                        </h4>
                                    </div>
                                    <div class="testimonials owl-carousel">
                                        <!-- Testimonial item 1 -->

                                        <?php 
                                        $clients = $options['clients'];
                                        foreach ($clients as $client) { ?>

                                        <div class="testimonial-item">
                                            <div class="testimonial-content">
                                                <div class="testimonial-review">
                                                    <p><?php echo $client['client_comment'] ?></p>
                                                </div>
                                            </div>            
                                            <div class="testimonial-footer">
                                                <div class="testimonial-avatar">
                                                    <img src="<?php echo $client['client_image']['url']; ?>" alt="<?php echo $client['client_image']['title']; ?>"/>
                                                </div>              
                                                <div class="testimonial-owner-content">
                                                    <p class="testimonial-owner"><?php echo $client['client_name'] ?></p>
                                                    <ul class="testimonial-rating">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <?php }
                                    ?>
                                    </div>
                                </div>
                                <!-- /List Of Testimonials -->
                            <!-- /Clients Block -->
                            </div>
                        </div>
                    </section>
                    <!-- About Me Subpage -->

                    <!-- Resume Subpage -->
                    <section id="resume" class="sub-page">
                        <div class="sub-page-inner">
                            <div class="section-title">
                                <div class="main-title">
                                    <div class="title-main-page">
                                        <h4><?php echo $options['resume_title']; ?></h4>
                                        <p><?php echo $options['resume_subtitle']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-content">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">

                                        <!-- Work History -->
                                        <div class="pb-300">
                                            <div class="section-head col-sm-12">
                                                <h4>
                                                    <span><?php echo $options['work_history_subtitle']; ?></span>
                                                    <?php echo $options['work_history_title']; ?>
                                                </h4>
                                                <a class="bt-submit" href="<?php echo $options['cv_file']; ?>"><i class="fas fa-cloud-download-alt"></i> <?php echo $options['download_resume_btn']; ?></a>
                                            </div>

                                            <div class="main-timeline">

                                            <?php 
                                                $resume_works = $options['resume_works'];
                                                foreach ($resume_works as $resume_work) { ?>

                                                <div class="timeline">
                                                    <div class="timeline-icon">

                                                    <?php 
                                                        $img = $resume_work['work_company_logo'];
                                                        $img_url = $resume_work['work_company_logo']['url'];
                                                        if ($img_url = $resume_work['work_company_logo']['url']) {  ?>
                                                        <img src="<?php echo $img_url; ?>" alt="<?php echo $img['title']; ?>">
                                                    <?php } else { ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/fiverr.png" alt="fiverr">
                                                    <?php } ?>

                                                    </div>
                                                    <div class="timeline-content">
                                                        <span class="date"><?php echo $resume_work['work_start_time']; ?> - <?php echo $resume_work['work_end_time']; ?></span>
                                                        <h5 class="title"><?php echo $resume_work['position']; ?></h5>
                                                        <p class="description"><?php echo $resume_work['work_Desc']; ?></p>
                                                    </div>
                                                </div>

                                                <?php }
                                            ?>
                                        </div>   
                                        <!-- /Work History -->

                                        <!-- Skills -->
                                        <div class="pb-30 pt-30">
                                            <div class="row list-skills">
                                                <!-- Work Skills -->
                                                <div class="col-xs-12 col-sm-12 col-md-12">
                                                    <div class="special-block-bg">
                                                        <div class="section-head">
                                                            <h4>
                                                                <span><?php echo $options['skill_title'] ?></span>
                                                                <?php echo $options['skill_subtitle'] ?>
                                                            </h4>
                                                        </div>
                                                        <div class="row">

                                                            <?php 
                                                                $skills = $options['skills'];
                                                                foreach ($skills as $skill) { ?>

                                                                <div class="col-xs-12 col-sm-6 col-md-6">
                                                                    <div class="skills-items skills-progressbar">
                                                                        <div class="skill-item">
                                                                            <h4><?php echo $skill['skill_name'] ?></h4>
                                                                            <div class="progress">
                                                                                <div class="progress-bar wow fadeInLeft" data-progress="<?php echo $skill['skill_percentage'] ?>%" style="width: <?php echo $skill['skill_percentage'] ?>%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> </div>
                                                                            </div>
                                                                            <span><?php echo $skill['skill_percentage'] ?>%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <?php }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- /Work Skills -->
                                            </div>
                                        </div>
                                        <!-- /Skills -->

                                        <!-- Education History -->
                                        <div class="pt-30">   
                                            <div class="section-head">
                                                <h4>
                                                    <span><?php echo $options['education_history_subtitle'] ?></span>
                                                    <?php echo $options['education_history_title'] ?>
                                                </h4>
                                            </div>
                                            <div class="main-timeline">

                                            <?php 
                                                $educations = $options['educations'];
                                                foreach ($educations as $education) { ?>

                                                <div class="timeline">
                                                    <div class="timeline-icon">

                                                    <?php 
                                                        $img = $education['institution_logo'];
                                                        $img_url = $education['institution_logo']['url'];
                                                        if ($img_url = $education['institution_logo']['url']) {  ?>
                                                        <img src="<?php echo $img_url; ?>" alt="<?php echo $img['title']; ?>">
                                                    <?php } else { ?>
                                                        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/fiverr.png" alt="fiverr">
                                                    <?php } ?>

                                                    </div>
                                                    <div class="timeline-content">
                                                        <span class="date"><?php echo $education['passing_year'] ?></span>
                                                        <h5 class="title"><?php echo $education['degree'] ?></h5>
                                                        <p class="description"><?php echo $education['degree_details'] ?></p>
                                                    </div>
                                                </div>

                                                <?php }
                                            ?>
                                            </div>
                                        </div>
                                        <!-- /Education History -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End of Resume Subpage -->

                    <!-- Portfolio Subpage -->
                    <section id="portfolio" class="sub-page">
                        <div class="sub-page-inner">
                            <div class="section-title">
                                <div class="main-title">
                                    <div class="title-main-page">
                                        <h4><?php echo $options['portfolio_title'] ?></h4>
                                        <p><?php echo $options['portfolio_subtitle'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-content">
                                <div class="filter-tabs">
                                    <button class="fil-cat" data-rel="all"><span></span> All</button>
                                    <?php
                                        $portfolio_menus =  get_terms('portfolio-cat');
                                        foreach ($portfolio_menus as $portfolio_menu){
                                    ?>
                                        <button class="fil-cat" data-rel="<?php echo $portfolio_menu->slug;?>"><span><?php echo esc_html_e( "0", 'sumoncv' ) ?><?php echo $portfolio_menu->count;?></span> <?php echo $portfolio_menu->name;?></button>
                                    <?php
                                        }
                                    ?>
                                </div>

                                <div class="portfolio-grid portfolio-trigger" id="portfolio-page">
                                    <div class="row">

                                    <?php
                                        $args = array(
                                            'post_type' => 'portfolio',
                                            'posts_per_page' => 14
                                        );
                                        $query = new WP_Query($args);
                                        ?>
                                        
                                        <?php 
                                        while($query->have_posts()){
                                            $query->the_post();
                                            $live_url = get_field('project_live_link');
                                        ?>

                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item all 
                                        
                                        <?php
                                            // This code is for category slug filtering
                                            $portfolio_items = get_the_terms(get_the_ID(), 'portfolio-cat');
                                            foreach ($portfolio_items as $portfolio_item){
                                                echo $portfolio_item->slug.' ';
                                            }
                                        ?>
                                        
                                        ">
                                            <div class="portfolio-img">
                                            <?php the_post_thumbnail();?>
                                            </div>
                                            <div class="portfolio-data">
                                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                                                <div class="portfolio-attr"> 
                                                    <a target="_blank" href="
                                                    <?php
                                                        if ($live_url = get_field('project_live_link')) {
                                                            echo $live_url; 
                                                        } else {
                                                            echo esc_html_e( '#', 'sumoncv' );
                                                        }
                                                    ?>
                                                    
                                                    "><i class="lnr lnr-link"></i></a> 
                                                    <a href="<?php the_post_thumbnail_url();?>" data-rel="lightcase:gal" title=""><i class="lnr lnr-move"></i></a> 
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php
                                        }
                                        wp_reset_postdata();
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Portfolio Subpage -->

                    <!-- Blog Subpage -->
                    <section id="blog" class="sub-page">
                        <div class="sub-page-inner">
                            <div class="section-title">
                                <div class="main-title">
                                    <div class="title-main-page">
                                        <h4><?php echo $options['blog_title'] ?></h4>
                                        <p><?php echo $options['blog_subtitle'] ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="section-content">
                                <div class="row blog-grid-flex">
                                    
                                    <!-- Single Blog Area -->
                                    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                                        <?php get_template_part('template-parts/content', 'post') ?>
                                    <?php endwhile; else: ?>
                                        <?php get_template_part('template-parts/content', 'none') ?>
                                    <?php endif; ?>

                                </div>
                                <!-- Pagination -->

                            </div>
                        </div>
                    </section>
                    <!-- /Blog Subpage -->

                    <!-- Contact Subpage -->
                    <section id="contact" class="sub-page">
                        <div class="sub-page-inner">
                            <div class="section-title">
                                <div class="main-title">
                                    <div class="title-main-page">
                                        <h4><?php echo $options['contact_title']; ?></h4>
                                        <p><?php echo $options['contact_subtitle']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form -->
                            <div class="row contact-form pb-30">
                                <div class="col-sm-12 col-md-5 col-lg-5 left-background">

                                <?php 
                                    $img = $options['contact_side_img'];
                                    $img_url = $options['contact_side_img']['url'];
                                    if ($img_url = $options['contact_side_img']['url']) {  ?>
                                    <img src="<?php echo $img_url; ?>" alt="<?php echo $img['title']; ?>">
                                <?php } else { ?>
                                    <img class="img-fluid" src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/mailbox.png" alt="">
                                <?php } ?>

                                </div>
                                
                                <div class="col-sm-12 col-md-7 col-lg-7">
                                    <?php
                                        $contact_form = '[contact-form-7 id="74" title="Contact Me"]';
                                        if ($contact_form = '[contact-form-7 id="74" title="Contact Me"]') {
                                            echo do_shortcode($contact_form);
                                        } else {
                                            echo do_shortcode($options['contact_form']);
                                        }
                                    ?>
                                </div>
                            </div>
                            <!-- /Contact Form -->

                            <!-- Contact Details -->
                            <div class="pt-50 pb-30">
                                <div class="section-head">
                                    <h4>
                                        <span><?php echo $options['con_info_subtitle'] ?></span>
                                        <?php echo $options['con_info_title'] ?>
                                    </h4>
                                </div>

                                <!-- Contact Info -->
                                <div class="sidebar-textbox row pb-50">
                                    <div class="contact-info d-flex col-md-4">
                                        <div class="w-25">
                                            <div class="contact-icon">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="contact-text w-75">
                                            <h2><?php echo esc_html_e( "Phone", 'sumoncv' ) ?></h2>
                                            <p><a href="tel:<?php echo $options['phone_num'] ?>"><?php echo $options['phone_num'] ?></a></p>
                                        </div>
                                    </div>
                                    <div class="contact-info d-flex col-md-4">
                                        <div class="w-25">
                                            <div class="contact-icon">
                                                <i class="far fa-envelope-open"></i>
                                            </div>
                                        </div>
                                        <div class="contact-text w-75">
                                            <h2><?php echo esc_html_e( "Email", 'sumoncv' ) ?></h2>
                                            <p><a href="mailto:<?php echo $options['your_email'] ?>"><?php echo $options['your_email'] ?></a></p>
                                        </div>
                                    </div>
                                    <div class="contact-info d-flex col-md-4">
                                        <div class="w-25">
                                            <div class="contact-icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </div>
                                        </div>
                                        <div class="contact-text w-75">
                                            <h2><?php echo esc_html_e( "Address", 'sumoncv' ) ?></h2>
                                            <p><a target="_blank" href="https://maps.google.com/maps?q=<?php echo $options['your_address']['latitude']; ?>, <?php echo $options['your_address']['longitude']; ?>"><?php echo $options['your_address']['address']; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Contact info -->

                                <!-- Map Container -->
                                <div class="contact-map pt-50">
                                    <!-- GOOGLE MAP -->
                                    <div id="google-map-embede">

                                        <iframe src="https://maps.google.com/maps?q=<?php echo $options['your_address']['latitude']; ?>, <?php echo $options['your_address']['longitude']; ?>&z=<?php echo $options['your_address']['zoom']; ?>&&output=embed"></iframe>

                                    </div>	
                                </div>
                                <!-- /Map Container -->

                                <!-- Social Media -->
                                <div class="pt-50">
                                    <div class="social-media-block">
                                        <h4><?php echo $options['follow_text'] ?>: </h4>
                                        <ul class="social-media-links">

                                        <?php $social_links = $options['social_links'];
                                            foreach ($social_links as $link) { ?>

                                            <li><a target="_blank" href="<?php echo $link['social_url'] ?>"><i class="<?php echo $link['social_icon'] ?>"></i></a></li>

                                        <?php 
                                            }
                                        ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Social Media -->
                            </div>
                            <!-- /Contact Details -->  
                        </div>
                    </section>
                    <!-- End Contact Subpage -->

                </div>
                <!-- /Page changer wrapper -->
            </div>
            <!-- /Main Content -->
        </div>

        <?php get_footer(); ?>