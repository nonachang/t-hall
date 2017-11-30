<div id="top_" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
		</div>
	</div>
</div>

<div id="top_event" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<div class="col-md-9 col-xs-9 border-heading"><h1>ピックアップイベント<small>PICKUP EVENT</small></h1></div>
				<div class="col-md-3 col-xs-3 panel">イベント一覧</div>
				<div class="col-xs-12 topcontents">
					
					<?php
					$posts = get_posts(array(
						'post_type' => 'event',
						'posts_per_page' => 5,
						'meta_key' => 'pickup' ,
						'meta_value' => 1
					));?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
					<ul>
						<?php foreach((get_the_category()) as $cat){echo '<li>' . $cat->cat_name . '</li>'; } ?>
					</ul>
					<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					
					<?php the_post_thumbnail('top_eyecatch-image'); ?>
					
					<?php
					if(get_field('event_date')!=null){
						$get_date = get_field('event_date');
						$datetime = date_create($get_date);
						$week = array("日", "月", "火", "水", "木", "金", "土");
						$w = (int)date_format($datetime, 'w');
						$youbi = $week[$w];
					}
					?>
					開催日
					<?php echo date('Y年n月j日', strtotime($get_date)); ?>（<?php echo $youbi?>）
					<?php echo get_post_meta(get_the_ID(), 'event_time', true); ?>
					会場
					<?php the_field('event_place'); ?>
					<?php endforeach; endif; ?>
				
					
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="col-xs-12 border-heading"><h1>イベントカレンダー<small>EVENT CALENDER</small></h1></div>
				<div class="col-xs-12"><?php echo do_shortcode('[eo_calendar]'); ?></div>
			</div>
		</div>
	</div>
</div>
<div id="top_news" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12">
				<div class="col-md-9 col-xs-9 border-heading"><h1>お知らせ<small>NEWS</small></h1></div>
				<div class="col-md-3 col-xs-3 panel"><a href="category/news/">お知らせ一覧</a></div>
				<div class="col-xs-12 topcontents">
					<?php
					$posts = get_posts(array(
						'posts_per_page' => 5, // 表示件数
						'category' => '1' // カテゴリIDもしくはスラッグ名
					));
					?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
		
					<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<p><?php the_time('Y年m月d日'); ?></p>
					<hr>
					<?php endforeach; endif; ?>
				</div>
			</div>
			<div class="col-md-4 col-xs-12">
				<div class="col-xs-12 border-heading"><h1>FACEBOOK<small>SNS</small></h1></div>
				<div id=fb_page_plugin_area class="col-xs-12 topcontents "><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTETTO.KAMAISHI%2F&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=446470172126262" height="500px" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true" ></iframe></div>
			</div>
		</div>
	</div>
</div>

<div id="top_info" class="section">
	<div class="container">
		<div class="row">
		<div class="col-md-10 col-xs-9 border-heading"><h1>施設案内<small>INFORMATION</small></h1></div>
		<div class="col-md-2 col-xs-3 panel">施設一覧</div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
			<div class="col-md-4 col-sm-4 col-xs-12"><img src="https://placehold.jp/400x200.png" alt="" /></div>
		</div>
	</div>
</div>

<div id=map>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.5590088419099!2d141.8795328705996!3d39.27304500582029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f30!3m3!1m2!1s0x5f860e907efccc75%3A0x9df2a78fa9d69e33!2z44CSMDI2LTAwMjQg5bKp5omL55yM6Yec55-z5biC5aSn55S677yR5LiB55uu77yRIOmHnOefs-W4guawkeODm-ODvOODqw!5e0!3m2!1sja!2sjp!4v1511764773894" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>