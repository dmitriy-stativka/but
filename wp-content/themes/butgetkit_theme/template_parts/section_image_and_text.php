<div class="container">
    <div class="budget_item">
        <div class="budget_image" style="<?php if(get_sub_field('left&right')){ echo "order: 2;"; };?>">
            <img src="<?php the_sub_field('image')['url'];?>" alt="<?php the_sub_field('image')['alt'];?>">
        </div>
        <div class="budget_text" style="<?php if(get_sub_field('left&right')){echo "order: 1;";}?>">
            <h2 class="title-bold-50 <?php the_sub_field('classname');?>"><?php the_sub_field('title');?></h2>
            <p><?php the_sub_field('text_area');?></p>
            <span><?php the_sub_field('text');?></span>
            <ul class="budget-list">
                <?php
                while (have_rows('list')) : the_row(); ?>
                    <li class="budget-item"><?php the_sub_field('text_of_item');?></li>
                    <?php endwhile;
                ?>
            </ul>
        </div>
    </div>
</div>