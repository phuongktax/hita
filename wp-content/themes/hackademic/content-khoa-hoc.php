<?php 

$course =  get_the_ID();
$args = array (
    'post_type'     => 'lop-hoc',
    'showposts'     => 1,
    'meta_query'    => array (
        array ('key'   => 'course', 'value' => $course)
    )
);

$the_query = new WP_Query( $args );

if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) :
        $the_query->the_post();
        $class = get_field('class_name');
        $start_date = get_field('start');
        $studyhour = get_field('giohoc');
        $timetable = get_field('lichhoc');
		$discount =  get_post_meta($post->ID, 'discount', true);
    endwhile;
endif;
wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
?>

<div class="card">
    <div class="card-block">
        <?php echo mark(get_field( 'mark')); ?>
        <?php if(isset($discount)): ?>
            <!-- <div class="ribbon"><span>Khuyến Mãi</span></div> -->
        <?php endif ?>
        <img class="card-img-top"  src="<?php echo get_field( 'pic');?>" alt="Logo khóa học">
        <h4 class="card-title"><a href="<?php the_permalink() ;?>"><?php echo $post->post_title; ?></a></h4>
        <h6 class="card-subtitle text-muted"><?php echo get_field( 'short_description');?></h6>
        <p class="card-text"></p>
        <ul class="list-group list-group-flush">
            <?php if(isset($class) && isset($start_date)): ?>
            <li class="list-group-item">Lớp đang chiêu sinh: <?php echo $class;?><br>Khai giảng: <?php echo $start_date;?></li>
            <?php endif ?>
            <li class="list-group-item">Học phí: <?php echo get_field( 'fee');?>
			<?php if(isset($discount)): ?>
                <sup><span class="label-pill label-danger"><i class="fa fa-tags"></i> Khuyến Mãi</span></sup>
            <?php endif ?>
            </li>
        </ul>
        <div class="text-xs-center">
            <form action="<?php echo get_bloginfo('url')?>/lien-he" method="post" accept-charset="utf-8">
                <input type="hidden" name="foo"  value="Đăng ký khóa học: <?php the_title();?>">
                <input type="hidden" name="course"  value="<?php the_title();?>">
                <div class="course">
                    <div class="btn-group" role="group" aria-label="...">
                        <input name="submit" type="submit" id="comment_submit" class="btn btn-info" value="Đăng ký học"/>
                        <a class="btn btn-primary" href="<?php the_permalink() ;?>" role="button">CHI TIẾT</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>