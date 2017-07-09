<?php get_header(); ?>
<!-- About section
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <?php
            the_title();
            echo '<br><br>';
            if (has_post_thumbnail()) {
                the_post_thumbnail('lead');
            }
            ?>
            <?php
            if (have_posts()):while (have_posts()):the_post();

                    the_permalink();
                    echo '<br><br>';
                    the_excerpt();
                    echo '<br><br>';

                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <?php get_footer(); ?>