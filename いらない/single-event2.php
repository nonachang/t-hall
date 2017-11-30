<aside id="aside">
    <?php
     $events = eo_get_events([
             'numberposts'=>100, // イベントの投稿表示件数
             'event_start_after'=>'2017-12-01', // いつからイベントの投稿を一覧で表させるか
             'showpastevents'=>true,
        ]);

      if($events):
         echo '<ul>';
         foreach ($events as $event):
              //Check if all day, set format accordingly
              $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format') );
              $meta_values = get_post_meta($event->ID, 'pickup',true);
              if($meta_values=='1'){
              printf(
                 '<li>%s<a href="%s"> %s </a> %s </li>',
				 get_the_post_thumbnail($event->ID, 'medium'),
                 get_permalink($event->ID),
                 get_the_title($event->ID),
                 eo_get_the_start($format, $event->ID,null,$event->occurrence_id)

              );}
         endforeach;
         echo '</ul>';
      endif;
     ?>
</aside>
