<?php get_header();?>


<div id="fh5co-main">
    <aside id="fh5co-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
                <li style="background-image: url(<?php the_post_thumbnail_url()
;
?>);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h1><?php echo get_bloginfo( 'name' ) ?> </h1>
                                    <h2><?php echo get_bloginfo(
    'description'
) ?>
                                    </h2>
                                    <p><a class="btn btn-primary btn-demo popup-vimeo" href="
                                                    <?php echo site_url(
    '/portfolio'
) ?>
                                                 "> <i class="icon-monitor"></i>
                                            Portfolio</a> <a class="btn btn-primary btn-learn" href="
                                 <?php echo site_url( '/contact' ) ?>">Contact<i class="icon-arrow-right3"></i></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </aside>

    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Services</h2>
        <div class="row">


            <?php
$args      = ['post_type' => 'service', 'posts_per_page' => -1];
$the_query = new WP_Query( $args );
?>
            <?php if ( $the_query->have_posts() ): ?>
            <?php while ( $the_query->have_posts() ): $the_query->the_post(
    );?>
            <div class="col-md-6">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                    <div class="fh5co-icon">
                        <i class="<?php the_field( 'service_icon' )?>"></i>
                    </div>
                    <div class="fh5co-text">
                        <h3><?php the_title()?></h3>
                        <?php the_content()?>
                    </div>
                </div>
            </div>
            <?php endwhile;
wp_reset_postdata();?>
            <?php else: ?>
            <div class="col-md-6">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                    <div class="fh5co-icon">
                        <i class="icon-settings"></i>
                    </div>
                    <div class="fh5co-text">
                        <h3><?php the_title()?></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                    <div class="fh5co-icon">
                        <i class="icon-search4"></i>
                    </div>
                    <div class="fh5co-text">
                        <h3>Explore</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <?php endif;?>

        </div>
    </div>
    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Recent Blog</h2>
        <div class="row row-bottom-padded-md">


            <?php
$args      = ['post_type' => 'post', 'posts_per_page' => 4];
$the_query = new WP_Query( $args );
?>
            <?php if ( $the_query->have_posts() ): ?>
            <?php while ( $the_query->have_posts() ): $the_query->the_post();?>
            <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="<?php the_permalink()?>







																					                                              " class="blog-img"><?php
    the_post_thumbnail( [250, 250], 'class="img-responsive"' )?></a>
                    <div class="desc">
                        <h3><a href="#"><?php the_title()?></a></h3>
                        <span><small>By <?php the_author()?>
                            </small> / <small> <?php the_category( ',' )?> </small> / <small> <i
                                    class="icon-comment"></i>
                                14</small></span>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div>
            <?php endwhile;
wp_reset_postdata();?>
            <?php else: ?>
            <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="#" class="blog-img"><img src="<?php echo
get_theme_file_uri(
    '/images/img-1.jpg'
);
?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div class="desc">
                        <h3><a href="#">Inspirational Website</a></h3>
                        <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                    class="icon-comment"></i> 14</small></span>
                        <p>Design must be functional and functionality must be translated into visual aesthetics
                        </p>
                        <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="#" class="blog-img"><img src="<?php echo
get_theme_file_uri(
    '/images/img-1.jpg'
);
?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div class="desc">
                        <h3><a href="#">Inspirational Website</a></h3>
                        <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                    class="icon-comment"></i> 14</small></span>
                        <p>Design must be functional and functionality must be translated into visual aesthetics
                        </p>
                        <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div> <?php endif;?>



            <!-- <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="#" class="blog-img"><img src="<?php echo
get_theme_file_uri(
    '/images/img-2.jpg'
);
?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div class="desc">
                        <h3><a href="#">Inspirational Website</a></h3>
                        <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                    class="icon-comment"></i> 14</small></span>
                        <p>Design must be functional and functionality must be translated into visual aesthetics
                        </p>
                        <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="#" class="blog-img"><img src="<?php echo
get_theme_file_uri(
    '/images/img-3.jpg'
);
?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div class="desc">
                        <h3><a href="#">Inspirational Website</a></h3>
                        <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                    class="icon-comment"></i> 14</small></span>
                        <p>Design must be functional and functionality must be translated into visual aesthetics
                        </p>
                        <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="#" class="blog-img"><img src="<?php echo
get_theme_file_uri(
    '/images/img-4.jpg'
);
?>" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
                    <div class="desc">
                        <h3><a href="#">Inspirational Website</a></h3>
                        <span><small>by Admin </small> / <small> Web Design </small> / <small> <i
                                    class="icon-comment"></i> 14</small></span>
                        <p>Design must be functional and functionality must be translated into visual aesthetics
                        </p>
                        <a href="#" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div id="get-in-touch">
        <div class="fh5co-narrow-content">
            <div class="row">
                <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                    <h1 class="fh5co-heading-colored">Get in touch</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                    <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the
                        Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer()?>