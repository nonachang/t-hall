<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<?php 
	$category = get_the_category();
	$cat_name = $category[0]->cat_name;
	if($cat_name == 'お知らせ'){
?>

<div class="page-header text-center " >
<div class="container">
<h1 class="page-header__title "></h1>
<!-- end .container --></div>
<!-- end .page-header --></div>

<?php } ?>
<div class="sub-page-contents">
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<main id="main" role="main">

				<?php get_template_part( 'modules/breadcrumbs' ); ?>
				<?php
				if ( is_404() ) {
					get_template_part( 'content', 'none' );
				} else {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'content', 'single' );
					}
				}
				?>

			<!-- end #main --></main>
		<!-- end .col-md-8 --></div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		<!-- end .col-md-4 --></div>
	<!-- end .row --></div>
<!-- end .container --></div>

<!-- end .sub-page-contents --></div>


