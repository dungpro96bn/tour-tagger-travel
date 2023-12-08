<?php get_header(); ?>

    <div id="news" class="news-page">
        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">お知らせ</span>
                    <span class="ttl-en c-g">News</span>
                </h2>
            </div>
        </div>
        <div class="news-block">
            <div class="inner">
                    <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'=> 'news',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'paged' => $paged,
                        'posts_per_page' => '10',
                    );
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>
                        <ul class="newsList">
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                            <li class="newsItem">
                                <a href="<?php the_permalink(); ?>" class="dnp-s-m">
                                    <p class="date dnp-s-m"><?php echo get_the_date(); ?></p>
                                    <p class="text dnp-s-m"><?php the_title(); ?></p>
                                </a>
                            </li>
                        <?php endwhile;?>
                    <?php else: ?>
                            <li class="no_post"><?php _e('There is no news.', 'tcd-w'); ?></li>
                        </ul>
                    <?php endif;
                    wp_reset_postdata(); ?>
                <?php
                if ($result->max_num_pages > 1) {
                    wp_pagenavi();
                }
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>