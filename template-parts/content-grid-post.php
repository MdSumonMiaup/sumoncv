<div class="col-md-6 col-sm-6 blog-item">
    <div class="blog-article">
        <div class="post-format"> <span class="post-format-icon"><i class="lnr lnr-picture"></i> </span> </div>
        <div class="comment-like"><span class="mr-2"><i class="fas fa-comment"></i> <?php echo get_comments_number(); ?></span> <span><i class="fas fa-eye"></i> <?php echo getPostViews(get_the_ID()); ?></span> </div>

        <div class="article-img">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </div>

        <div class="article-link"> 
            <a href="<?php the_permalink() ?>"><i class="lnr lnr-arrow-right"></i></a>
        </div>
        <div class="article-content">
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