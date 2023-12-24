<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gctl
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">








	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site"> <!-- end in footer.php -->
	<header id="masthead" class="site-header">


	</header><!-- #masthead -->

	<div id="content" class="site-content"> <!-- End in footer.php -->
