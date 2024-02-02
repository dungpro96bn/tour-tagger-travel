<?php get_header(); ?>

    <div id="overseas-template" class="overseas-page">
        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">ベトナム国外ツアー</span>
                    <span class="ttl-en c-g">Overseas Tour</span>
                </h2>
            </div>
        </div>
        <div class="overseas-tabContent">
            <div class="inner">
                <ul class="nationList">
                    <?php
                    $args = array(
                        'taxonomy' => 'nation',
                        'hide_empty' => false,
                        'orderby' => 'term_id',
                        'order' => 'DESC',
                        'parent' => 0
                    );
                    $areas = get_categories($args); ?>
                    <?php foreach ($areas as $area) : ?>
                    <li class="nationItem" data-aos="fade-up">
                        <a class="scroll" data-id="<?php echo $area->term_id; ?>" href="#<?php echo $area->slug; ?>">
                            <p class="ttl-ja dnp-s-m"><?php echo $area->name; ?></p>
                            <p class="ttl-en gp-p"><?php echo $area->slug; ?></p>
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
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="overseasContent">
            <div class="overseasByArea-list">
                <?php
                $args = array(
                    'taxonomy' => 'nation',
                    'hide_empty' => true,
                    'orderby'    => 'ID',
                    'order'      => 'DESC',
                    'parent' => 0
                );
                $areas = get_categories($args); ?>
                    <?php foreach($areas as $area) :?>
                        <?php
                        $terms = $area->slug;
                        ?>

                        <div id="<?php echo $terms; ?>" class="overseas-colItem tourOverseas <?php echo $terms; ?>-tour-overseas" data-tour="<?php echo $terms; ?>-tour-overseas" data-aos="fade-up">
                            <div class="inner">
                                <h2 class="heading-block" data-aos="fade-up">
                                    <picture class="icon-heading">
                                        <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png 2x">
                                        <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/icon_heading_block.png" alt="">
                                    </picture>
                                    <span class="ttl-ja dnp-s-m"><?php echo $area->name; ?></span>
                                    <span class="ttl-en c-g"><?php echo $area->slug; ?></span>
                                </h2>

                                <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'overseas',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'paged' => $paged,
                                    'posts_per_page' => '3',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'nation',
                                            'field' => 'slug',
                                            'terms' => $terms
                                        )
                                    )
                                );
                                $result = new WP_Query($args);
                                if ($result->have_posts()) : ?>
                                    <ul class="overseas_list">
                                        <?php while ($result->have_posts()) : $result->the_post(); ?>
                                            <li class="overseas_item" data-id="<?php echo get_the_ID(); ?>" data-aos="fade-up">
                                                <a href="<?php echo $area->slug."/".$post->post_name; ?>" class="box-shadow">
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
                                                    <div class="hotel_information">
                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php if ($result->max_num_pages > 1):?>
                                        <div class="navigation-more" data-aos="fade-up">
                                            <a class="btn-load-navigation dnp-s-m" data-after-load="1" data-check="<?php echo $terms; ?>-tour-overseas" data-max="<?php echo $result->max_num_pages; ?>" href="#">More<i class="fa-light fa-angle-down"></i></a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif;
                                wp_reset_postdata(); ?>

                            </div>
                        </div>

                    <?php endforeach; ?>
            </div>

        </div>
    </div>

<?php get_footer(); ?>