<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marble &mdash; Free HTML5 Bootstrap Website Template by FreeHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords"
        content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
    '/css/animate.css' )
;
?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
    '/css/icomoon.css' )
;
?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
    '/css/bootstrap.css'
);
?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
    '/css/flexslider.css' );
?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo get_theme_file_uri(
    '/css/style.css' );
?>">

    <!-- Modernizr JS -->
    <script src="<?php echo get_theme_file_uri(
    '/js/modernizr-2.6.2.min.js' );
?>"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <?php wp_head()?>

</head>

<body>
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="<?php echo site_url() ?>">Marble</a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li <?php echo is_front_page() ?
'class="fh5co-active"e' : '' ?>><a href="<?php echo site_url() ?>">Home</a></li>
                    <li <?php
if ( get_query_var( 'pagename' ) == 'blog' ) {
    echo 'class="fh5co-active"e';
} elseif ( is_single() ) {
    echo 'class="fh5co-active"e';
}
?>><a href="<?php echo site_url( '/blog' ) ?>">Blog</a></li>
                    <li <?php echo get_query_var( 'pagename' ) === 'portfolio'
    ?
'class="fh5co-active"e' : '' ?>><a href="<?php echo site_url( '/portfolio' ) ?>">Portfolio</a></li>
                    <li <?php echo get_query_var( 'pagename' ) === 'about' ?
'class="fh5co-active"e' : '' ?>><a href="<?php echo site_url( '/about' ) ?>">About</a></li>
                    <li <?php echo get_query_var( 'pagename' ) === 'contact' ?
'class="fh5co-active"e' : '' ?>><a href="<?php echo site_url( '/contact' ) ?>">Contact</a></li>
                </ul>
                <!-- <?php echo wp_page_menu() ?> -->
            </nav>

            <div class="fh5co-footer">
                <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a
                                href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images:
                            <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
                <ul>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                </ul>
            </div>

        </aside>