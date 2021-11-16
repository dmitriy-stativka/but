<section class="more_section">
    <img src="../wp-content/themes/butgetkit_theme/images/more_bg.svg" alt="" class="more_section-bg">
    <div class="container">
        <div class="more_section-row">
            <div class="more_section-item">
                <div class="more_section-item-text">
                    <h3 class="more_section-title"><?php the_sub_field('title_of_block');?></h3>
                    <p><?php the_sub_field('description_of_block');?></p>
                </div>
            </div>
            <div class="more_section-item">
                <a href="<?php the_sub_field('button_link');?>" class="btnBudget"><?php the_sub_field('button_text');?>
                    <svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0142 1.43934L55.5602 10.9853C56.146 11.5711 56.146 12.5208 55.5602 13.1066L46.0142 22.6525C45.4284 23.2383 44.4787 23.2383 43.8929 22.6525C43.3071 22.0668 43.3071 21.117 43.8929 20.5312L50.8782 13.5459H1.49951C0.671085 13.5459 -0.000488281 12.8744 -0.000488281 12.0459C-0.000488281 11.2175 0.671085 10.5459 1.49951 10.5459H50.8782L43.8929 3.56066C43.3071 2.97487 43.3071 2.02513 43.8929 1.43934C44.4787 0.853553 45.4284 0.853553 46.0142 1.43934Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container more_section-container">
        <div class="more_section-people">
            <?php
                while (have_rows('people')) : the_row(); ?>
                    <div class="more_section-people-item">
                        <div class="more_section-people-item-img">
                            <img src="<?php the_sub_field('image')['url'];?>" alt="<?php the_sub_field('image')['alt'];?>">
                        </div>
                        <span class="more_section-people-name"><?php the_sub_field('name_of_person');?></span>
                        <i class="more_section-people-position"><?php the_sub_field('position_of_person');?></i>
                    </div>
                <?php endwhile;
            ?>
        </div>
    </div>
</section>