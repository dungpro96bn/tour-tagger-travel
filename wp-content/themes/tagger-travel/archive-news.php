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
                        'posts_per_page' => '9',
                    );
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>
                        <ul class="newsList">
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                            <li class="newsItem" data-aos="fade-up">
                                <a href="<?php the_permalink(); ?>" class="dnp-s-m">
                                    <p class="date dnp-s-m"><?php echo get_the_date(); ?></p>
                                    <p class="text dnp-s-m"><?php the_title(); ?></p>
                                    <p class="icon-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <g id="Group_68" data-name="Group 68" transform="translate(-496 -3642)">
                                                <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(496 3642)" fill="#fff" stroke="#6b5d54" stroke-width="1">
                                                    <circle cx="12" cy="12" r="12" stroke="none"></circle>
                                                    <circle cx="12" cy="12" r="11.5" fill="none"></circle>
                                                </g>
                                                <path id="Path_953" data-name="Path 953" d="M1025.225,1702.412l-4,4,4,4" transform="translate(1531.725 5360.412) rotate(180)" fill="none" stroke="#6b5d54" stroke-width="1"></path>
                                            </g>
                                        </svg>
                                    </p>
                                </a>
                            </li>
                        <?php endwhile;?>
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