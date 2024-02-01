<?php get_header(); ?>

    <div id="ourStory" class="ourStory-page">
        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">私たちの思い</span>
                    <span class="ttl-en c-g">Our Story</span>
                </h2>
            </div>
        </div>
        <div class="ourStory-block">
            <div class="inner">

                <div class="description" data-aos="fade-up">
                    <p class="text dnp-s-m">私たちの日ごろの体験や会社のイベントを紹介し、<br class="pc-br"/>TAGGER TRAVELが大切にしていることを記事の中でお伝えします</p>
                </div>

                    <?php
                    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'=> 'our-story',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'paged' => $paged,
                        'posts_per_page' => '9',
                    );
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>
                        <ul class="ourStory-list">
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                            <li class="ourStory-item" data-aos="fade-up">
                                <div class="ourStory-inner">
                                    <div class="featured-image">
                                        <?php $image = get_the_post_thumbnail_url();
                                        if($image): ?>
                                            <picture class="image">
                                                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                            </picture>
                                        <?php else: ?>
                                            <picture class="image">
                                                <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/no-image.jpg">
                                                <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>">
                                            </picture>
                                        <?php endif; ?>
                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                    </div>
                                    <div class="ourStory_information">
                                        <p class="date-time dnp-s-m"><?php echo get_the_date(); ?></p>
                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                        <div class="text-info"><p><?php echo get_field('short_description'); ?></p></div>
                                        <div class="ourStory-contact">
                                            <a class="dnp-s-m btn-readMore" href="<?php the_permalink(); ?>">read more<i class="fa-light fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
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