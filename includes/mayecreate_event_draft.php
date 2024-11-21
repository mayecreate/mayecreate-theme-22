<?php

// expire offer posts on date field.
if (!wp_next_scheduled('expire_posts')){
    wp_schedule_event(time(), 'hourly', 'expire_posts'); // this can be hourly, twicedaily, or daily
  }
  
  add_action('expire_posts', 'expire_posts_function');
  
  function expire_posts_function() {
      $today = date('Ymd');
      $args = array(
          'post_type' => array('mc-event'), // post types you want to check
          'posts_per_page' => -1 
      );
      $posts = get_posts($args);
      foreach($posts as $p){
          $expire_date = get_field('event_expiration_date', $p->ID); // get the raw date from the db
          $expiredate = date("Ymd", strtotime($expire_date));
          if ($expiredate) {
              if($expiredate < $today){ 
                  $postdata = array(
                      'ID' => $p->ID,
                      'post_status' => 'draft'
                  );
                  wp_update_post($postdata);
              }
          }
      }
  }