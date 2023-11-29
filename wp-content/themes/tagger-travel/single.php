<?php get_header(); ?>

    <div id="new" class="new-container">
        <p class="new-heading">
            <span class="letter-top">NEW</span>
            <span class="letter-bottom">お知らせ</span>
        </p>
        <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="new-post">
                <div class="single-body">
                    <?php the_content(); ?>
                </div>
            </article><!-- .new-post -->
        <?php endwhile; ?>
        <?php else : ?>
            <p class="not-post">このカテゴリーにはまだ記事がありません。</p>
        <?php endif; ?>
    </div><!-- #new -->

<?php get_footer(); ?>