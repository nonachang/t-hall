<?php
if(get_field('event_date')!=null){
  $get_date = get_field('event_date');
  $datetime = date_create($get_date);
  $week = array("日", "月", "火", "水", "木", "金", "土");
  $w = (int)date_format($datetime, 'w');
  $youbi = $week[$w];
  }
?>
<?php the_meta(); ?>
<div class="event_detail col-md-12">
<?php the_post_thumbnail('large'); ?>
<h3>イベント概要</h3>
<?php the_field('evnet_description'); ?>
<p>【出演】</p>
<?php the_field('event_performance'); ?>
<p>【プログラム】</p>
<?php the_field('event_programme'); ?>

<div class="col-md-3">開催日</div>
<div class="col-md-9"><?php echo date('Y年n月j日', strtotime($get_date)); ?>（<?php echo $youbi?>）</div>
<div class="col-md-3">開催時間</div>
<div class="col-md-9"><?php echo get_post_meta(get_the_ID(), 'event_time', true); ?></div>
<?php if(get_post_meta(get_the_ID(), 'event_open', true)!=null)
{?>
  <div class="col-md-3">開場時間</div>
  <div class="col-md-9"><?php echo get_post_meta(get_the_ID(), 'event_open', true); ?></div>
<?php } ?>
<div class="col-md-3">会場</div>
<div class="col-md-9"><?php the_field('event_place'); ?></div>
<div class="col-md-3">料金</div>
<div class="col-md-9"><?php the_field('event_ticket'); ?></div>
<div class="col-md-3">プレイガイド</div>
<div class="col-md-9"><?php the_field('playguide'); ?></div>
<div class="col-md-3">お問い合わせ</div>
<div class="col-md-9"><?php the_field('event_info'); ?></div>
<div class="col-md-3">主催</div>
<div class="col-md-9"><?php echo get_post_meta(get_the_ID(), 'event_sponsor', true); ?><br><?php the_field('event_other'); ?></div>
</div>
