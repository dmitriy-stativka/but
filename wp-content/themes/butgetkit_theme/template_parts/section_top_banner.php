<section class="hero_section">
    <img class="hero_section-bottom" src="../wp-content/themes/butgetkit_theme/images/bottom.png" alt="">
    <div class="container">
        <div class="hero_section-content">
            <div class="hero_section-content-text">
                <span class="hero_section-content-span"><?php the_sub_field('pretitle');?></span>
                <h1 class="title-bold-84"><?php the_sub_field('title');?> 

                <?php if(have_rows('repeater') ){ ?>
                    <span class="hero-words">
                        <?php
                            while (have_rows('repeater')) : the_row(); ?>
                                <span class="hero-span"><?php the_sub_field('word');?></span>
                            <?php endwhile;
                        ?>
                    </span>
                <?php }?>
                   
                </h1>
                <p><?php the_sub_field('minidescription');?></p>
                <a href="<?php the_sub_field('button_link');?>" class="btnBudget"><?php the_sub_field('button_text');?></a>
            </div>

            <?php 
                if(have_rows('repeater')){ ?>
                     <div class="hero_section-content-img">
                            <?php
                                while (have_rows('repeater')) : the_row(); ?>
                                    <img src="<?php the_sub_field('image')['url'];?>" alt="<?php the_sub_field('image')['alt'];?>">
                                <?php endwhile;
                            ?>
                        </div>
                <?php }
            ?>
        </div>
    </div>
</section>