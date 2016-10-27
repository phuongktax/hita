<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
                <?php hackademic_entry_header(); ?>
        </header>
        <div class="entry-content">
                <?php the_content(); ?>
                <?php
                        if ( is_single() ) :
                                hackademic_entry_tag();
                        endif;
                ?>
        </div>
</article>