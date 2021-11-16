<script src="<?php echo get_template_directory_uri(); ?>/src/js/vendor/jquery-3.2.1.min.js"></script>

<div class="use_cases_container">
  <section class="tabs-wrapper">
    <div class="container">
      <div class="tabs-block">
        <div class="tabs">
          <?php $cases = get_terms('taxonomyuse_cases'); ?>

          <ul class="nav use_cases_container-tabs" id="myTab" role="tablist">

            <?php foreach ($cases as $case) : ?>
              <li class="tabs-block-item">
                <a class="tabs-block-link" href="#<?php echo $case->slug; ?>"
                   data-toggle="tab"><?php echo $case->name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>

          <div class="tab-content">
            <?php foreach ($cases as $case) : ?>

              <div class="tab-pane fade" id="<?php echo $case->slug; ?>">
                <?php
                $args = array(
                  'post_type' => 'cases',
                  'posts_per_page' => 9,
                  'paged' => get_query_var('paged') ?: 1,
                  'orderby' => 'title',
                  'order' => 'ASC',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'taxonomyuse_cases',
                      'field' => 'slug',
                      'terms' => $case->slug
                    )
                  )
                );
                $caseItem = new WP_Query($args);
                ?>
                <div class="list">
                  <?php while ($caseItem->have_posts()) : $caseItem->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="tab-pane-link">
                      <div class="tab-pane-link-content">
                        <div class="tab-pane-img">
                          <img src="<?php the_field('image_of_cases')['url']; ?>"
                               alt="<?php the_field('image_of_cases')['alt']; ?>">
                        </div>

                        <div class="tab-pane-info">
                          <span class="tab-pane-info-title"><?php the_title(); ?></span>

                          <div class="tab-pane-author">

                            <img src="<?php the_field('author_image')['url']; ?>"
                                 alt="<?php the_field('author_image')['alt']; ?>">
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
                <?php
                if ($caseItem->max_num_pages > 1) {
                  ?>
                  <button class="tabs-wrapper-more load-more-cases"
                          data-max_page="<?php echo $caseItem->max_num_pages; ?>"
                          data-cur_page='<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>'
                          data-true_post='<?php echo serialize($caseItem->query_vars); ?>" id="loadmore_<?php echo $case->slug; ?>'>
                    More cases
                    <svg width="23" height="36" viewBox="0 0 23 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.6525 25.2647L12.1065 34.8107C11.5207 35.3964 10.571 35.3964 9.98519 34.8107L0.439252 25.2647C-0.146535 24.6789 -0.146535 23.7292 0.439252 23.1434C1.02504 22.5576 1.97479 22.5576 2.56057 23.1434L9.54585 30.1287L9.54585 2.25C9.54585 1.42157 10.2174 0.749999 11.0459 0.75C11.8743 0.75 12.5459 1.42157 12.5459 2.25L12.5459 30.1287L19.5311 23.1434C20.1169 22.5576 21.0667 22.5576 21.6525 23.1434C22.2382 23.7292 22.2382 24.6789 21.6525 25.2647Z"
                            fill="#181E4B"/>
                    </svg>
                  </button>
                  <?php
                }
                ?>
                <?php wp_reset_query(); ?>
              </div>
            <?php endforeach; ?>


          </div><!-- tab-content -->

        </div>
      </div>
    </div>
  </section>
</div>

