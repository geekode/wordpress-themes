<?php
/**
 * Template quand aucun contenu n'est trouvé
 */
?>
<section class="no-results">
    <header class="page-header">
        <h1 class="page-title"><?php _e('Aucun contenu trouvé', 'artdigit-blank'); ?></h1>
    </header>

    <div class="page-content">
        <?php if (is_search()): ?>
            <p><?php _e('Désolé, aucun résultat ne correspond à vos critères de recherche.', 'artdigit-blank'); ?></p>
        <?php else: ?>
            <p><?php _e('Aucun contenu à afficher pour le moment.', 'artdigit-blank'); ?></p>
        <?php endif; ?>
    </div>
</section>