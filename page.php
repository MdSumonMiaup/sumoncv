<?php get_header(); ?>

<?php get_template_part( 'template-parts/content', 'page-banner' ) ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="wrapper-page">
        <div class="container">
            <div class="entry-content">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
    <?php endwhile; else: ?>
    <?php get_template_part( 'template-parts/content', '404' ) ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/content', 'page-footer' ) ?>

<?php get_footer(); ?>