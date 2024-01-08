<?php get_header(); ?>

    <div id="new" class="new-container">
        <div class="inner">
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
        </div>

    </div><!-- #new -->

<?php get_footer(); ?>