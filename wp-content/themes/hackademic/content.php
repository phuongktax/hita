<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-thumbnail">
                        <?php hackademic_thumbnail('thumbnail'); ?>
        </div>
        <header class="entry-header">
                        <?php hackademic_entry_header(); ?>
                        <?php hackademic_entry_meta() ?>
        </header>
                <div class="entry-content">
                        <?php hackademic_entry_content(); ?>
                        <?php ( is_single() ? hackademic_entry_tag() : '' ); ?>
                </div>
</article>