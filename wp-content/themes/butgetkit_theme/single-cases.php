<?php get_header(); ?>
<div class="single-cases">
    <div class="single-cases-bg">    
        <img src="<?php the_field('image_of_cases')['url'];?>" alt="">
    </div>
        <div class="container single-cases-container">
            <div class="single-cases-content">
                <div class="breadcrums">
                    <a class="breadcrums-item" href="/use-cases">use cases /</a>
                    <span class="breadcrums-item">
                        <?php
                            $terms = get_the_terms(get_the_ID(), "taxonomyuse_cases");
                            if ($terms) {
                                $i = 0;
                                foreach ($terms as $term) { ?>
                                    <span><?php echo $term->name; if($i >= 0){echo '<i>,</i>';};?></span>
                                <?php $i++;
                                }
                            };
                        ?>
                    </span>
                </div>

                <h1 class="single-cases-title title-bold-84"><?php the_title();?></h1>
                <div class="tab-pane-author single-cases-author">
                    <img src="<?php the_field('author_image')['url']; ?>" alt="<?php the_field('author_image')['alt']; ?>">
                    <div class="tab-pane-author-info">
                        <span class="tab-pane-author-name"><?php the_field('author_name') ?></span>
                        <i><?php the_field('author_position'); ?></i>
                    </div>
                </div>

                
                <?php if (have_rows('page_builder_use_cases')):
                    while (have_rows('page_builder_use_cases')) : the_row();
                        get_template_part( 'template_parts/' . get_row_layout());
                    endwhile;
                endif; ?>

            </div>
        </div>

    <div class="single-cases-more-content">
        <div class="container">
            <div class="single-cases-container">
                <div class="single-cases-more swiper">
                    <h2 class="title-bold-50">More Use cases</h2>

                    <div class="single-cases-more-row swiper-wrapper">
                        <?php $terms = get_the_terms(get_the_ID(), "taxonomyuse_cases"); ?>
                        <?php
                            $mypost = array(
                            'post_type' => 'cases',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                'taxonomy' => 'taxonomyuse_cases',
                                'field' => 'slug',
                                'terms' => $term->name,
                                ),
                            ),
                            );
                            $loop = new WP_Query( $mypost );
                        ?>
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <a href="<?php the_permalink(); ?>" class="tab-pane-link swiper-slide">
                                <div class="tab-pane-link-content">
                                    <div class="tab-pane-img">
                                        <img src="<?php the_field('image_of_cases')['url']; ?>" alt="<?php the_field('image_of_cases')['alt']; ?>">
                                    </div>

                                    <div class="tab-pane-info">
                                        <span class="tab-pane-info-title"><?php the_title(); ?></span>

                                        <div class="tab-pane-author">

                                            <img src="<?php the_field('author_image')['url']; ?>" alt="<?php the_field('author_image')['alt']; ?>">
                                            <div class="tab-pane-author-info">
                                                <span class="tab-pane-author-name"><?php the_field('author_name') ?></span>
                                                <i><?php the_field('author_position'); ?></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>               
        </div>
    </div>
</div>
<?php get_footer(); ?>

<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },

        breakpoints: {
            slidesPerView: 1,
          320: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
            
          },
          1920: {
            slidesPerView: 4,
            slidesPerGroup: 1,
          }
        },
    });
</script>