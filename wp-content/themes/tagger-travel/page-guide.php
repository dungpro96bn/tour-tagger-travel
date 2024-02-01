<?php get_header();
global $post, $page;
$post_slug = $post->post_name;

$front_page_id = get_option('page_on_front');
$price_vnd = get_field('exchange_rate_vnd', $front_page_id);
$exchange_rate_vnd = str_replace(',', '', $price_vnd);

?>

    <div id="guide-page" class="<?php echo $post_slug; ?>-pageContent">

        <div class="header-pageEntry">
            <div class="headingMain-entry">
                <h2 class="heading-entry">
                    <picture class="icon-heading">
                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">
                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">
                    </picture>
                    <span class="ttl-ja dnp-s-m">ベトナム各地の基本情報</span>
                    <span class="ttl-en c-g">Basic Information</span>
                </h2>
            </div>
        </div>

        <div class="inner">
            <div class="tabs-guide">
                <ul class="guide_list" data-aos="fade-up">
                    <li class="guide_item">
                        <a class="tab-action active dnp-s-m" href="#guide-01">ベトナムの<br class="sp-br"/>基本情報</a>
                    </li>
                    <li class="guide_item">
                        <a class="tab-action dnp-s-m" href="#guide-02">北部エリア</a>
                    </li>
                    <li class="guide_item">
                        <a class="tab-action dnp-s-m" href="#guide-03">南部エリア</a>
                    </li>
                    <li class="guide_item">
                        <a class="tab-action dnp-s-m" href="#guide-04">中部エリア</a>
                    </li>
                    <li class="guide_item">
                        <a class="tab-action dnp-s-m" href="#guide-05">南部リゾート<br class="sp-br"/>エリア</a>
                    </li>
                </ul>
            </div>

            <div class="guideContent">

                <div id="guide-01" class="guide-infoContent active">
                    <div class="tab-guide-information">
                        <ul class="tabList-guide-info" data-aos="fade-up">
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-01">基本情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-02">お金</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-03">生活情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-04">習慣・マナー</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-05">旅行上の<br class="sp-br"/>注意点</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-01-info-06">旅情報FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="InformationContent">
                        <div id="guide-01-info-01" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>基本情報</span></h2>
                            <?php if (have_rows('basic_information')):?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('basic_information')) : the_row(); ?>
                                        <li class="itemDetails-info" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_basic_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_basic_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-01-info-02" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>お金</span></h2>
                            <?php if (have_rows('money')):?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('money')) : the_row(); ?>
                                        <li class="itemDetails-info" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_money'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_money'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-01-info-03" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>生活情報</span></h2>
                            <?php if (have_rows('life_information')):?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('life_information')) : the_row(); ?>
                                        <li class="itemDetails-info" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_life_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_life_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-01-info-04" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>習慣・マナー</span></h2>
                            <?php if (have_rows('customs_manners')):?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('customs_manners')) : the_row(); ?>
                                        <li class="itemDetails-info" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_customs_manners'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_customs_manners'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-01-info-05" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>旅行上の注意点</span></h2>
                            <?php if (have_rows('travel_precautions')):?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('travel_precautions')) : the_row(); ?>
                                        <li class="itemDetails-info" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_travel_precautions'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('desciption_travel_precautions'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-01-info-06" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>旅情報FAQ</span></h2>
                            <?php if (have_rows('travel_information_FAQ')):?>
                                <ul class="listDetails-qa">
                                    <?php while (have_rows('travel_information_FAQ')) : the_row(); ?>
                                        <li class="itemDetails-qa" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl">Q .</p>
                                            </div>
                                            <div class="info question">
                                                <p><?php echo get_sub_field('question_travel_information_FAQ'); ?></p>
                                            </div>
                                        </li>
                                        <li class="itemDetails-qa" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl">A.</p>
                                            </div>
                                            <div class="info answer">
                                                <?php echo get_sub_field('answer_travel_information_FAQ'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div id="guide-02" class="guide-infoContent">
                    <div class="tab-guide-information">
                        <ul class="tabList-guide-info tabList-flex" data-aos="fade-up">
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-01">基本情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-02">気候・ベスト<br class="sp-br"/>旅行シーズン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-03">注意事項</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-04">ローカル名物料理</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-05">おすすめの<br class="sp-br"/>レストラン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-02-info-06">おすすめの<br class="sp-br"/>観光地</a>
                            </li>
                        </ul>
                    </div>
                    <div class="InformationContent">
                        <div id="guide-02-info-01" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>基本情報</span></h2>
                            <?php if (have_rows('basic_information_northern')):?>
                                <ul class="listDetails-info">
                                    <?php $num = 1; ?>
                                    <?php while (have_rows('basic_information_northern')) : the_row(); ?>
                                    <?php $number = $num++; ?>
                                        <li class="itemDetails-info" id="<?php if($number == 2){ echo "guide-02-info-02"; } elseif ($number == 3){ echo "guide-02-info-03"; } ?>" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_basic_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_basic_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-02-info-04" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>ローカル名物料理</span></h2>
                            <?php if (have_rows('local_specialties_northern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('local_specialties_northern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_local_specialties_northern');
                                                if( !empty( $image ) ): ?>
                                                <picture class="image">
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m sp-br"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_local_specialties_northern'); ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-02-info-05" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめレストラン</span></h2>
                            <?php if (have_rows('recommended_restaurants_northern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('recommended_restaurants_northern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_recommended_restaurants_northern');
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m sp-br"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_recommended_restaurants_northern'); ?>
                                                </div>
                                                <div class="tag">
                                                    <?php $locations = get_sub_field('location_recommended_restaurants_northern');
                                                    if ($locations): ?>
                                                        <?php foreach ($locations as $location):
                                                            $tag_id = get_term_by('id', $location, 'restaurant_location'); ?>
                                                            <span><?php echo $tag_id->name; ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>

                                                    <?php $free_reservation = get_sub_field('free_reservation_recommended_restaurants_northern');
                                                    if($free_reservation && in_array('Yes', $free_reservation)): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="/request-advice/">無料予約 <i class="fa-solid fa-angle-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="link-action">
                                                    <?php $view_map = get_sub_field('view_map_recommended_restaurants_northern');
                                                    if($view_map): ?>
                                                    <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $view_map; ?>">地図を見る</a>
                                                    <?php endif; ?>

                                                    <?php $official_site = get_sub_field('official_site_recommended_restaurants_northern');
                                                    if($official_site): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $official_site; ?>">オフィシャルサイト</a>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-02-info-06" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめ観光地</span></h2>
                            <?php if (have_rows('sightseeing_spots_northern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('sightseeing_spots_northern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_sightseeing_spots');
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_sightseeing_spots'); ?>
                                                </div>
                                            </div>
                                        <?php if (have_rows('related_tours_northern')): ?>
                                            <div class="related_tours">
                                                <h3 class="title-item dnp-s-m"><span>関連オプショナルツアー</span></h3>
                                                <ul class="listDetails-banner">
                                                    <?php while (have_rows('related_tours_northern')) : the_row(); ?>

                                                        <?php $post_object = get_sub_field('post_related_tours_northern'); ?>
                                                        <?php if ($post_object): ?>
                                                            <?php
                                                            $post = $post_object;
                                                            setup_postdata($post);

                                                            $priceTour = get_field('tour_price');
                                                            $price = str_replace(',','',$priceTour);
                                                            $priceAfterExchange = (float)$exchange_rate_vnd * (float)$price;

                                                            ?>
                                                            <li class="tourItem-area">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="featured-image">
                                                                        <picture class="image">
                                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                            <img class="sizes"
                                                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                                                 alt="">
                                                                        </picture>
                                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                                    </div>
                                                                    <div class="infoTour">
                                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                                        <p class="price"><?php echo number_format($priceAfterExchange, '0', '.', ','); ?>~ <span>VND</span></p>
                                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php wp_reset_postdata(); ?>
                                                        <?php endif; ?>

                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div id="guide-03" class="guide-infoContent">
                    <div class="tab-guide-information">
                        <ul class="tabList-guide-info tabList-flex" data-aos="fade-up">
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-01">基本情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-02">気候・ベスト<br class="sp-br"/>旅行シーズン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-03">注意事項</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-04">ローカル名物料理</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-05">おすすめの<br class="sp-br"/>レストラン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-03-info-06">おすすめの<br class="sp-br"/>観光地</a>
                            </li>
                        </ul>
                    </div>
                    <div class="InformationContent">
                        <div id="guide-03-info-01" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>基本情報</span></h2>
                            <?php if (have_rows('basic_information_southern')):?>
                                <ul class="listDetails-info">
                                    <?php $num = 1; ?>
                                    <?php while (have_rows('basic_information_southern')) : the_row(); ?>
                                    <?php $number = $num++; ?>
                                        <li class="itemDetails-info" id="<?php if($number == 2){ echo "guide-03-info-02"; } elseif ($number == 3){ echo "guide-03-info-03"; } ?>" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_basic_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_basic_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-03-info-04" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>ローカル名物料理</span></h2>
                            <?php if (have_rows('local_specialties_southern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('local_specialties_southern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_local_specialties_northern');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <?php  echo wp_get_attachment_image($image, $size); ?>
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_local_specialties_northern'); ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-03-info-05" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめレストラン</span></h2>
                            <?php if (have_rows('recommended_restaurants_southern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('recommended_restaurants_southern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_recommended_restaurants_northern');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <?php  echo wp_get_attachment_image($image, $size); ?>
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_recommended_restaurants_northern'); ?>
                                                </div>
                                                <div class="tag">
                                                    <?php $locations = get_sub_field('location_recommended_restaurants_northern');
                                                    if ($locations): ?>
                                                        <?php foreach ($locations as $location):
                                                            $tag_id = get_term_by('id', $location, 'restaurant_location'); ?>
                                                            <span><?php echo $tag_id->name; ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>

                                                    <?php $free_reservation = get_sub_field('free_reservation_recommended_restaurants_northern');
                                                    if($free_reservation && in_array('Yes', $free_reservation)): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="/request-advice/">無料予約 <i class="fa-solid fa-angle-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="link-action">
                                                    <?php $view_map = get_sub_field('view_map_recommended_restaurants_northern');
                                                    if($view_map): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $view_map; ?>">地図を見る</a>
                                                    <?php endif; ?>

                                                    <?php $official_site = get_sub_field('official_site_recommended_restaurants_northern');
                                                    if($official_site): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $official_site; ?>">オフィシャルサイト</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-03-info-06" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめ観光地</span></h2>
                            <?php if (have_rows('sightseeing_spots_southern')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('sightseeing_spots_southern')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                        <div class="banner-item">
                                            <?php
                                            $image = get_sub_field('banner_sightseeing_spots');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if( !empty( $image ) ): ?>
                                                <picture class="image">
                                                    <?php  echo wp_get_attachment_image($image, $size); ?>
                                                </picture>
                                            <?php endif; ?>
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                        </div>
                                        <div class="infoItem">
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                            <div class="info">
                                                <?php echo get_sub_field('description_sightseeing_spots'); ?>
                                            </div>
                                        </div>
                                        <?php if (have_rows('related_tours_northern')): ?>
                                            <div class="related_tours">
                                                <h3 class="title-item dnp-s-m"><span>関連オプショナルツアー</span></h3>
                                                <ul class="listDetails-banner">
                                                    <?php while (have_rows('related_tours_northern')) : the_row(); ?>

                                                        <?php $post_object = get_sub_field('post_related_tours_northern'); ?>
                                                        <?php if ($post_object): ?>
                                                            <?php
                                                            $post = $post_object;
                                                            setup_postdata($post);

                                                            $priceTour = get_field('tour_price');
                                                            $price = str_replace(',','',$priceTour);
                                                            $priceAfterExchange = (float)$exchange_rate_vnd * (float)$price;
                                                            ?>
                                                            <li class="tourItem-area">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="featured-image">
                                                                        <picture class="image">
                                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                            <img class="sizes"
                                                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                                                 alt="">
                                                                        </picture>
                                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                                    </div>
                                                                    <div class="infoTour">
                                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                                        <p class="price"><?php echo number_format($priceAfterExchange, '0', '.', ','); ?>~ <span>VND</span></p>
                                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php wp_reset_postdata(); ?>
                                                        <?php endif; ?>

                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div id="guide-04" class="guide-infoContent">
                    <div class="tab-guide-information">
                        <ul class="tabList-guide-info tabList-flex" data-aos="fade-up">
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-01">基本情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-02">気候・ベスト<br class="sp-br"/>旅行シーズン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-03">注意事項</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-04">ローカル名物料理</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-05">おすすめの<br class="sp-br"/>レストラン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-04-info-06">おすすめの<br class="sp-br"/>観光地</a>
                            </li>
                        </ul>
                    </div>
                    <div class="InformationContent">
                        <div id="guide-04-info-01" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>基本情報</span></h2>
                            <?php if (have_rows('basic_information_central')):?>
                                <ul class="listDetails-info">
                                    <?php $num = 1; ?>
                                    <?php while (have_rows('basic_information_central')) : the_row(); ?>
                                        <?php $number = $num++; ?>
                                        <li class="itemDetails-info" id="<?php if($number == 2){ echo "guide-04-info-02"; } elseif ($number == 3){ echo "guide-04-info-03"; } ?>" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_basic_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_basic_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-04-info-04" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>ローカル名物料理</span></h2>
                            <?php if (have_rows('local_specialties_central')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('local_specialties_central')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_local_specialties_northern');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <?php  echo wp_get_attachment_image($image, $size); ?>
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_local_specialties_northern'); ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-04-info-05" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめレストラン</span></h2>
                            <?php if (have_rows('recommended_restaurants_central')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('recommended_restaurants_central')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_recommended_restaurants_northern');
                                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <?php  echo wp_get_attachment_image($image, $size); ?>
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_recommended_restaurants_northern'); ?>
                                                </div>
                                                <div class="tag">
                                                    <?php $locations = get_sub_field('location_recommended_restaurants_northern');
                                                    if ($locations): ?>
                                                        <?php foreach ($locations as $location):
                                                            $tag_id = get_term_by('id', $location, 'restaurant_location'); ?>
                                                            <span><?php echo $tag_id->name; ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>

                                                    <?php $free_reservation = get_sub_field('free_reservation_recommended_restaurants_northern');
                                                    if($free_reservation && in_array('Yes', $free_reservation)): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="/request-advice/">無料予約 <i class="fa-solid fa-angle-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="link-action">
                                                    <?php $view_map = get_sub_field('view_map_recommended_restaurants_northern');
                                                    if($view_map): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $view_map; ?>">地図を見る</a>
                                                    <?php endif; ?>

                                                    <?php $official_site = get_sub_field('official_site_recommended_restaurants_northern');
                                                    if($official_site): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $official_site; ?>">オフィシャルサイト</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-04-info-06" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめ観光地</span></h2>
                            <?php if (have_rows('sightseeing_spots_central')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('sightseeing_spots_central')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                        <div class="banner-item">
                                            <?php
                                            $image = get_sub_field('banner_sightseeing_spots');
                                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                            if( !empty( $image ) ): ?>
                                                <picture class="image">
                                                    <?php  echo wp_get_attachment_image($image, $size); ?>
                                                </picture>
                                            <?php endif; ?>
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                        </div>
                                        <div class="infoItem">
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                            <div class="info">
                                                <?php echo get_sub_field('description_sightseeing_spots'); ?>
                                            </div>
                                        </div>
                                        <?php if (have_rows('related_tours_northern')): ?>
                                            <div class="related_tours">
                                                <h3 class="title-item dnp-s-m"><span>関連オプショナルツアー</span></h3>
                                                <ul class="listDetails-banner">
                                                    <?php while (have_rows('related_tours_northern')) : the_row(); ?>

                                                        <?php $post_object = get_sub_field('post_related_tours_northern'); ?>
                                                        <?php if ($post_object): ?>
                                                            <?php
                                                            $post = $post_object;
                                                            setup_postdata($post);

                                                            $priceTour = get_field('tour_price');
                                                            $price = str_replace(',','',$priceTour);
                                                            $priceAfterExchange = (float)$exchange_rate_vnd * (float)$price;
                                                            ?>
                                                            <li class="tourItem-area">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="featured-image">
                                                                        <picture class="image">
                                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                            <img class="sizes"
                                                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                                                 alt="">
                                                                        </picture>
                                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                                    </div>
                                                                    <div class="infoTour">
                                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                                        <p class="price"><?php echo number_format($priceAfterExchange, '0', '.', ','); ?>~ <span>VND</span></p>
                                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php wp_reset_postdata(); ?>
                                                        <?php endif; ?>

                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

                <div id="guide-05" class="guide-infoContent">
                    <div class="tab-guide-information">
                        <ul class="tabList-guide-info tabList-flex" data-aos="fade-up">
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-01">基本情報</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-02">気候・ベスト<br class="sp-br"/>旅行シーズン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-03">注意事項</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-04">ローカル名物料理</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-05">おすすめの<br class="sp-br"/>レストラン</a>
                            </li>
                            <li class="tabItem-guide-info">
                                <a class="scroll dnp-s-m" href="#guide-05-info-06">おすすめの<br class="sp-br"/>観光地</a>
                            </li>
                        </ul>
                    </div>
                    <div class="InformationContent">
                        <div id="guide-05-info-01" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>基本情報</span></h2>
                            <?php if (have_rows('basic_information_southern_resort')):?>
                            <?php $num = 1; ?>
                                <ul class="listDetails-info">
                                    <?php while (have_rows('basic_information_southern_resort')) : the_row(); ?>
                                    <?php $number = $num++; ?>
                                        <li class="itemDetails-info" id="<?php if($number == 2){ echo "guide-05-info-02"; } elseif ($number == 3){ echo "guide-05-info-03"; } ?>" data-aos="fade-up">
                                            <div class="title">
                                                <p class="ttl"><?php echo get_sub_field('title_basic_information'); ?></p>
                                            </div>
                                            <div class="info">
                                                <?php echo get_sub_field('description_basic_information'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-05-info-04" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>ローカル名物料理</span></h2>
                            <?php if (have_rows('local_specialties_southern_resort')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('local_specialties_southern_resort')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_local_specialties_northern');
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_local_specialties_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_local_specialties_northern'); ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-05-info-05" class="guideDetails-item">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめレストラン</span></h2>
                            <?php if (have_rows('recommended_restaurants_southern_resort')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('recommended_restaurants_southern_resort')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                            <div class="banner-item">
                                                <?php
                                                $image = get_sub_field('banner_recommended_restaurants_northern');
                                                if( !empty( $image ) ): ?>
                                                    <picture class="image">
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </picture>
                                                <?php endif; ?>
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                            </div>
                                            <div class="infoItem">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_recommended_restaurants_northern'); ?></p>
                                                <div class="info">
                                                    <?php echo get_sub_field('description_recommended_restaurants_northern'); ?>
                                                </div>
                                                <div class="tag">
                                                    <?php $locations = get_sub_field('location_recommended_restaurants_northern');
                                                    if ($locations): ?>
                                                        <?php foreach ($locations as $location):
                                                            $tag_id = get_term_by('id', $location, 'restaurant_location'); ?>
                                                            <span><?php echo $tag_id->name; ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>

                                                    <?php $free_reservation = get_sub_field('free_reservation_recommended_restaurants_northern');
                                                    if($free_reservation && in_array('Yes', $free_reservation)): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="/request-advice/">無料予約 <i class="fa-solid fa-angle-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="link-action">
                                                    <?php $view_map = get_sub_field('view_map_recommended_restaurants_northern');
                                                    if($view_map): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $view_map; ?>">地図を見る</a>
                                                    <?php endif; ?>

                                                    <?php $official_site = get_sub_field('official_site_recommended_restaurants_northern');
                                                    if($official_site): ?>
                                                        <a target="_blank" class="btn-link dnp-s-m" href="<?php echo $official_site; ?>">オフィシャルサイト</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                        <div id="guide-05-info-06" class="guideDetails-item item-align">
                            <h2 class="heading-item dnp-s-m" data-aos="fade-up"><span>おすすめ観光地</span></h2>
                            <?php if (have_rows('sightseeing_spots_southern_resort')):?>
                                <ul class="listDetails-banner">
                                    <?php while (have_rows('sightseeing_spots_southern_resort')) : the_row(); ?>
                                        <li class="itemDetails-banner" data-aos="fade-up">
                                        <div class="banner-item">
                                            <?php
                                            $image = get_sub_field('banner_sightseeing_spots');
                                            if( !empty( $image ) ): ?>
                                                <picture class="image">
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                </picture>
                                            <?php endif; ?>
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                        </div>
                                        <div class="infoItem">
                                            <p class="ttl dnp-s-m"><?php echo get_sub_field('title_sightseeing_spots'); ?></p>
                                            <div class="info">
                                                <?php echo get_sub_field('description_sightseeing_spots'); ?>
                                            </div>
                                        </div>
                                        <?php if (have_rows('related_tours_northern')): ?>
                                            <div class="related_tours">
                                                <h3 class="title-item dnp-s-m"><span>関連オプショナルツアー</span></h3>
                                                <ul class="listDetails-banner">
                                                    <?php while (have_rows('related_tours_northern')) : the_row(); ?>

                                                        <?php $post_object = get_sub_field('post_related_tours_northern'); ?>
                                                        <?php if ($post_object): ?>
                                                            <?php
                                                            $post = $post_object;
                                                            setup_postdata($post);

                                                            $priceTour = get_field('tour_price');
                                                            $price = str_replace(',','',$priceTour);
                                                            $priceAfterExchange = (float)$exchange_rate_vnd * (float)$price;
                                                            ?>
                                                            <li class="tourItem-area">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="featured-image">
                                                                        <picture class="image">
                                                                            <source srcset="<?php echo get_the_post_thumbnail_url(); ?>">
                                                                            <img class="sizes"
                                                                                 src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                                                 alt="">
                                                                        </picture>
                                                                        <span class="time-tour dnp-s-m"><?php echo get_field('tour_time'); ?></span>
                                                                    </div>
                                                                    <div class="infoTour">
                                                                        <h4 class="title dnp-s-m"><?php the_title(); ?></h4>
                                                                        <p class="price"><?php echo number_format($priceAfterExchange, '0', '.', ','); ?>~ <span>VND</span></p>
                                                                        <p class="priceTour">(USD<?php echo $priceTour; ?>)</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <?php wp_reset_postdata(); ?>
                                                        <?php endif; ?>

                                                    <?php endwhile; ?>
                                                </ul>
                                            </div>
                                            </li>
                                        <?php endif; ?>

                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>

<?php get_footer(); ?>