<?php get_header();

$front_page_id = get_option('page_on_front');
$price_vnd = get_field('exchange_rate_vnd', $front_page_id);
$exchange_rate_vnd = str_replace(',', '', $price_vnd);

?>

    <div id="hotel-template" class="hotel-page">
        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">ベトナム国内ホテル</span>
                    <span class="ttl-en c-g">Hotel</span>
                </h2>
            </div>
        </div>
        <div class="tour-tabContent">
            <div class="inner">
                <p class="text-description dnp-s-m" data-aos="fade-up">ベトナム北部から南部まで<br class="sp-br"/>ベトナム全国エリアのホテルをご案内可能です。</p>
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
                                <a class="box-shadow scroll" href="#<?php echo $slug; ?>">
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
                                            <g id="Group_77" data-name="Group 77" transform="translate(3666 -496) rotate(90)">
                                                <g id="Group_68" data-name="Group 68">
                                                    <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(496 3642)" fill="#fff" stroke="#6b5d54" stroke-width="1">
                                                        <circle cx="12" cy="12" r="12" stroke="none"/>
                                                        <circle cx="12" cy="12" r="11.5" fill="none"/>
                                                    </g>
                                                    <path id="Path_953" data-name="Path 953" d="M1025.225,1702.412l-4,4,4,4" transform="translate(1531.725 5360.412) rotate(180)" fill="none" stroke="#6b5d54" stroke-width="1"/>
                                                </g>
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

        <div class="hotelContent">
            <div class="hotelByArea-list">
                <?php
                $args = array(
                    'taxonomy' => 'area_hotel',
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

                        <div id="<?php echo $terms; ?>" class="hotel-colItem" data-aos="fade-up">
                            <div class="inner">
                                <h2 class="heading-block" data-aos="fade-up">
                                    <picture class="icon-heading">
                                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png" alt="">
                                    </picture>
                                    <span class="ttl-ja dnp-s-m"><?php echo $title_ja; ?></span>
                                    <span class="ttl-en c-g"><?php echo $title_en; ?></span>
                                </h2>

                                <div class="hotel-rating">
                                    <ul class="rating_list">
                                        <li class="rating_item" data-aos="fade-up">
                                            <a class="tab-action active" href="#<?php echo $terms; ?>-5star">
                                                <span class="ttl dnp-s-m">5つ星</span>
                                                <picture class="icon-star">
                                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/5_star_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/5_star_pc.png 2x">
                                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/5_star_pc.png" alt="">
                                                </picture>
                                                <p class="icon-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="Group_77" data-name="Group 77" transform="translate(3666 -496) rotate(90)">
                                                            <g id="Group_68" data-name="Group 68">
                                                                <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(496 3642)" fill="#fff" stroke="#6b5d54" stroke-width="1">
                                                                    <circle cx="12" cy="12" r="12" stroke="none"/>
                                                                    <circle cx="12" cy="12" r="11.5" fill="none"/>
                                                                </g>
                                                                <path id="Path_953" data-name="Path 953" d="M1025.225,1702.412l-4,4,4,4" transform="translate(1531.725 5360.412) rotate(180)" fill="none" stroke="#6b5d54" stroke-width="1"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="rating_item" data-aos="fade-up">
                                            <a class="tab-action" href="#<?php echo $terms; ?>-4star">
                                                <span class="ttl dnp-s-m">4つ星</span>
                                                <picture class="icon-star">
                                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/4_star_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/4_star_pc.png 2x">
                                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/4_star_pc.png" alt="">
                                                </picture>
                                                <p class="icon-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="Group_77" data-name="Group 77" transform="translate(3666 -496) rotate(90)">
                                                            <g id="Group_68" data-name="Group 68">
                                                                <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(496 3642)" fill="#fff" stroke="#6b5d54" stroke-width="1">
                                                                    <circle cx="12" cy="12" r="12" stroke="none"/>
                                                                    <circle cx="12" cy="12" r="11.5" fill="none"/>
                                                                </g>
                                                                <path id="Path_953" data-name="Path 953" d="M1025.225,1702.412l-4,4,4,4" transform="translate(1531.725 5360.412) rotate(180)" fill="none" stroke="#6b5d54" stroke-width="1"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </p>
                                            </a>
                                        </li>
                                        <li class="rating_item" data-aos="fade-up">
                                            <a class="tab-action" href="#<?php echo $terms; ?>-3star">
                                                <span class="ttl dnp-s-m">3つ星</span>
                                                <picture class="icon-star">
                                                    <source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/3_star_sp.png 2x">
                                                    <source media="(min-width: 768px)" srcset="<?php bloginfo('template_directory'); ?>/assets/images/3_star_pc.png 2x">
                                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/3_star_pc.png" alt="">
                                                </picture>
                                                <p class="icon-arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                        <g id="Group_77" data-name="Group 77" transform="translate(3666 -496) rotate(90)">
                                                            <g id="Group_68" data-name="Group 68">
                                                                <g id="Ellipse_11" data-name="Ellipse 11" transform="translate(496 3642)" fill="#fff" stroke="#6b5d54" stroke-width="1">
                                                                    <circle cx="12" cy="12" r="12" stroke="none"/>
                                                                    <circle cx="12" cy="12" r="11.5" fill="none"/>
                                                                </g>
                                                                <path id="Path_953" data-name="Path 953" d="M1025.225,1702.412l-4,4,4,4" transform="translate(1531.725 5360.412) rotate(180)" fill="none" stroke="#6b5d54" stroke-width="1"/>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'hotel',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'paged' => $paged,
                                    'posts_per_page' => '9',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'area_hotel',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    ),
                                    'meta_query' => array(
                                        array(
                                            'key' => 'hotel_rating',
                                            'value' => '5つ星',
                                        )
                                    ),
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <div id="<?php echo $terms; ?>-5star" data-class="<?php echo $terms; ?>-5star" class="hotel-by-rating active">
                                        <ul class="hotel_list">
                                            <?php while ($result->have_posts()) : $result->the_post();
                                                $priceTour = get_field('hotel_price');
                                                $price = str_replace(',','',$priceTour);
                                                $priceAfterExchange = (int)$exchange_rate_vnd * (int)$price;
                                                ?>
                                                <li class="hotel_item" data-id="<?php echo get_the_ID(); ?>" data-aos="fade-up">
                                                    <div class="featured-image">
                                                        <picture class="image">
                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                            <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                        </picture>
                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                    </div>
                                                    <div class="hotel_information">
                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                        <p class="price"><?php echo number_format($priceAfterExchange,'0', '.', ','); ?>~ <span>VND</span></p>
                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                        <div class="text-info"><?php echo get_field('hotel_information'); ?></div>
                                                        <div class="hotel-contact">
                                                            <form method="POST" action="/contact/">
                                                                <input type="hidden" name="title" value="<?php the_title(); ?>">
                                                                <div class="submit-contact">
                                                                    <input class="btn-contact dnp-s-m" type="submit" name="submitTour" value="お問い合わせ"><i class="fa-light fa-angle-right"></i>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php if ($result->max_num_pages > 1):?>
                                            <div class="navigation-more" data-aos="fade-up">
                                                <a class="btn-load-navigation dnp-s-m" data-max="<?php echo $result->max_num_pages; ?>" href="#">More<i class="fa-light fa-angle-down"></i></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;
                                wp_reset_postdata(); ?>


                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'hotel',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'paged' => $paged,
                                    'posts_per_page' => '9',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'area_hotel',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    ),
                                    'meta_query' => array(
                                        array(
                                            'key' => 'hotel_rating',
                                            'value' => '4つ星',
                                        )
                                    ),
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <div id="<?php echo $terms; ?>-4star" data-class="<?php echo $terms; ?>-4star" class="hotel-by-rating">
                                        <ul class="hotel_list">
                                            <?php while ($result->have_posts()) : $result->the_post();
                                                $priceTour = get_field('hotel_price');
                                                $price = str_replace(',','',$priceTour);
                                                $priceAfterExchange = (int)$exchange_rate_vnd * (int)$price;
                                                ?>
                                                <li class="hotel_item" data-id="<?php echo get_the_ID(); ?>" data-aos="fade-up">
                                                    <div class="featured-image">
                                                        <picture class="image">
                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                            <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                        </picture>
                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                    </div>
                                                    <div class="hotel_information">
                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                        <p class="price"><?php echo number_format($priceAfterExchange,'0', '.', ','); ?>~ <span>VND</span></p>
                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                        <div class="text-info"><?php echo get_field('hotel_information'); ?></div>
                                                        <div class="hotel-contact">
                                                            <form method="POST" action="/contact/">
                                                                <input type="hidden" name="title" value="<?php the_title(); ?>">
                                                                <div class="submit-contact">
                                                                    <input class="btn-contact dnp-s-m" type="submit" name="submitTour" value="お問い合わせ"><i class="fa-light fa-angle-right"></i>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php if ($result->max_num_pages > 1):?>
                                            <div class="navigation-more" data-aos="fade-up">
                                                <a class="btn-load-navigation dnp-s-m" data-max="<?php echo $result->max_num_pages; ?>" href="#">More<i class="fa-light fa-angle-down"></i></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;
                                wp_reset_postdata(); ?>

                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'hotel',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'paged' => $paged,
                                    'posts_per_page' => '9',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'area_hotel',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    ),
                                    'meta_query' => array(
                                        array(
                                            'key' => 'hotel_rating',
                                            'value' => '3つ星',
                                        )
                                    ),
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <div id="<?php echo $terms; ?>-3star" data-class="<?php echo $terms; ?>-3star" class="hotel-by-rating">
                                        <ul class="hotel_list">
                                            <?php while ($result->have_posts()) : $result->the_post();
                                                $priceTour = get_field('hotel_price');
                                                $price = str_replace(',','',$priceTour);
                                                $priceAfterExchange = (int)$exchange_rate_vnd * (int)$price;
                                                ?>
                                                <li class="hotel_item" data-id="<?php echo get_the_ID(); ?>" data-aos="fade-up">
                                                    <div class="featured-image">
                                                        <picture class="image">
                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                            <img class="sizes" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                                        </picture>
                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                    </div>
                                                    <div class="hotel_information">
                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                        <p class="price"><?php echo number_format($priceAfterExchange,'0', '.', ','); ?>~ <span>VND</span></p>
                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                        <div class="text-info"><?php echo get_field('hotel_information'); ?></div>
                                                        <div class="hotel-contact">
                                                            <form method="POST" action="/contact/">
                                                                <input type="hidden" name="title" value="<?php the_title(); ?>">
                                                                <div class="submit-contact">
                                                                    <input class="btn-contact dnp-s-m" type="submit" name="submitTour" value="お問い合わせ"><i class="fa-light fa-angle-right"></i>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php if ($result->max_num_pages > 1):?>
                                            <div class="navigation-more" data-aos="fade-up">
                                                <a class="btn-load-navigation dnp-s-m" data-max="<?php echo $result->max_num_pages; ?>" href="#">More<i class="fa-light fa-angle-down"></i></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;
                                wp_reset_postdata(); ?>


                            </div>
                        </div>

                    <?php endforeach; ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>