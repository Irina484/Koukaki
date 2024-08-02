<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" >
    <div class="main-navigation">
  
        <div class="site-title"> <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        </div> 
        <div class="menu-icon" onclick="visibilMenu()">
            <div class="burger"></div>
        </div>
        <div class="menu fullscreen">
        <div>
            <img class="logofullscreen" src=" <?php echo get_stylesheet_directory_uri().'/assets/images/Image logo en paralax menu.png'; ?> ">
        </div>
        <div>
            <img class="orchid" src=" <?php echo get_stylesheet_directory_uri().'/assets/images/orchid.png'; ?> ">
        </div>
        <div>
            <img class="catviolet" src="<?php echo get_stylesheet_directory_uri().'/assets/images/catviolet.png'; ?> ">
        </div>
        <div>
            <img class="sunflower" src="<?php echo get_stylesheet_directory_uri().'/assets/images/Sunflower.png'; ?> ">
        </div>
        <div>
            <img class="random_flower" src="<?php echo get_stylesheet_directory_uri().'/assets/images/random_flower.png'; ?> ">
        </div>
        <div>
            <img class="catgris" src="<?php echo get_stylesheet_directory_uri().'/assets/images/catgris.png'; ?> ">
        </div>
        <div>
            <img class="hibiscus_footer" src="<?php echo get_stylesheet_directory_uri().'/assets/images/hibiscus_footer.png'; ?> ">
        </div>
        <div>
            <img class="catorange" src="<?php echo get_stylesheet_directory_uri().'/assets/images/catorange.png'; ?> ">
        </div>
        <div>
            <img class="flower" src="<?php echo get_stylesheet_directory_uri().'/assets/images/flower.png'; ?> ">
        </div>
        <ul >
                <li><a onclick="visibilMenu()" href="#story">Histoire</a></li>
                <li><a onclick="visibilMenu()" href="#characters">Personnages</a></li>
                <li><a onclick="visibilMenu()" href="#place">Lieu</a></li>
                <li><a onclick="visibilMenu()" href="#studio">Studio Koukaki</a></li>
            </ul>
            <div class="lien">
            <a  href="#">STUDIO KOUKAKI</a>
            </div>
        </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
