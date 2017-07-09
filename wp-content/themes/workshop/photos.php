<?php
/*
 * Template Name: All photos
 */
?>
<?php get_header(); ?>
<!-- About section
================================================== -->
<section id="blog">
    <div class="container">
        <div class="row">

            <ul class="filter-wrapper clearfix">
                <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                <?php
                $terms = get_terms('collection', ['parent' => 0, 'hide_empty' => 0, 'order' => 'ASC']);
                foreach ($terms as $term) {
                    ?>
                <li><a href="#" class="opc-main-bg" data-filter=".<?php echo mb_strtolower($term->name) ?>"><?php echo $term->name ?></a></li>
                    <?php
                }
                ?>

            </ul>

            <?php
            $args_t = new WP_Query([
                'post_type' => 'photos',
                'posts_per_page' => -1,
            ]);
            $the_query_top = new WP_Query($args_t);
            while ($the_query_top->have_posts()) :
                $the_query_top->the_post();
                ?>
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
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>