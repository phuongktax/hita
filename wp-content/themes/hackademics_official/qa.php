
<?php
$content = get_the_content();
if (!$content) {
  $content1 = get_option( 'qa_setting_default_answer');
} else {
  //the_content();
  //echo "câu trả lời";
  $content1=$content;
};
?>
<div class="box_faq_detail">
  <p class="tit_question">Q: <?php the_title(); ?></p>
  <p class="tit_answer">A: <?php echo $content1;?></p>
</div>

