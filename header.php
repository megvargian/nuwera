<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuwera - Heavy Metal Band</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://nuwera.band/wp-content/uploads/2024/09/cropped-Nuwera-Logo-White-192x192.png" sizes="192x192">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site main_page_wrapper">
	<div id="content" class="site-content">
	<header style="text-align:center; padding:30px 0; background-color:transparent;">
        <a href="/" style="display:inline-block;">
            <img src="https://nuwera.band/wp-content/uploads/2024/09/Nuwera-Name-Only-White-500x132.png" alt="Nuwera Logo" style="display:none; max-width:300px; width:100%; height:auto;">
        </a>
    </header>