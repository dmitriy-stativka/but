<section class="budget-icons">
    <div class="container">
        <h2 class="title-bold-50"><?php the_sub_field('title');?></h2>
        <div class="budget-icons-row">
            <?php $numb = 1;
                while (have_rows('list')) : the_row(); ?>
                    <div class="budget-icons-item">
                        <i><?php echo $numb;?></i>
                        <img src="<?php the_sub_field('icon')['url'];?>" alt="<?php the_sub_field('icon')['alt'];?>">
                        <span><?php the_sub_field('text');?></span>
                    </div>
                <?php $numb++; endwhile;
            ?>
        </div>
            
    </div>
</section>