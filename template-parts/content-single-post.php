
<div class="blog-post single-post">
    <!-- Img -->
    <div class="single-post-thumb">
        <?php the_post_thumbnail(); ?>
    </div>
    
    <!-- Content -->
    <div class="post-content">
        <h3><?php echo get_the_title(); ?></h3>
        <ul class="post-meta">
            <li><a href=""><i class="lnr lnr-user"></i> &nbsp;<?php the_author_posts_link(); ?></a></li>
            <li><i class="lnr lnr-history"></i> &nbsp;<?php echo get_the_date('j F Y'); ?></li>
            <li>
                <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo '<i class="lnr lnr-book"></i> ' . '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }
                ?>
            </li>
            <li><a href="#comments"><i class="lnr lnr-bubble"></i> <?php echo get_comments_number(); ?> Comments</a></li>
            <li><i class="fas fa-eye"></i> &nbsp;<?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?></li>
        </ul>
        <?php the_content(); ?>

        <!-- Share Buttons -->
        <ul class="share-buttons margin-top-40 margin-bottom-0">

            <li><a class="fb-share" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>"><i class="fab fa-facebook-f"></i> Share</a></li>

            <li><a class="twitter-share" target="_blank" href="https://twitter.com/share?ref_src=<?php the_permalink() ?>"><i class="fab fa-twitter"></i> Tweet</a></li>

            <li><a class="linkedin-share" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>

            <li><a class="pinterest-share"target="_blank"  href="http://pinterest.com/pin/create/button/?url=<?php the_permalink() ?>"><i class="fab fa-pinterest-p"></i> Pin</a></li>

        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Post Navigation -->
<ul id="posts-nav" class="margin-top-0 margin-bottom-45">
    <li class="next-post">
        <span>Next Post</span>
        <?php next_post_link( '%link', __( '%title', 'sumoncv' ), false ); ?>
    </li>
    <li class="prev-post">
        <span>Previous Post</span>
        <?php previous_post_link( '%link', __( '%title', 'sumoncv' ), false ); ?>  
    </li>
</ul>