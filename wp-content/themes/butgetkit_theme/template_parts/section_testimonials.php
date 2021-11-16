<section class="testimonials">
    <img class="testimonials-bg" src="/wp-content/themes/butgetkit_theme/images/testimonials-row-bg.svg" alt="">
    <div class="container">
        <img class="testimonials-img_bg" src="/wp-content/themes/butgetkit_theme/images/img_bg.svg" alt="">
        <div class="testimonials-top">
            <h2 class="testimonials-title"><?php the_sub_field('title_of_block');?></h2>
            <p class="testimonials-desc"><?php the_sub_field('description_of_title');?></p>
        </div>
        <div class="testimonials-row">
            <?php
                while (have_rows('testimonials')) : the_row(); ?>
                    <div class="testimonials-item">
                        <a href="<?php the_sub_field('link_of_testimonial');?>" target="_blank" class="testimonials-link">
                            <div class="testimonials-item-image">
                                <img src="<?php the_sub_field('image_of_testimonial')['url'];?>" alt="<?php the_sub_field('image_of_testimonial')['alt'];?>">
                            </div>
                            <button class="testimonials-btn">
                                <?php the_sub_field('text_button');?>
                                <svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0147 1.43934L55.5607 10.9853C56.1464 11.5711 56.1464 12.5208 55.5607 13.1066L46.0147 22.6525C45.4289 23.2383 44.4792 23.2383 43.8934 22.6525C43.3076 22.0668 43.3076 21.117 43.8934 20.5312L50.8787 13.5459H1.5C0.671573 13.5459 0 12.8744 0 12.0459C0 11.2175 0.671573 10.5459 1.5 10.5459H50.8787L43.8934 3.56066C43.3076 2.97487 43.3076 2.02513 43.8934 1.43934C44.4792 0.853553 45.4289 0.853553 46.0147 1.43934Z" fill="#181E4B"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                <?php endwhile;
            ?>
        </div>
    </div>
</section>