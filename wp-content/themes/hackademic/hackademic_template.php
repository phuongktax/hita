<?php
/**
 * Template Name: Hackademic Front Page
 *
 */
get_header(); ?>
    <div id="container_full">
        <?php echo do_shortcode('[responsive-slider id=412]'); ?>
        <?php echo do_shortcode('[page-content-sc id=""]'); ?>
        </div>
    </div>
    <div id="co-so-vat-chat" class="ts-section-title1 companies-cloud-top text-xs-center">
        <h3>CƠ SỞ VẬT CHẤT</h3>
    </div>
    <?php echo do_shortcode('[responsive-slider id=411]'); ?>
</div>
 <?php //wd_slider(2); ?>
<?php get_footer(); ?>

