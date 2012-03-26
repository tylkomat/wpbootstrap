<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since wpbootstrap 0.1
 */

get_header(); ?>

<section class="row">
  <article class="span11 columns">
			<h1 class="page-header"><?php
				printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
			?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>

  </article>
  <aside class="span5 columns">
		<?php get_sidebar(); ?>
  </aside>
</section>
<?php get_footer(); ?>