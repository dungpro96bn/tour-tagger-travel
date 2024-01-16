<?php get_header();
global $post;

$tour_priceCheck = get_field('tour_price');

?>

    <div id="tour-single" class="post-template tour-single-page">

        <div class="header-top"></div>

        <div class="inner">

            <h2 class="title-1" data-aos="fade-up"><span class="dnp-s-m">国内ツアー / 国外ツアー 両方</span></h2>

            <div class="columns-page">

                <div class="columns-main">
                    <h2 class="heading-single dnp-s-m" data-aos="fade-up"><?php the_title(); ?></h2>
                    <?php
                    $images = get_field('image_slider_tour');
                    if($images) :?>
                    <div class="sliderImage-tour" data-aos="fade-up">
                        <ul class="list-imageTour">
                            <?php
                            $images = get_field('image_slider_tour');
                            $size = 'full';
                            if( $images ): ?>
                                <?php foreach( $images as $image_id ): ?>
                                    <li class="item-imageTour">
                                        <picture class="image">
                                            <?php echo wp_get_attachment_image($image_id, $size); ?>
                                        </picture>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                        <ul class="list-thumbnailTour">
                            <?php
                            $images = get_field('image_slider_tour');
                            $size = 'full';
                            if( $images ): ?>
                                <?php foreach( $images as $image_id ): ?>
                                    <li class="item-thumbnailTour">
                                        <picture class="image">
                                            <?php echo wp_get_attachment_image($image_id, $size); ?>
                                        </picture>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>

                    <?php endif; ?>

                    <div class="description-tour" data-aos="fade-up">
                        <?php echo get_field('tourist_destination_information') ?>
                    </div>

                    <div class="tabTour-info">
                        <ul class="list-tabs" data-aos="fade-up">
                            <li class="item-tab">
                                <a class="tab-action dnp-s-m active" href="#detail"><span>詳細</span></a>
                            </li>
                            <li class="item-tab">
                                <a class="tab-action dnp-s-m" href="#payment-method"><span>料金一覧・<br class="sp-br"/>お支払い方法</span></a>
                            </li>
                            <li class="item-tab">
                                <a class="tab-action dnp-s-m" href="#information-notes"><span>ご案内・<br class="sp-br"/>ご注意事項</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="tourContent-infoInner">
                        <div id="detail" class="tourContent-info active">
                            <div class="tour-inner">
                                <div class="tour-schedule">
                                    <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>ツアースケジュール</span></h3>

                                    <?php
                                    //if($tour_priceCheck):
                                    $tour_time = get_field('tour_time');
                                    if($tour_time == "半日" || $tour_time == "1日"):?>
                                    <?php else: ?>
                                        <p class="time-tourBox dnp-s-m" data-aos="fade-up"><?php echo $tour_time; ?></p>
                                    <?php endif; ?>
                                    <?php// endif; ?>

                                    <?php
                                    if (have_rows('tour_schedule')):?>
                                        <?php if($tour_time == "半日"):
                                            $num = 1;?>
                                            <?php while (have_rows('tour_schedule')) : the_row();
                                                $number = $num++; ?>
                                            <?php
                                            if($number == 1){
                                               $schedule_time_morning = get_sub_field('schedule_time');
                                               $schedule_time_afternoon = get_sub_field('schedule_time_afternoon');
                                            } ?>
                                            <?php endwhile; ?>
                                            <div class="select-schedule-start" data-aos="fade-up">
                                                <p class="title dnp-s-m">開始時間</p>
                                                <div class="select-time">
                                                    <select id="schedule-start" name="schedule-start" class="dnp-s-m">
                                                        <option value="schedule_time_morning"><?php echo $schedule_time_morning; ?></option>
                                                        <option value="schedule_time_afternoon"><?php echo $schedule_time_afternoon; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <ul class="tour-schedule-list" data-time="<?php if($tour_time == "半日"){ echo "schedule_time_morning"; }?>" data-aos="fade-up">
                                            <?php while (have_rows('tour_schedule')) : the_row(); ?>
                                                <li class="tour-schedule-item">
                                                    <p class="title-time">
                                                        <span class="c-g time-morning"><?php echo get_sub_field('schedule_time'); ?></span>
                                                        <span class="c-g time-afternoon"><?php echo get_sub_field('schedule_time_afternoon'); ?></span>頃</p>
                                                    <div class="tour-schedule-info">
                                                        <div class="inner-info">
                                                            <?php echo get_sub_field('schedule_content'); ?>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $policy_content = get_field('policy_content');
                                if ($policy_content):
                                    ?>
                                    <div class="tour-policy">
                                        <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>変更・取り消し規定</span></h3>
                                        <div class="policy_content" data-aos="fade-up">
                                            <?php echo $policy_content; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php
                                $tour_notes = get_field('tour_notes');
                                $notice = get_field('notice');
                                if ($tour_notes || $notice):
                                    ?>
                                    <div class="tour-notes">
                                        <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>ツアー備考/注意事項</span></h3>
                                        <div class="tour-notes-content" data-aos="fade-up">
                                            <?php echo $tour_notes; ?>
                                        </div>
                                        <div class="notice" data-aos="fade-up">
                                            <p class="ttl dnp-s-m">お知らせ</p>
                                            <div class="notice-content">
                                                <?php echo $notice; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="link-contact" data-aos="fade-up">
<!--                                    <a class="btn-contact dnp-s-m" href="/contact/">このツアーを予約する<i class="fa-light fa-angle-right"></i></a>-->
                                    <form method="POST" action="/contact/">
                                        <input type="hidden" name="title" value="<?php the_title(); ?>">
                                        <div class="submit-contact">
                                            <input class="btn-contact dnp-s-m" type="submit" name="submitTour" <?php if($tour_priceCheck){ echo 'value="このツアーを予約する"';} else{ echo 'value="料金はお問い合わせください"';} ?> ><i class="fa-light fa-angle-right"></i>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <div id="payment-method" class="tourContent-info">
                            <div class="tour-inner">
                                <div class="fee-tour">
                                    <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>料金</span></h3>

                                    <?php
                                    if (have_rows('fee')):?>
                                        <div class="fee-list">
                                            <?php while (have_rows('fee')) : the_row(); ?>
                                                <div class="fee-item" data-aos="fade-up">
                                                    <p class="fee-title dnp-s-m"><?php echo get_sub_field('fee_title'); ?></p>
                                                    <div class="fee-subContent">
                                                        <p><?php echo get_sub_field('fee_content'); ?></p>
                                                    </div>

                                                    <?php
                                                    if (have_rows('fee_tablet')):?>
                                                        <div class="fee-tablet">
                                                            <?php while (have_rows('fee_tablet')) : the_row(); ?>
                                                                <div class="fee-tablet-item" data-aos="fade-up">
                                                                    <div class="fee-tablet-title">
                                                                        <p class="dnp-s-m"><?php echo get_sub_field('fee_title_tablet'); ?></p>
                                                                    </div>
                                                                    <div class="fee-content-tablet">
                                                                        <?php echo get_sub_field('fee_content_tablet'); ?>
                                                                    </div>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        </div>
                                                    <?php endif; ?>

                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="link-contact" data-aos="fade-up">
<!--                                        <a class="btn-contact dnp-s-m" href="/contact/">このツアーを予約する<i class="fa-light fa-angle-right"></i></a>-->
                                        <form method="POST" action="/contact/">
                                            <input type="hidden" name="title" value="<?php the_title(); ?>">
                                            <div class="submit-contact">
                                                <input class="btn-contact dnp-s-m" type="submit" name="submitTour" <?php if($tour_priceCheck){ echo 'value="このツアーを予約する"';} else{ echo 'value="料金はお問い合わせください"';} ?> ><i class="fa-light fa-angle-right"></i>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="payment-method">
                                        <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>お支払い方法</span></h3>
                                        <ul class="payment-method-list">
                                            <li class="payment-method-item" data-aos="fade-up">
                                                <p class="ttl dnp-s-m">銀行振込（日本国内・先払い）</p>
                                                <p class="text">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                                            </li>
                                            <li class="payment-method-item" data-aos="fade-up">
                                                <p class="ttl dnp-s-m">Paypalでのお支払い</p>
                                                <p class="text">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                                                <picture class="icon-paypal">
                                                    <source srcset="/wp-content/uploads/icon_paypal.png 2x">
                                                    <img class="sizes" src="/wp-content/uploads/icon_paypal.png" alt="">
                                                </picture>
                                            </li>
                                            <li class="payment-method-item" data-aos="fade-up">
                                                <p class="ttl dnp-s-m">現地、ホーチミンまたはハノイのツアーデスクにてお支払い</p>
                                                <p class="text">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                                                <picture class="icon-paypal">
                                                    <source srcset="/wp-content/uploads/icon_paypal.png 2x">
                                                    <img class="sizes" src="/wp-content/uploads/icon_paypal.png" alt="">
                                                </picture>
                                            </li>
                                            <li class="payment-method-item" data-aos="fade-up">
                                                <p class="ttl dnp-s-m">ガイドに直接お支払い（ガイド付きツアーのみ可能）</p>
                                                <p class="text">ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link-contact" data-aos="fade-up">
<!--                                        <a class="btn-contact dnp-s-m" href="/contact/">このツアーを予約する<i class="fa-light fa-angle-right"></i></a>-->
                                        <form method="POST" action="/contact/">
                                            <input type="hidden" name="title" value="<?php the_title(); ?>">
                                            <div class="submit-contact">
                                                <input class="btn-contact dnp-s-m" type="submit" name="submitTour" <?php if($tour_priceCheck){ echo 'value="このツアーを予約する"';} else{ echo 'value="料金はお問い合わせください"';} ?> ><i class="fa-light fa-angle-right"></i>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="information-notes" class="tourContent-info">
                            <div class="tour-inner">
                                <h3 class="title-block dnp-s-m" data-aos="fade-up"><span>ご案内・ご注意事項</span></h3>
                                <?php
                                if (have_rows('information_notes')):?>
                                    <div class="information-notesList">
                                        <?php while (have_rows('information_notes')) : the_row(); ?>
                                            <div class="information-notesItem" data-aos="fade-up">
                                                <p class="ttl dnp-s-m"><?php echo get_sub_field('title_information_notes'); ?></p>
                                                <div class="text">
                                                    <?php echo get_sub_field('content_information_notes'); ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <?php get_template_part('sidebar'); ?>

            </div>
        </div>

        <div class="header-bottom"></div>

    </div><!-- #new -->

<?php get_footer(); ?>