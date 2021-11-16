<section class="benefits">
    <div class="container">
        <h2 class="title-bold-50"><?php the_sub_field('title_of_block');?></h2>
        <img class="benefits_img" src="../wp-content/themes/butgetkit_theme/images/benefits_img1.png" alt="">
        <div class="benefits_list">
            <?php
                while (have_rows('items_list')) : the_row(); ?>
                    <div class="benefits_list-item">
                        <div class="benefits_list-item-content">
                            <img src="<?php the_sub_field('image_of_item')['url'];?>" alt="<?php the_sub_field('image_of_item')['alt'];?>">
                            <h3 class="title-bold-32"><?php the_sub_field('title_of_item');?></h3>
                            <p><?php the_sub_field('description_of_item');?></p>
                        </div>
                    </div>
                <?php endwhile;
            ?>
        </div>
    </div>
</section>