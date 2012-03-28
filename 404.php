<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage wpbootstrap
 * @since wpbootstrap 0.1
 */

get_header(); ?>

<section class="row">
  <article class="span9 columns">


			<h1  class="page-header"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
			<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		jQuery('#s').focus();
	</script>

  </article>
  
  <aside class="span3 columns">
		<?php get_sidebar(); ?>
  </aside>
</section>

<?php get_footer(); ?>