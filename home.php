<?php
/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php get_header(); ?>

<?php get_template_part( 'modules/page-header' ); ?>

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
	<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>
<!-- end .sub-page-contents --></div>

<?php get_footer(); ?>
