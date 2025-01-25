<?php
/**
 * Template pour les articles individuels
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        
        <div class="entry-meta">
            <?php
            printf(
                __('Publié le %s', 'artdigit-blank'),
                get_the_date()
            );
            ?>
        </div>
    </header>

    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages();
        ?>
    </div>
</article>