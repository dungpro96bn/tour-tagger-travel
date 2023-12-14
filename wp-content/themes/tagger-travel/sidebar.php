
<div class="columns-sidebar">
    <div class="columns-sidebar-inner">
        <div class="sidebar-content">
            <div class="book-tour filter-item" data-aos="fade-up">
                <div class="title">
                    <svg id="Group_322" data-name="Group 322" xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24">
                        <path id="Path_1945" data-name="Path 1945" d="M1,8.5H22V23H1ZM20,5V3h2V7.5H1V3H3V5H6V3H17V5ZM4,3V1H5V4H4ZM18,3V1h1V4H18ZM17,0V2H6V0H3V2H0V24H23V2H20V0Z" fill="#a08953"/>
                        <rect id="Rectangle_593" data-name="Rectangle 593" width="2" height="2" transform="translate(10.5 12.5)" fill="#a08953"/>
                        <rect id="Rectangle_594" data-name="Rectangle 594" width="2" height="2" transform="translate(16.5 12.5)" fill="#a08953"/>
                        <rect id="Rectangle_595" data-name="Rectangle 595" width="2" height="2" transform="translate(4.5 12.5)" fill="#a08953"/>
                        <rect id="Rectangle_596" data-name="Rectangle 596" width="2" height="2" transform="translate(10.5 17.5)" fill="#a08953"/>
                        <rect id="Rectangle_597" data-name="Rectangle 597" width="2" height="2" transform="translate(16.5 17.5)" fill="#a08953"/>
                        <rect id="Rectangle_598" data-name="Rectangle 598" width="2" height="2" transform="translate(4.5 17.5)" fill="#a08953"/>
                    </svg>
                    <p class="dnp-s-m">このツアーを予約する</p>
                </div>
                <div class="link-contact">
                    <form method="POST" action="/contact/">
                        <input type="hidden" name="title" value="<?php the_title(); ?>">
                        <div class="submit-contact">
                            <input class="btn-contact dnp-s-m" type="submit" name="submitTour" value="予約する"><i class="fa-light fa-angle-right"></i>
                        </div>
                    </form>
                </div>
            </div>

            <div class="search-by-area filter-item" data-aos="fade-up">
                <div class="title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.235" height="20.472" viewBox="0 0 20.235 20.472">
                        <path id="Path_1944" data-name="Path 1944" d="M20.235,19.765l-5.5-5.5a8.442,8.442,0,1,0-.718.7l5.515,5.515ZM1,8.5A7.5,7.5,0,1,1,8.5,16,7.508,7.508,0,0,1,1,8.5" fill="#a08953"/>
                    </svg>
                    <p class="dnp-s-m">エリアから探す</p>
                </div>
                <?php if ( get_post_type() == 'tour' ):?>
                    <ul class="areaList-search">
                        <li class="areaItem-search">
                            <a class="" href="/tour/#northern">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image01_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image01_pc.png" alt="">
                                </picture>
                                <div class="title-item">
                                    <p class="area-ja dnp-s-m">北部エリア</p>
                                    <p class="area-en gp-p">Northern</p>
                                </div>
                                <i class="fa-light fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="areaItem-search">
                            <a class="" href="/tour/#central">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image02_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image02_pc.png" alt="">
                                </picture>
                                <div class="title-item">
                                    <p class="area-ja dnp-s-m">中部エリア</p>
                                    <p class="area-en gp-p">Central</p>
                                </div>
                                <i class="fa-light fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="areaItem-search">
                            <a class="" href="/tour/#southern">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image03_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image03_pc.png" alt="">
                                </picture>
                                <div class="title-item">
                                    <p class="area-ja dnp-s-m">南部エリア</p>
                                    <p class="area-en gp-p">Southern</p>
                                </div>
                                <i class="fa-light fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="areaItem-search">
                            <a class="" href="/tour/#southern-resort">
                                <picture class="image">
                                    <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image04_pc.png">
                                    <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/area_search_image04_pc.png" alt="">
                                </picture>
                                <div class="title-item">
                                    <p class="area-ja dnp-s-m">南部リゾートエリア</p>
                                    <p class="area-en gp-p">Southern Resort</p>
                                </div>
                                <i class="fa-light fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                <?php elseif (get_post_type() == 'overseas'): ?>
                    <ul class="areaList-search">
                        <?php
                        $args = array(
                            'taxonomy' => 'nation',
                            'hide_empty' => true,
                            'orderby' => 'term_id',
                            'order' => 'DESC',
                            'parent' => 0
                        );
                        $areas = get_categories($args); ?>
                        <?php foreach ($areas as $area) : ?>
                            <li class="areaItem-search" <?php if($area->count == 0){ echo 'style: pointer-events: none;';} ?>>
                                <a class="" data-id="<?php echo $area->term_id; ?>" href="/overseas/#<?php echo $area->slug; ?>">
                                    <picture class="image">
                                        <source srcset="<?php echo $area->category_description; ?>">
                                        <img class="sizes" src="<?php echo $area->category_description; ?>" alt="">
                                    </picture>
                                    <div class="title-item">
                                        <p class="area-ja dnp-s-m"><?php echo $area->name; ?></p>
                                        <p class="area-en gp-p"><?php echo $area->slug; ?></p>
                                    </div>
                                    <i class="fa-light fa-angle-right"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>