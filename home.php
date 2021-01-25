<?php get_header(); 
/*
Template Name: Blog
*/
?>

<div class="wrapper-page">
    <!-- Main Content Pages -->
    <!-- Titlebar -->
    <div id="titlebar">
        <div class="container">
            <div class="special-block-bg">
                <h2><?php echo esc_html('My Blog', 'sumoncv') ?></h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="lnr lnr-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                        <li><?php wp_title(''); ?></li>
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

                    <div class="row blog-grid-flex">
                        <!-- Single Blog Area -->
                        <?php if(have_posts()): while(have_posts()): the_post(); ?>
                            <?php get_template_part('template-parts/content', 'grid-post') ?>
                        <?php endwhile; else: ?>
                            <?php get_template_part('template-parts/content', '404') ?>
                        <?php endif; ?>
                    </div>

                    <ul class="pagination">
                        <?php the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( '<i class="fas fa-arrow-left"></i>', 'sumoncv' ),
                            'next_text' => __( '<i class="fas fa-arrow-right"></i>', 'sumoncv' ),
                        ) ); ?>
                    </ul>

                </div>
                <!-- Content / End -->

                <!-- Widgets -->
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar right">

                        <?php get_sidebar('author'); ?>

                    </div>
                </div>
            </div>
            <!-- Sidebar / End -->
        </div>
    </div>
    <?php get_template_part( 'template-parts/content', 'page-footer' ) ?>
    <!-- /Main Content -->
</div>

<?php get_footer(); ?>