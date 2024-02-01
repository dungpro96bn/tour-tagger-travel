<?php get_header();
global $post;
?>

    <div id="ourStory" class="post-content single-page">

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

        <div class="inner">

            <div class="news-inner">
                <div class="post-main">
                    <div class="post-inner">
                        <div class="header-entryNews" data-aos="fade-up">
                            <p class="date-time dnp-s-m"><?php echo get_the_date(); ?></p>
                            <h2 class="heading-blockNews dnp-s-m"><?php the_title(); ?></h2>
                        </div>
                        <div class="info-content" data-aos="fade-up">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="link-page" data-aos="fade-up">
                        <a href="<?php echo home_url(); ?>/our-story/" class="btn-link dnp-s-m">一覧へ戻る</a>
                    </div>
                </div>

            </div>

        </div>

    </div><!-- #new -->

<?php get_footer(); ?>