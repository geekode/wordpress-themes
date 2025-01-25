<?php
/**
 * Custom template tags for this theme
 *
 * @package Artdigit_Blank
 */

if (!function_exists('artdigit_posted_on')) {
    /**
     * Affiche la date de publication
     */
    function artdigit_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        printf(
            '<span class="posted-on">%s</span>',
            $time_string
        );
    }
}

if (!function_exists('artdigit_posted_by')) {
    /**
     * Affiche l'auteur de l'article
     */
    function artdigit_posted_by() {
        printf(
            '<span class="byline">%s</span>',
            sprintf(
                esc_html_x('par %s', 'post author', 'artdigit-blank'),
                '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
            )
        );
    }
}

if (!function_exists('artdigit_entry_footer')) {
    /**
     * Affiche les catégories, tags et liens de modification
     */
    function artdigit_entry_footer() {
        if ('post' === get_post_type()) {
            $categories_list = get_the_category_list(esc_html__(', ', 'artdigit-blank'));
            if ($categories_list) {
                printf('<span class="cat-links">%s</span>', $categories_list);
            }

            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'artdigit-blank'));
            if ($tags_list) {
                printf('<span class="tags-links">%s</span>', $tags_list);
            }
        }

        if (! is_single() && ! post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        __('Laisser un commentaire<span class="screen-reader-text"> sur %s</span>', 'artdigit-blank'),
                        array('span' => array('class' => array()))
                    ),
                    get_the_title()
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    __('Modifier<span class="screen-reader-text">%s</span>', 'artdigit-blank'),
                    array('span' => array('class' => array()))
                ),
                get_the_title()
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
}

if (!function_exists('artdigit_post_thumbnail')) {
    /**
     * Affiche l'image à la une
     */
    function artdigit_post_thumbnail() {
        if (post_password_required() || is_attachment()) {
            return;
        }

        if (has_post_thumbnail()) {
            ?>
            <div class="post-thumbnail">
                <?php
                if (is_singular()) {
                    the_post_thumbnail('large', array(
                        'alt' => the_title_attribute(array('echo' => false)),
                    ));
                } else {
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        the_post_thumbnail('medium_large', array(
                            'alt' => the_title_attribute(array('echo' => false)),
                        ));
                        ?>
                    </a>
                    <?php
                }
                ?>
            </div>
            <?php
        }
    }
}

if (!function_exists('artdigit_get_picsum_url')) {
    /**
     * Génère une URL Picsum avec les dimensions spécifiées
     */
    function artdigit_get_picsum_url($width = 800, $height = 600) {
        return sprintf('https://picsum.photos/%d/%d', $width, $height);
    }
}