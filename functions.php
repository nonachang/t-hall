<?php
//子テーマでslick.js読み込み
function habakiri_child_theme_setup() {
	class Habakiri extends Habakiri_Base_Functions {

		public function wp_enqueue_scripts() {
			parent::wp_enqueue_scripts();
			
			wp_enqueue_script(
				'slick.min',
				get_stylesheet_directory_uri() . '/js/slick/slick.min.js',
				array( 'slick' ),
				null,
				true
			);
		}
	}
}
add_action( 'after_setup_theme', 'habakiri_child_theme_setup' );

//絵文字無効化
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


//フッター前情報
function tetto_before_footer(){
	get_template_part('modules/footer-contents');
}
add_action( 'habakiri_before_footer_content', 'tetto_before_footer' );


//フッターコピーライト
function tetto_after_footer(){
	get_template_part('modules/footer-copyright');
}
add_action( 'habakiri_after_footer_content', 'tetto_after_footer' );


//wp_footerにpickupのscript追加
function add_wp_footer (){      
 	 echo "<script>
	 	jQuery( function( $ ) {
		 $('.pickup').slick({
		 arrows: false,
		 dots: true
		 });});
		 </script>";
}
add_action ('wp_footer','add_wp_footer',1);

//アイキャッチ画像の定義と切り抜き
add_action( 'after_setup_theme', 'baw_theme_setup' );
function baw_theme_setup() {
 add_image_size('top_eyecatch-image', 240, 350, true );
}
//投稿・固定ページヘッダー　タイトル情報削除
function tetto_page_header_text_remove( $title ){
		$text = '';
		return	$text;
}
add_filter( 'habakiri_title_in_page_header', 'tetto_page_header_text_remove' );


//投稿・固定ページヘッダー　画像
function tetto_page_header_background_image( $src ) {
	$page = get_page(get_the_ID());
	$slug = $page->post_name;
	if($slug=='access'){
		return 'http://lifedev.jp/ock-lvt/wp-content/uploads/2017/11/bg_01.jpg';
	}
}
add_filter( 'habakiri_page_header_background_image', 'tetto_page_header_background_image' );


//イベント情報投稿画面
add_action( 'init', 'tetto_event_post_type' );
function tetto_event_post_type() {
  	register_post_type(
			'event',
			array(
			'label' => 'イベント情報',
			'public' => true,
			'hierarchical' => true,
			'has_archive' => true,
			'menu_position' => 5,
			'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes')
		)
	);
	register_taxonomy_for_object_type('category', 'event');
};

//イベントページ メタ情報
function tetto_page_entry_meta( $entry_meta ){
		if( is_singular( 'event' ) ) {
			$categories = array();
			if ( $_categories = get_the_category() ) {
				foreach ( $_categories as $category ) {
					$term_data = get_option('term_'.$category->cat_ID );
					$categories[] = sprintf(
						'<span style="background-color:%s">%s</span>',
						$term_data['bgcolor'],
						esc_html( $category->cat_name )
					);
				}
				return sprintf(
					'<li class="entry-meta__item categories">%s</li>',
					implode( ' ', $categories )
				);
			}
		}
}
add_filter( 'habakiri_entry_meta', 'tetto_page_entry_meta' );

//右サイドバーコンテンツ
function tetto_after_sidebar_widget_area(){
		get_template_part('modules/after-sidebar-content');
}
add_action('habakiri_after_sidebar_widget_area', 'tetto_after_sidebar_widget_area');
	