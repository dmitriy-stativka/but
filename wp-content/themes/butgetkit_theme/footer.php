</div><!-- #content -->

<footer class="footer">
  <div class="footer-row">
        <div class="container footer-row-content">
            <?php
                wp_nav_menu([
                    'theme_location' => '',
                    'menu' => 'footer-menu',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'footer-menu',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => '',
                ]);
            ?>
            <ul class="social-list">
                <?php
                    while (have_rows('social_list', 'options')) : the_row(); ?>
                        <li class="social-list-item">
                            <a href="<?php the_sub_field('link_of_social', 'options')?>">
                                <img src="<?php the_sub_field('image_of_social', 'options')['url'];?>" alt="<?php the_sub_field('image_of_social', 'options')['alt'];?>">
                            </a>
                        </li>
                    <?php endwhile;
                ?>
            </ul>
        </div>

        <div class="footer-row-copyright">
            <div class="container">
                <span>© Copyright 2021 BudgetKit.com – Budgeting & Money Saving Tips</span>
            </div>
        </div>
  </div> 
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
</html>