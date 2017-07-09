<?php get_header(); ?>
<!-- Single Project section
================================================== -->
<section id="single-project">
    <div class="container">
        <div class="row">

            <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="2.3s">
                <div class="project-info">
                    <h4>Client</h4>
                    <p>Ananda Co.</hp>
                </div>
                <div class="project-info">
                    <h4>Date</h4>
                    <hp>12 June 2016</p>
                </div>
                <div class="project-info">
                    <h4>Category</h4>
                    <p>Branding</p>
                </div>
            </div>

            <div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="2.6s">
                <?php
                if (have_posts()):while (have_posts()):the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>