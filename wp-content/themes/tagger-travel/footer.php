    </main>

    <div id="page-top" class="page-top">
        <a href="#" class="page-top-anchor en">
            <i class="fa-light fa-chevron-up"></i>
            <span class="c-g">PAGE</span>
            <span class="c-g">TOP</span>
        </a>
    </div>

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="inner footer-inner-top">
                <div class="footer-menu">
                    <?php wp_nav_menu(
                        array(
                            'menu_class'      => 'navMenu',
                            'menu_id'         => 'navList-menu',
                            'container'       => 'div',
                            'container_id'    => 'nav-container'
                        )
                    ); ?>
                </div>
                <div class="footer-logo">
                    <a href="<?php echo home_url(); ?>">
                        <picture>
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/logo_header.svg">
                            <img class="sizes" width="325" src="<?php bloginfo('template_directory'); ?>/assets/images/logo_header.svg" alt="<?php bloginfo('name'); ?>">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="inner footer-inner-bottom">
                <div class="privacy-link">
                    <a target="_blank" href="/privacy-policy/">プライバシーポリシー</a>
                    <a target="_blank" href="#">旅行約款</a>
                    <a target="_blank" href="#">特定特定商取引法に基づく表記</a>
                </div>
                <div class="copyright">
                    <p>© TAGGER TRAVEL Co., Ltd.</p>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->

  </div><!-- .outer -->

<?php wp_footer(); ?>

</body>
</html>