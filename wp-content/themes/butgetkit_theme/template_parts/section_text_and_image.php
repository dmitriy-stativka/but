<section class="image_text">
    <div class="container">
        <div class="image_text-row">
            <div class="image_text-item">
                <h1 class="image_text-item-title title-bold-50"><?php the_sub_field('title_of_block');?></h1>
                <p class="image_text-item-desc"><?php the_sub_field('text_of_block');?></p>
            </div>

            <div class="image_text-item image_text-item_img">
                <img src="<?php the_sub_field('image_of_block')['url'];?>" alt="<?php the_sub_field('image_of_block')['alt'];?>">
            </div>
        </div>
    </div>
</section>