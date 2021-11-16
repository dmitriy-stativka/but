<section class="tabs-wrapper">
    <div class="container">
        <div class="tabs-block">
            <div class="tabs">
                <div class="tabs-header">
                    <?php $o = 1;
                        while (have_rows('tabs_list')) : the_row(); ?>
                            <button data-index="#tab<?php echo $o;?>" class="<?php if($o == 1){ echo 'active'; }?>"><?php the_sub_field('title_of_tab');?></button>
                        <?php $o++; endwhile;
                    ?>
                </div>
                <div class="tabs-content">
                    <?php $i = 1;
                        while (have_rows('tabs_list')) : the_row(); ?>
                            <div class="tab" id="tab<?php echo $i;?>">
                                <div class="tab-wrapper">
                                    <div class="tab-text">
                                        <h2><?php the_sub_field('title_of_item');?></h2>
                                        <div class="tab-content">
                                            <p><?php the_sub_field('description_of_item');?></p>
                                            <span><?php the_sub_field('name_of_author');?></span>
                                            <i><?php the_sub_field('position_of_author');?></i>
                                        </div>
                                        <?php if(get_sub_field('button_text')){ ?>
                                            <a class="tab-link" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?>
                                                <svg width="56" height="24" viewBox="0 0 56 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M46.0147 1.43934L55.5607 10.9853C56.1464 11.5711 56.1464 12.5208 55.5607 13.1066L46.0147 22.6525C45.4289 23.2383 44.4792 23.2383 43.8934 22.6525C43.3076 22.0668 43.3076 21.117 43.8934 20.5312L50.8787 13.5459H1.5C0.671573 13.5459 0 12.8744 0 12.0459C0 11.2175 0.671573 10.5459 1.5 10.5459H50.8787L43.8934 3.56066C43.3076 2.97487 43.3076 2.02513 43.8934 1.43934C44.4792 0.853553 45.4289 0.853553 46.0147 1.43934Z" fill="#181E4B" fill-opacity="0.7"/>
                                                </svg>
                                            </a>
                                        <?php }?>
                                    </div>
                                    <div class="tab-img">
                                        <img src="<?php the_sub_field('image_of_item')['url'];?>" alt="<?php the_sub_field('image_of_item')['alt'];?>">
                                    </div>
                                </div>
                            </div>
                        <?php $i++; endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
