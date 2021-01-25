<?php get_header(); ?>

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="container">
            <div class="special-block-bg">
                <h2><?php wp_title(''); ?></h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="lnr lnr-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                        <li><a href=""><?php wp_title(''); ?></a></li>
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
            <!-- Blog Post -->
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <?php get_template_part('template-parts/content', 'single-post') ?>
            <?php endwhile; else: ?>
                <?php get_template_part('template-parts/content', 'not-found') ?>
            <?php endif; ?>

        </div>
    </div>
    <?php get_template_part( 'template-parts/content', 'page-footer' ) ?>

<?php get_footer(); ?>