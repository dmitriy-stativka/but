<section class="list-features">
    <div class="container">
        <div class="list-features-row">
            <?php while (have_rows('repeater')) : the_row(); ?> 
                <div class="list-features-item" style="background: <?php the_sub_field('background_color');?> url(<?php the_sub_field('background_image')['url'];?>) no-repeat right bottom;">
                    <div class="list-features-item-text">
                        <h3 class="title-bold-50"><?php the_sub_field('title_of_block');?></h3>
                        <p><?php the_sub_field('text_of_block');?></p>
                        <ul class="list-features-item_ul">
                            <?php while (have_rows('list_of_block')) : the_row(); ?> 
                                <li class="list-features-item_li">
                                    <img src="<?php the_sub_field('image_if_item')['url'];?>" alt="<?php the_sub_field('image_if_item')['alt'];?>">
                                    <span><?php the_sub_field('text_of_item');?></span>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="list-features-item-img">
                        <img src="<?php the_sub_field('image_of_block')['url'];?>" alt="<?php the_sub_field('')['alt'];?>">
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>