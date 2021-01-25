<?php $orig_post = $post;
    global $post;
    $categories = get_the_category($post->ID);
    if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

    $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 2, // Number of related posts that will be shown.
    'ignore_sticky_posts'=>1
    );

    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
    echo '<h4 class="headline margin-top-25">Related Posts</h4><div class="row blog-grid-flex">';
    while( $my_query->have_posts() ) {
    $my_query->the_post();?>
        <div class="col-md-6 col-sm-12 blog-item">
            <div class="blog-article">
                <div class="post-format"> <span class="post-format-icon"><i class="lnr lnr-picture"></i> </span> </div>
                <div class="comment-like"><span class="mr-2"><i class="fas fa-comment"></i> <?php echo get_comments_number(); ?></span> <span><i class="fas fa-eye" aria-hidden="true"></i> <?php echo getPostViews(get_the_ID()); ?></span> </div>

                <div class="article-img">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                </div>

                <div class="article-link"> 
                    <a href="<?php the_permalink() ?>"><i class="lnr lnr-arrow-right"></i></a>
                </div>
                <div class="article-content related-article-content">
                    <h4><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h4>

                    <div class="meta">
                        <span><?php echo get_the_date('F j Y'); ?></span> 
                        <span><i>In</i> 
                            <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                }
                            ?>
                        </span> 
                        <span><i>Tags</i>
                            <?php 
                                $post_tags = get_the_tags();
                                if ( $post_tags ) {
                                    echo $post_tags[0]->name; 
                                }
                            ?>
                        </span> 
                    </div>

                    <p><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                </div>
            </div>
        </div>

    <?php 
    }
    echo '</div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); 
    
?>