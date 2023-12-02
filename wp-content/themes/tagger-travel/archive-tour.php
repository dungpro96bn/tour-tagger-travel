<?php get_header(); ?>

    <div id="tour-template" class="tour-page">
        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">ベトナム国内ツアー</span>
                    <span class="ttl-en c-g">Vietnam Tour</span>
                </h2>
            </div>
        </div>
        <div class="tour-tabContent">
            <div class="inner">
                <ul class="areaList">
                    <?php
                    $args = array(
                        'post_type' => 'tour_area',
                        'post_status' => 'publish',
                        'posts_per_page' => '4',
                        'meta_key'       => 'order',
                        'orderby'        => 'meta_value_num',
                        'order'          => 'ASC'
                    );
                    $result = new WP_Query($args);
                    if ($result->have_posts()) : ?>
                        <?php while ($result->have_posts()) : $result->the_post();

                            $slug = get_post_field( 'post_name', get_post() );
                            if($slug == "northern"){
                                $title_ja = "北部エリア";
                                $title_en = "Northern";
                            } elseif ($slug == "central"){
                                $title_ja = "中部エリア";
                                $title_en = "Central";
                            } elseif ($slug == "southern"){
                                $title_ja = "南部エリア";
                                $title_en = "Southern";
                            } elseif ($slug == "southern-resort"){
                                $title_ja = "南部リゾートエリア";
                                $title_en = "Southern Resort";
                            }
                        ?>
                            <li class="areaItem" data-aos="fade-up">
                                <a class="scroll" href="#<?php echo $slug; ?>">
                                    <picture class="image">
                                        <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                        <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </picture>
                                    <h3 class="title">
                                        <span class="area-ja dnp-s-m"><?php echo $title_ja; ?></span>
                                        <span class="area-en gp-p"><?php echo $title_en; ?></span>
                                    </h3>
                                    <h4 class="local"><?php echo get_field('popular_tourist_destination'); ?></h4>
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
                        <?php endwhile; ?>
                     <?php endif;
                     wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>

        <div class="tourContent">
            <div class="tourByArea-list">
                <?php
                $args = array(
                    'taxonomy' => 'area',
                    'hide_empty' => true,
                    'orderby'    => 'ID',
                    'order'      => 'ASC',
                    'parent' => 0
                );
                $areas = get_categories($args); ?>
                    <?php foreach($areas as $area) :?>
                        <?php
                        $terms = $area->slug;
                        if($terms == "northern"){
                            $title_en = "Northern";
                            $title_ja = "北部エリア";
                        } elseif ($terms == "central"){
                            $title_en = "Central";
                            $title_ja = "中部エリア";
                        } elseif ($terms == "southern"){
                            $title_en = "Southern";
                            $title_ja = "南部エリア";
                        } elseif ($terms == "southern-resort"){
                            $title_en = "Southern Resort";
                            $title_ja = "南部リゾートエリア";
                        }
                        ?>

                        <div id="<?php echo $terms; ?>" class="tourByArea-item">
                            <div class="inner">
                                <h2 class="heading-block" data-aos="fade-up">
                                    <picture class="icon-heading">
                                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png" alt="">
                                    </picture>
                                    <span class="ttl-ja dnp-s-m"><?php echo $title_ja; ?></span>
                                    <span class="ttl-en c-g"><?php echo $title_en; ?></span>
                                </h2>
                                <?php
                                //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'tour',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
//                                    'paged' => $paged,
                                    'posts_per_page' => '10',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'area',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    ),
                                    'meta_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'key' => 'tour_time',
                                            'value' => '半日',
                                        ),
                                        array(
                                            'key' => 'tour_time',
                                            'value' => '1日',
                                        )
                                    ),
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <div class="tour-halfDay">
                                        <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>半日・1日ツアー</span></h3>
                                        <ul class="tourList-area">
                                            <?php while ($result->have_posts()) : $result->the_post(); ?>
                                                <li class="tourItem-area" data-aos="fade-up">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="featured-image">
                                                            <picture class="image">
                                                                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                            </picture>
                                                            <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                        </div>
                                                        <div class="infoTour">
                                                            <h4 class="text dnp-s-m"><?php the_title(); ?></h4>
                                                            <p class="price"><?php echo get_field('tour_price') ?> <span>VND</span></p>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>

                                <?php endif;
                                wp_reset_postdata(); ?>
                                <?php
                                //if ($result->max_num_pages > 1) {
                                //wp_pagenavi();
                                //}
                                ?>

                                <?php
                                //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'tour',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
//                                    'paged' => $paged,
                                    'posts_per_page' => '10',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'area',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    ),
                                    'meta_query' => array(
                                        'relation' => 'OR',
                                        array(
                                            'key' => 'tour_time',
                                            'value' => '1泊2日',
                                        ),
                                        array(
                                            'key' => 'tour_time',
                                            'value' => '2泊3日',
                                        )
                                    ),
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <div class="tour-overnight">
                                        <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>宿泊付ツアー</span></h3>
                                        <ul class="tourList-area">
                                            <?php while ($result->have_posts()) : $result->the_post(); ?>
                                                <li class="tourItem-area" data-aos="fade-up">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="featured-image">
                                                            <picture class="image">
                                                                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                            </picture>
                                                            <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                        </div>
                                                        <div class="infoTour">
                                                            <h4 class="text dnp-s-m"><?php the_title(); ?></h4>
                                                            <p class="price"><?php echo get_field('tour_price') ?> <span>VND</span></p>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>

                                <?php endif;
                                wp_reset_postdata(); ?>
                                <?php
                                //if ($result->max_num_pages > 1) {
                                //wp_pagenavi();
                                //}
                                ?>
                            </div>
                        </div>

                    <?php endforeach; ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>