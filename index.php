<?php get_header()?>

<div id="fh5co-main">
    <div class="fh5co-narrow-content">
        <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
            <?php if ( is_category() ) {
    echo 'Read My Blog - ';
    echo the_category( ',' );
} else {
    echo 'Read My Blog';
}?>
        </h2>

        <div class="row row-bottom-padded-md">

            <?php while ( have_posts() ) {
    the_post();
    ?> <div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
                <div class="blog-entry">
                    <a href="<?php the_permalink()?>
                                              " class="blog-img"><?php
the_post_thumbnail( [250, 250], 'class="img-responsive"' )?></a>
                    <div class="desc">
                        <h3><a href="#"><?php the_title()?></a></h3>
                        <span><small>By <?php the_author()?>
                            </small> / <small> <?php the_category( ',' )?> </small> / <small> <i
                                    class="icon-comment"></i>
                                <?php comments_number()?></small></span>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div>
            <?php
}
?>


        </div>
        <div><?php the_posts_pagination(
    [
        'screen_reader_text' => ' ',
        'prev_text'          => 'Newer Posts',
        'next_text'          => 'Older Posts',
    ]
);?>

        </div>
        <h3 style="margin-bottom: 5px;">Categories</h3>
        <div>
            <li style="list-style-type: none;"><a href="<?php echo site_url(
    '/blog'
) ?>">All</a></li>
            <?php echo wp_list_categories( [

    'style' => 'none'] ) ?>
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
                    <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                        large
                        language ocean.</p>
                    <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
<?php get_footer()?>