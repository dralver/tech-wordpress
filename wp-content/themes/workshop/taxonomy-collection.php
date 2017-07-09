<?php get_header(); ?>
<!-- Blog section
================================================== -->
<section id="blog">
    <div class="container">
        <div class="row">
            <?php if (have_posts()):while (have_posts()):the_post(); ?>
                    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1s">
                        <div class="blog-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                            </a>
                            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                            <div class="post-format">
                                <span>By <a href="#"><?php the_author(); ?></a></span>
                                <span><i class="fa fa-date"></i> <?php the_date(); ?></span>
                            </div>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-default">Full Article</a>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>