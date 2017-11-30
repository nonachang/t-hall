<?php
/**
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 28, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	<div class="entry">
		<?php Habakiri::the_title(); ?>
		<?php get_template_part( 'modules/entry-meta' ); ?>
		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content entry-content">
			<?php the_content(); ?>
			
			<?php
			if( is_singular( 'event' ) ) {
			 get_template_part( 'modules/event-pages' );
			}?>
			
		<!-- end .entry__content --></div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
	<!-- end .entry --></div>

	<?php get_template_part( 'modules/link-pages' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>

</article>
