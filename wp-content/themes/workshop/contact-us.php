<?php
/*
 * Template Name: Contact us
 */
?>
<?php get_header(); ?>
<!-- About section
================================================== -->
<section id="about">
    <div class="container">
        <div class="row contact-us">
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
            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
                <div class="google_map">
                    <div id="map-canvas"></div>
                </div>
            </div>

            <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
                <h1>Let's work together!</h1>
                <div class="contact-form">
                    <form id="contact-form" method="post" action="#">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        <input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        <textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea>
                        <div class="contact-submit">
                            <input type="submit" class="form-control submit" value="Send a message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>