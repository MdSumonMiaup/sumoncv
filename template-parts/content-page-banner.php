<!-- Titlebar -->
    <div id="titlebar">
        <div class="container">
            <div class="special-block-bg">
                <h2><?php wp_title(''); ?></h2>
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url('/') ) ?>"><i class="lnr lnr-home"></i> <?php echo esc_html_e( 'Home', 'sumoncv' ) ?></a></li>
                        <li><a href="<?php echo get_page_link(); ?>"><?php wp_title(''); ?></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<!-- /Titlebar -->