
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Metro UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, Metro UI, style, modern, css, framework">

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/assets/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/dropdown.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/accordion.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/buttonset.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/carousel.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/input-control.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/pagecontrol.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/rating.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/tile-slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern/tile-drag.js"></script>

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body class="modern-ui">
<div class="page" id="header">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span8">
                        <h1><?php echo get_bloginfo( 'name' ); ?></h1>
                        <p><?php echo get_bloginfo( 'description' ); ?></p>
                    </div>
                    <div class="span4 text-right social-icons">
                        <a href="http://github.com/darsadow" target="_blank"><i class="icon-github-2"></i></a>
                        <a href="https://www.facebook.com/darius.sadowski" target="_blank"><i class="icon-facebook"></i></a>
                        <a href="http://twitter.com/darsadow" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="http://www.linkedin.com/in/darsadow" target="_blank"><i class="icon-linkedin"></i></a>
                        <a href="skype:darius.sadowski" target="_blank"><i class="icon-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <div class="nav-bar">
        <?php echo wp_nav_menu(array(
            'theme_location' => 'primary',
            'container_class' => 'nav-bar-inner padding10',
            'items_wrap' => '<ul class="menu"><li id="item-id"><a href="/">Home</a></li>%3$s</ul'
        )); ?>
    </div>
</div>


<div class="page">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <div class="span9">
                        <?php if ( have_posts() ) : ?>

                            <?php /* Start the Loop */ ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php echo the_ID; ?>">
                                <div class="row">
                                    <div class="span1">
                                        <p class="post-date post-date-day"><?php echo the_time('d'); ?></p>
                                        <p class="post-date post-date-month"><?php echo the_time('M'); ?></p>
                                        <p class="post-date post-date-year"><?php echo the_time('Y'); ?></p>
                                    </div>
                                    <div class="span8">
                                        <div class="row">
                                            <div class="span8">
                                                <h2 class="post-title">
                                                    <a href="<?php echo the_permalink(); ?>" rel="bookmark" title="Permanent link to <?php echo the_title(); ?>"><?php echo the_title(); ?></a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span8">
                                                <?php echo the_content(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <?php endwhile; ?>

                        <?php else : ?>

                            <article id="post-0" class="post no-results not-found">

                            <h3>No posts :(</h3>

                            </article><!-- #post-0 -->

                        <?php endif; // end have_posts() check ?>
                    </div>
                    <div class="span3">
                        <?php dynamic_sidebar('sidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <div class="page-region">
        <div class="page-region-content">
            <div class="grid">
                <div class="row">
                    <footer>
                        <div class="span6">
                            <p>
                                <small>&copy; 2013 Dariusz Sadowski</small>
                            </p>
                        </div>
                        <div class="span6 text-right">
                            <p><small>Created with </small><a href="http://wordpress.org" target="_blank"><i class="icon-wordpress"></i></a><small> and </small><a href="http://metroui.org.ua/" target="_blank"><small>Metro UI CSS</small></a> by <a href="http://darsadow.com" target="_blank"><small>Dariusz Sadowski</small></a></p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
