<?php get_header(); ?>

<!-- Titlebar -->
<div id="titlebar">
        <div class="container">
            <div class="special-block-bg">
                <h2><?php echo esc_html_e( 'Not Found', 'sumoncv' ) ?></h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="lnr lnr-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                        <li><?php echo esc_html_e( 'Not Found', 'sumoncv' ) ?></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!-- /Titlebar -->


<?php get_template_part( 'template-parts/content', '404' ) ?>

<?php get_template_part( 'template-parts/content', 'page-footer' ) ?>

<?php get_footer(); ?>