<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package trivoo-free
 */

get_header(); 
$view = trivoo_get_view();
?>

<?php trivoo_title_bar( $view ); ?>

<div class="trivoo-row site-content" id="content">
    <div class="container">
		<div class="row">
			
			<?php trivoo_try_sidebar( $view, 'left' ); ?>

			<div id="primary" class="content-area single <?php trivoo_main_cls(); ?>">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
			
			<?php trivoo_try_sidebar( $view, 'right' ); ?>

		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #content -->

<?php get_footer(); ?>