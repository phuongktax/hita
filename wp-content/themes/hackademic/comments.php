<br>
<?php $args = array(
	'walker'            => null,
	'order' => 'DESC',
	'limit' =>2,
	'max_depth'         => '',
	'style'             => 'ul',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 32,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
    'echo'              => true     // boolean, default is true
); ?>
<?php wp_list_comments( $args, $comments ); ?> 
<?php echo comment_form();  
comments_template(); ?>
<br>
