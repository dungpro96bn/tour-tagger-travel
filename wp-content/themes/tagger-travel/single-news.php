<?php get_header();
global $post;
?>

    <div id="news" class="post-content single-page">

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

        <div class="inner">

            <div class="news-inner">
                <div class="post-main">
                    <div class="post-inner">
                        <div class="date-tag" data-aos="fade-up">
                            <p class="date-time en"><?php echo get_the_date(); ?></p>
                        </div>
                        <h2 class="heading-block" data-aos="fade-up"><?php the_title(); ?></h2>
                        <div class="info-content" data-aos="fade-up">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <div class="link-page" data-aos="fade-up">
                    <a href="<?php echo home_url(); ?>/news/" class="btn-link en">一覧へ戻る</a>
                </div>
            </div>

        </div>

    </div><!-- #new -->

<?php get_footer(); ?>