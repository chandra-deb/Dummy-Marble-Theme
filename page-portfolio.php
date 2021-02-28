<?php get_header()?>
<div id="fh5co-main">
    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Projects</h2>


        <div class="row row-bottom-padded-md">
            <?php
$args      = ['post_type' => 'project', 'posts_per_page' => 10];
$the_query = new WP_Query( $args );
?>
            <?php if ( $the_query->have_posts() ): ?>
            <?php while ( $the_query->have_posts() ): $the_query->the_post();?>
            <div class="col-md-3 col-sm-6 col-padding text-center animate-box">
                <a href="<?php the_permalink()?>" class="work image-popup" style="background-image: url(
												                                           <?php
    the_post_thumbnail_url
        (
    )
    ;
    ?>);">
                    <div class="desc">
                        <h3><?php the_title()?></h3>
                        <!-- <span><?php the_category()?></span> -->
                    </div>
                </a>
            </div>
            <?php endwhile;
wp_reset_postdata();?>
            <?php else: ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' );?></p>
            <?php endif;?>
        </div>


        <!-- <div class="row row-bottom-padded-md">
            <div class="col-md-3 col-sm-6 col-padding text-center animate-box">
                <a href="#" class="work image-popup" style="background-image: url(images/img-1.jpg);">
                    <div class="desc">
                        <h3>Project Name</h3>
                        <span>Illustration</span>
                    </div>
                </a>
            </div>
        </div> -->
    </div>

    <div class="fh5co-narrow-content">
        <div class="row">
            <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                <h1 class="fh5co-heading-colored">Get in touch</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language ocean.</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>

        </div>
    </div>
</div>
<?php get_footer()?>