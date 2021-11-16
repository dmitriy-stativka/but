<?php /* Template Name: Request and invite */ ?>
<?php get_header(); ?>
<div class="main-page-wrap">
        <section class="hero_section request">
            <img class="hero_section-bottom" src="../wp-content/themes/butgetkit_theme/images/bottom.png" alt="">
            <div class="container">
                <div class="hero_section-content">
                    <div class="hero_section-content-text">
                        <span class="hero_section-content-span"><?php the_field('pretitle');?></span>
                        <h1 class="title-bold-84"><?php the_title();?></h1>
                        <p><?php the_field('minidescription');?></p>
                        <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]');?>
                    </div>
                </div>
            </div>
        </section>
        <?php if (have_rows('page_builder')):
            while (have_rows('page_builder')) : the_row();
                get_template_part( 'template_parts/' . get_row_layout());
            endwhile;
        endif; ?>
    </div>
<?php get_footer(); ?>