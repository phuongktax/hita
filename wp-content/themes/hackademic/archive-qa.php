
<?php
// function qa_output_normal() {
  global $wp_query;
    if ( get_query_var('paged') ) {
      $paged = get_query_var('paged');
    } else if ( get_query_var('page') ) {
      $paged = get_query_var('page');
    } else {
      $paged = 1;
    }
    $args = array(
      'post_type' => 'qa',
      'post_status' => 'publish',
      'paged' => $paged,
      'orderby' => 'date',
      'posts_per_page' => get_option( 'qa_setting_number_qa', 5 )
    );
    query_posts($args); ?>
    <div>
    <ul class='akkordeon'>
    <?php while ( have_posts() ) : the_post();
      $allterms = get_the_terms(get_the_ID(), "qatag");
        if(!empty($allterms))
        {
          $i = 0;
          foreach($allterms as $term)
          {
            $qa_tags = $term->name;
            $i++;
            if($i != count($allterms))
            {
              echo " ";
            }
          }
        }
        ?>
      <li class="<?php echo $qa_tags; ?>" style="border-bottom:1px solid #fff;">
        <p>
          <?php
            $customs = get_post_custom(get_the_ID());
            $username = ($customs['qa_username'][0]);
            
            if ($username) {
              echo $username; 
            } else {
              echo __('Anonymous', 'qa-plugin');
            }
          ?>
        <span class="date">
          <?php
          $allterms = get_the_terms(get_the_ID(), "qatag");

          if(!empty($allterms))
          {
            $i = 0;
            foreach($allterms as $term)
            {
              echo "<strong>" . $term->name . "</strong>";
              $i++;
              if($i != count($allterms))
              {
                echo ", ";
              }
            }
            echo " - ";
          }
          ?>
          <?php the_time('j F Y'); ?>
        </span>
        <br />
        <?php the_title(); ?>
        </p>
        <div>
          <?php 
            $content = get_the_content();
            if (!$content) {
              echo get_option( 'qa_setting_default_answer');
            } else {
              echo $content;
            };
          ?>
        </div>
      </li>
    <?php endwhile; ?>
    </ul>
    <?php qa_pagination($wp_query->max_num_pages); ?>
  </div>
  <?php
  wp_reset_query();
// }
?>
<?php
    // $type = 'nhan-su';
    // // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // $args=array(
    // 'post_type' => $type,
    // 'post_status' => 'publish',
    // // 'paged' => $paged,
    // 'posts_per_page' => -1,
    // 'caller_get_posts'=> 1
    // );
    // $temp = $wp_query;  // assign original query to temp variable for later use
    // $wp_query = null;
    // $wp_query = new WP_Query();
    // $wp_query->query($args);
   // qa_output_normal();
?>