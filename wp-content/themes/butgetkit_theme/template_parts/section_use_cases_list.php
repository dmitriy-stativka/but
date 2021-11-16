<ul class="budget-list">
    <?php
        while (have_rows('list')) : the_row(); ?>
            <li class="budget-item"><?php the_sub_field('text_item');?></li>
        <?php endwhile;
    ?>
</ul>