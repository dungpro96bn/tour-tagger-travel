<?php get_header();
global $post, $page;
$post_slug = $post->post_name;
?>

    <div id="<?php echo $post_slug; ?>-pageContent">

<!--        <div class="header-pageEntry">-->
<!--            <div class="headingMain-entry">-->
<!--                <h2 class="heading-entry">-->
<!--                    <picture class="icon-heading">-->
<!--                        <source srcset="/wp-content/uploads/icon_header_entry.png 2x">-->
<!--                        <img class="sizes" src="/wp-content/uploads/icon_header_entry.png" alt="">-->
<!--                    </picture>-->
<!--                    <span class="ttl-ja dnp-s-m">--><?php //the_title(); ?><!--</span>-->
<!--                    <span class="ttl-en c-g">--><?php //echo str_replace("-", " ", $post_slug); ?><!--</span>-->
<!--                </h2>-->
<!--            </div>-->
<!--        </div>-->

        <div class="inner">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                remove_filter( 'the_content', 'wpautop' );
                the_content();
            endwhile;
            else :
                echo '<p class="no-post">お探しの記事、ページは見つかりませんでした。</p>';
            endif;
            ?>
        </div>


    </div>

<?php get_footer(); ?>