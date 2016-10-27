<?php
//phần admin của nhân begin 
 //hiển thị thêm tên khóa học và ngày bắt đầu trong admin
add_filter( 'manage_edit-khoa-hoc-lap-trinh_columns', 'my_edit_course_columns' ) ;

function my_edit_course_columns( $columns ) {
	$new = array('coursename' => __( 'Tên Khóa Học' ),
		'startingdate' => __( 'Ngày Bắt Đầu' ),);
	$add = array_slice($columns,0,2,true)+$new+array_slice($columns,2,count($columns),true);	

	return $add;
}

add_action( 'manage_khoa-hoc-lap-trinh_posts_custom_column', 'my_manage_course_columns', 10, 2 );

function my_manage_course_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'duration' column. */
		case 'coursename' :

			/* Get the post meta. */
			$coursename = get_post_meta( $post_id, 'coursename', true );
			
			if ( empty( $coursename ) )
				echo __( 'Unknown' );
			
			else
				printf( $coursename );

			break;

		
		case 'startingdate' :

			/* Get the post meta. */
			$startingdate = get_post_meta( $post_id, 'startingdate', true );

			if ( empty( $startingdate ) )
				echo __( 'Unknown' );

			else
				
				printf( __( '%s' ), $startingdate );

			break;

		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
} 

//hiển thị thêm cột cho phần tin tuyển dụng
add_filter( 'manage_edit-tuyen-dung-viec-lam_columns', 'my_edit_recruitment_columns' ) ;

function my_edit_recruitment_columns( $columns ) {
	$new = array('companyname' => __( 'Tên Công Ty' ),
		'deadline' => __( 'Hạn Nộp Hồ Sơ' ),);
	$add = array_slice($columns,0,2,true)+$new+array_slice($columns,2,count($columns),true);	

	return $add;
}

add_action( 'manage_tuyen-dung-viec-lam_posts_custom_column', 'my_manage_recruitment_columns', 10, 2 );

function my_manage_recruitment_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'duration' column. */
		case 'companyname' :

			/* Get the post meta. */
			$companyname = get_post_meta( $post_id, 'companyname', true );
			
			if ( empty( $companyname ) )
				echo __( 'Unknown' );
			
			else
				printf( $companyname );

			break;

		
		case 'deadline' :

			/* Get the post meta. */
			$deadline = get_post_meta( $post_id, 'deadline', true );

			if ( empty( $deadline ) )
				echo __( 'Unknown' );

			else
				
				printf( __( '%s' ), $deadline );

			break;

		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
} 


//filter cho admin, action sẽ dc thực hiện trong file wp-admin\includes\class-wp-posts-list-table

 add_action( 'restrict_manage_posts', 'wpse45436_admin_posts_filter_restrict_manage_posts',10,3 );
/**
 * First create the dropdown
 * make sure to change POST_TYPE to the name of your custom post type
 * 
 * 
 * @return void
 */
function wpse45436_admin_posts_filter_restrict_manage_posts($ptype, $key,$filter){
     $type = 'post';
    if (isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
    }
    //only add filter to post type you want
    if ($ptype == $type ){
        //change this to the list of values you want to show
        //in 'label' => 'value' format
		global $wpdb;
		
		$sql = "SELECT Distinct(meta_value) FROM  wp_postmeta  WHERE meta_key='{$key}'";
		$name = $wpdb->get_col( $sql);
		$arr = array_values($name);
		$result=array_combine($arr,$arr);
        $resutl;
        ?>
        <select name="ADMIN_FILTER_FIELD_VALUE">
        <option value=""><?php _e($filter, 'wose45436');?></option>
        <?php
            $current_v = isset($_GET['ADMIN_FILTER_FIELD_VALUE'])? $_GET['ADMIN_FILTER_FIELD_VALUE']:'';
            foreach ($result as $label => $value) {
                printf
                    (
                        '<option value="%s"%s>%s</option>',
                        $value,
                        $value == $current_v? ' selected="selected"':'',
                        $label
                    );
                }
        ?>
        </select>
        <?php
		$variable;
		$name1;
		if($ptype=='khoa-hoc-lap-trinh'){
			$variable='startingdate';
			$name1='lọc theo ngày bắt đầu';
		}
		else{
			$variable='deadline';
			$name1='lọc theo hạn nộp';
		}
		$sql = "SELECT Distinct(meta_value) FROM  wp_postmeta  WHERE meta_key='{$variable}'";
		$name = $wpdb->get_col( $sql);
		$arr = array_values($name);
		$result=array_combine($arr,$arr);
        $resutl;
        ?>
        <select name="ngay">
        <option value=""><?php _e($name1, 'wose45436');?></option>
        <?php
            $current_v = isset($_GET['ngay'])? $_GET['ngay']:'';
            foreach ($result as $label => $value) {
                printf
                    (
                        '<option value="%s"%s>%s</option>',
                        $value,
                        $value == $current_v? ' selected="selected"':'',
                        $label
                    );
                }
        ?>
        </select>
		
		
        <?php
    }
}



add_filter( 'restrict_manage_posts', 'wpse45436_posts_filter' );
/**
 * if submitted filter by post meta
 * 
 * make sure to change META_KEY to the actual meta key
 * and POST_TYPE to the name of your custom post type
 * @param  (wp_query object) $query
 * 
 * @return Void
 */
function wpse45436_posts_filter( $query ){
    global $pagenow;
    $type = 'post';
    if (isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
    }
	
    if ( 'khoa-hoc-lap-trinh' == $type && is_admin() && $pagenow=='edit.php' && ((isset($_GET['ADMIN_FILTER_FIELD_VALUE']) && $_GET['ADMIN_FILTER_FIELD_VALUE'] != '') || (isset($_GET['ngay']) && $_GET['ngay'] != ''))) {
       query_posts( array(
       'post_type' => 'khoa-hoc-lap-trinh',
       'meta_query' => array(
        array(
         'key' => 'startingdate',
         'value' => ''.$_GET['ngay'].'',
         'compare' => 'LIKE',
         //'type' => 'numeric',
        ),
        array(
         'key' => 'classname',
         'value' => ''.$_GET['ADMIN_FILTER_FIELD_VALUE'].'',
         'compare' => 'LIKE'
        )
       )
      ) );
    }
}




add_filter( 'restrict_manage_posts', 'jobname_filter' );
function jobname_filter( $query ){
   global $pagenow;
    $type = 'post';
    if (isset($_GET['post_type'])) {
        $type = $_GET['post_type'];
    }
    if ( 'tuyen-dung-viec-lam' == $type && is_admin() && $pagenow=='edit.php' && ((isset($_GET['ADMIN_FILTER_FIELD_VALUE']) && $_GET['ADMIN_FILTER_FIELD_VALUE'] != '') || (isset($_GET['ngay']) && $_GET['ngay'] != ''))) {
       query_posts( array(
       'post_type' => 'tuyen-dung-viec-lam',
       'meta_query' => array(
        array(
         'key' => 'deadline',
         'value' => ''.$_GET['ngay'].'',
         'compare' => 'LIKE',
         //'type' => 'numeric',
        ),
        array(
         'key' => 'jobname',
         'value' => ''.$_GET['ADMIN_FILTER_FIELD_VALUE'].'',
         'compare' => 'LIKE'
        )
       )
      ) );
    }
}

// end hết phần admin của nhân
 
/**
  * Thiết lập các hằng dữ liệu quan trọng
  * THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  * CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );
 
/**
  * Load file /core/init.php
  * Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/
 
  require_once( CORE . '/init.php' );
 
 /**
  * Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
  **/
  if ( ! isset( $content_width ) ) {
        /*
         * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
         */
        $content_width = 620;
   }
 
/**
  * Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'hackademic_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm hackademic_theme_setup() thì sẽ tạo mới hàm đó
         */
        function hackademic_theme_setup() {
                /*
                 * Thiết lập theme có thể dịch được
                 */
                $language_folder = THEME_URL . '/languages';
                load_theme_textdomain( 'hackademic', $language_folder );
 
                /*
                 * Tự chèn RSS Feed links trong <head>
                 */
                add_theme_support( 'automatic-feed-links' );
 
                /*
                 * Thêm chức năng post thumbnail
                 */
                add_theme_support( 'post-thumbnails' );
 
                /*
                 * Thêm chức năng title-tag để tự thêm <title>
                 */
                add_theme_support( 'title-tag' );
 
                /*
                 * Thêm chức năng post format
                 */
                add_theme_support( 'post-formats',
                        array(
                                'video',
                                'image',
                                'audio',
                                'gallery',
                                // 'course',
                                // 'recruitment'
                        )
                 );
 
                /*
                 * Thêm chức năng custom background
                 */
                $default_background = array(
                        'default-color' => '#e8e8e8',
                );
                add_theme_support( 'custom-background', $default_background );
 
                /*
                 * Tạo menu cho theme
                 */
                 register_nav_menu ( 'primary-menu', __('Primary Menu', 'hackademic') );
 
                /*
                 * Tạo sidebar cho theme
                 */
                 $sidebar = array(
                    'name' => __('Main Sidebar', 'hackademic'),
                    'id' => 'main-sidebar',
                    'description' => 'Main sidebar for hackademic theme',
                    'class' => 'main-sidebar',
                    'before_title' => '<h3 class="widgettitle">',
                    'after_sidebar' => '</h3>'
                 );
                 register_sidebar( $sidebar );
        }
        add_action ( 'init', 'hackademic_theme_setup' );
 
  }

/**
* Thiết lập hàm hiển thị logo
* hackademic_logo()
**/
if ( ! function_exists( 'hackademic_logo' ) ) {
  function hackademic_logo() {?>
    <div class="logo">
 
      <div class="site-name">
        <?php if ( is_home() ) {
          printf(
            '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } else {
          printf(
            '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } // endif ?>
      </div>
      <div class="site-description"><?php bloginfo( 'description' ); ?></div>
 
    </div>
  <?php }
}
 
/**
* Thiết lập hàm hiển thị menu
* hackademic_menu( $slug )
**/
if ( ! function_exists( 'hackademic_menu' ) ) {
  function hackademic_menu( $slug ) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu( $menu );
  }
}

/**
* Tạo hàm phân trang cho index, archive.
* Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
* hackademic_pagination()
**/
if ( ! function_exists( 'hackademic_pagination' ) ) {
  function hackademic_pagination() {
    /*
     * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
     */
    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
      return '';
    }
  ?>
 
  <nav class="pagination" role="navigation">
    <?php if ( get_next_post_link() ) : ?>
      <div class="prev"><?php next_posts_link( __('Older Posts', 'hackademic') ); ?></div>
    <?php endif; ?>
 
    <?php if ( get_previous_post_link() ) : ?>
      <div class="next"><?php previous_posts_link( __('Newer Posts', 'hackademic') ); ?></div>
    <?php endif; ?>
 
  </nav><?php
  }
}

/**
* Hàm hiển thị ảnh thumbnail của post.
* Ảnh thumbnail sẽ không được hiển thị trong trang single
* Nhưng sẽ hiển thị trong single nếu post đó có format là Image
* hackademic_thumbnail( $size )
**/
if ( ! function_exists( 'hackademic_thumbnail' ) ) {
  function hackademic_thumbnail( $size ) {
    // Chỉ hiển thumbnail với post không có mật khẩu
    if ( ! is_single() &&  has_post_thumbnail()  && ! post_password_required() || has_post_format( 'image' ) ) : ?>
      <figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
    endif;
  }
}
 
/**
* Hàm hiển thị tiêu đề của post trong .entry-header
* Tiêu đề của post sẽ là nằm trong thẻ <h1> ở trang single
* Còn ở trang chủ và trang lưu trữ, nó sẽ là thẻ <h2>
* hackademic_entry_header()
**/
if ( ! function_exists( 'hackademic_entry_header' ) ) {
  function hackademic_entry_header() {
    if ( is_single() ) : ?>
 
      <h1 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h1>
    <?php else : ?>
      <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
          <?php the_title(); ?>
        </a>
      </h2><?php
 
    endif;
  }
}
 
/**
* Hàm hiển thị thông tin của post (Post Meta)
* hackademic_entry_meta()
**/
if( ! function_exists( 'hackademic_entry_meta' ) ) {
  function hackademic_entry_meta() {
    if ( ! is_page() ) :
      echo '<div class="entry-meta">';
 
        // Hiển thị tên tác giả, tên category và ngày tháng đăng bài
        printf( __('<span class="author">Posted by %1$s</span>', 'hackademic'),
          get_the_author() );
 
        printf( __('<span class="date-published"> at %1$s</span>', 'hackademic'),
          get_the_date() );
 
        printf( __('<span class="category"> in %1$s</span>', 'hackademic'),
          get_the_category_list( ', ' ) );
 
        // Hiển thị số đếm lượt bình luận
        if ( comments_open() ) :
          echo ' <span class="meta-reply">';
            comments_popup_link(
              __('Leave a comment', 'hackademic'),
              __('One comment', 'hackademic'),
              __('% comments', 'hackademic'),
              __('Read all comments', 'hackademic')
             );
          echo '</span>';
        endif;
      echo '</div>';
    endif;
  }
}
 
/*
 * Thêm chữ Read More vào excerpt
 */
function hackademic_readmore() {
  return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'hackademic') . '</a>';
}
add_filter( 'excerpt_more', 'hackademic_readmore' );
 
  /**
  * Hàm hiển thị nội dung của post type
  * Hàm này sẽ hiển thị đoạn rút gọn của post ngoài trang chủ (the_excerpt)
  * Nhưng nó sẽ hiển thị toàn bộ nội dung của post ở trang single (the_content)
  * hackademic_entry_content()
  **/
  if ( ! function_exists( 'hackademic_entry_content' ) ) {
    function hackademic_entry_content() {
 
      if ( ! is_single() ) :
        the_excerpt();
      else :
        the_content();
 
        /*
         * Code hiển thị phân trang trong post type
         */
        $link_pages = array(
          'before' => __('<p>Page:', 'hackademic'),
          'after' => '</p>',
          'nextpagelink'     => __( 'Next page', 'hackademic' ),
          'previouspagelink' => __( 'Previous page', 'hackademic' )
        );
        wp_link_pages( $link_pages );
      endif;
 
    }
  }
 
  /**
* Hàm hiển thị tag của post
* hackademic_entry_tag()
**/
if ( ! function_exists( 'hackademic_entry_tag' ) ) {
  function hackademic_entry_tag() {
    if ( has_tag() ) :
      echo '<div class="entry-tag">';
      printf( __('Tagged in %1$s', 'hackademic'), get_the_tag_list( '', ', ' ) );
      echo '</div>';
    endif;
  }
}


// Bootstrap pagination function
 
function custom_pagination() {
    global $wp_query;
    $big = 999999999;
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?page=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type' => 'array',
        'prev_next' => TRUE,
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;',
            ));
    if (is_array($pages)) {
        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="pagination hidden-sm-down">';
        foreach ($pages as $i => $page) {
            if ($current_page == 1 && $i == 0) {
                echo "<li class='page-item active'>$page</li>";
            } else {
                if ($current_page != 1 && $current_page == $i) {
                    echo "<li class='page-item active'>$page</li>";
                } else {
                    echo "<li class='page-item'>$page</li>";
                }
            }
        }
        echo '</ul>';
    }
}

add_action( 'parse_query','changept' );
function changept() {
  if( is_category() && !is_admin() ){
    set_query_var( 'post_type', array( 'post', 'khoa-hoc-lap-trinh' ) );
  }
  return;
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function tag_cloud_widgets_init() {

    register_sidebar(array(
        'name' => 'Từ Khóa Nổi Bật',
        'id' => 'tag_cloud',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'tag_cloud_widgets_init');


function cut_string($text, $chars_limit) { // Function name ShortenText
  
  $chars_text = strlen($text);
  $text = $text." ";
  $text = substr($text,0,$chars_limit);
  $text = substr($text,0,strrpos($text,' '));
  if ($chars_text > $chars_limit)
    return $text;
} 
 

add_action( 'pre_get_posts', function($q) { 
    if( !is_admin() && $q->is_main_query() && !$q->is_tax() &&is_category() ) { 
        $q->set ('post_type', array( 'post', 'tuyen-dung-viec-lam' ) ); 
        $q->set ('posts_per_page', 10 );
    } 
}); 

function mark($label) { 
    $label_class = 'label-danger';
    switch ($label) {
      case 'TREND':
        $label_class = 'label-warning';
        break;
      case 'NEW':
        $label_class = 'label-success';
        break;
      case 'PICKUP':
        $label_class = 'label-danger';
        break;
      case 'RECOMMENDED':
        $label_class = 'label-primary';
        break;
      case 'SPECIAL':
        $label_class = 'label-info';
        break;
      
      default:
        $label_class = 'label-danger';
        break;
    }
    $text = '<div class="mark-label"><span class="label '.$label_class.'">'.$label.'</span></div>';
    return $text;
} 


function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class'); 