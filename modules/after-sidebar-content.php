<div class="side_news"><h2>お知らせ</h2><p>NEWS</p>
<?php
					$posts = get_posts(array(
						'posts_per_page' => 5, // 表示件数
						'category' => '1' // カテゴリIDもしくはスラッグ名
					));
					?>
					<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

					<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					<p><?php the_time('Y/m/d') ?></p>
					<?php endforeach; endif; ?>
</div>

<div class="side_sns"><h2>FACEBOOK</h2><p>SNS</p>
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTETTO.KAMAISHI%2F&tabs=timeline&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=446470172126262" height="500px" width="100%" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true" ></iframe>
</div>
