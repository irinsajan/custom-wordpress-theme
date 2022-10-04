<?php
/*
 * Template Name: My Custom Template
 * description: >-
  My custom Captivate page
 */
    get_header();

    ?>

<?php 
            $home_events = new WP_Query(array(
              'posts_per_page' => 2,
              'post_type' => 'event'
            ));

            while($home_events->have_posts()) {
              $home_events->the_post(); ?>
                <div class="event-summary">
                  <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                  </a>
                  <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php if(has_excerpt()) {
                        echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 18);
                        }
                    ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                  </div>
                </div>
            <?php }
          ?>       


    <?php

    get_footer();

?>
