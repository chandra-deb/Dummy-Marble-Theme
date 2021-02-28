<?php get_header()?>
<div id="fh5co-main">
    <div class="fh5co-narrow-content">
        <?php if ( have_posts() ) {
    the_post();?>
        <!-- fh5co-heading -->
        <h1 class="animate-box" data-animate-effect="fadeInLeft"><?php
the_title()?></h1>
        <?php the_post_thumbnail( 'medium_large' )?>

        <div><?php the_category( ',' )?>

            <?php the_date()?>
        </div>

        <div style="max-width: 680px;">
            <?php the_content()?>
        </div>
        <?php
if ( get_previous_post_link() ) {
        ?>
        <span style="font-size: 2em;">


            <?php echo 'Read Previous - ';
        previous_post_link();
        ?>
        </span>
        <?php
}
    ?> <span style="font-size: 2.5em;">|</span>
        <?php if ( get_next_post_link() ) {
        ?>
        <span style="font-size: 2em;">

            <?php echo 'Read Next - ';
        next_post_link() ?>
            <?php }
    ?>
        </span>
        <?php
}
?>

    </div>
</div>

<?php get_footer()?>