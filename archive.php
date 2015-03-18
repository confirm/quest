<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package trivoo-free
 */

get_header();
$layout = get_theme_mod( 'layout_archive_style', trivoo_get_default( 'layout_archive_style' ) ); ?>

<?php get_template_part( 'partials/content', $layout ); ?>

<?php get_footer(); ?>
