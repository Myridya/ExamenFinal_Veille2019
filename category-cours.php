<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<section id="primary" class="content-area">
<main id="main" class="site-main">
<?php if (have_posts()) : ?>
<?php // the_archive_title('<h1 class="page-title">', '</h1>'); ?>
<header id='liste-cours' class="page-header">
	<h1>Liste des cours</h1>
</header><!-- .page-header -->
<div class="wp-block-columns">
<section class='liste-cours'>
<?php // Start the Loop.
while (have_posts()) : the_post();
// echo 'passe';
/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
// the_title();
get_template_part('template-parts/content/titre-cours');
// End the loop.
endwhile; ?>
</section>  <!-- Fin liste cours -->
</div>
<?php
 else: echo 'aucun cours';
endif;
?>



</main>< !-- #main --></section>< !-- #primary --><?php get_footer();
