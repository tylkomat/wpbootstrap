<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since wpbootstrap 0.1
 */

get_header(); ?>

<section class="row">
  <article class="span11 columns">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2 class="page-header"><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1 class="page-header"><?php the_title(); ?></h1>
					<?php } ?>				
					
					<article class="post_content" itemscope itemType="http://schema.org/BlogPosting">
						<?php the_content(); ?>
					</article> <!-- /post_content -->

						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
					
					<hr />


				<?php comments_template( '', true ); ?>

<?php endwhile; ?>

  </article>
  <aside class="span5 columns">
		<?php get_sidebar(); ?>
  </aside>
</section>
<?php get_footer(); ?>