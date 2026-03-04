<?php
/**
 * Title: Project Card
 * Slug: h2supply/project-card
 * Categories: h2supply-content
 * Viewport width: 400
 */
?>

<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"0.75rem"},"shadow":"var:preset|shadow|md"},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:0.75rem;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;box-shadow:var(--wp--preset--shadow--md)">
    
    <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"240px","style":{"border":{"radius":{"topLeft":"0.75rem","topRight":"0.75rem","bottomLeft":"0px","bottomRight":"0px"}}}} /-->
    
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
        
        <?php
        $kunde = get_field( 'kunde' );
        $lokasjon = get_field( 'lokasjon' );
        $aar = get_field( 'aar' );
        ?>
        
        
        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"gray-900"} /-->
        
        
        <?php if( $kunde ) : ?>
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"gray-500"} -->
            <p class="has-gray-500-color has-text-color" style="margin-bottom:0;font-size:0.875rem">Kunde: <?php echo esc_html( $kunde ); ?></p>
            <!-- /wp:paragraph -->
        <?php endif; ?>
        
        
        <?php if( $lokasjon ) : ?>
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"bottom":"0"}}},"textColor":"gray-500"} -->
            <p class="has-gray-500-color has-text-color" style="margin-bottom:0;font-size:0.875rem">Lokasjon: <?php echo esc_html( $lokasjon ); ?></p>
            <!-- /wp:paragraph -->
        <?php endif; ?>
        
        
        <?php if( $aar ) : ?>
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color" style="margin-top:var(--wp--preset--spacing--20);font-size:0.875rem"><strong><?php echo esc_html( $aar ); ?></strong></p>
            <!-- /wp:paragraph -->
        <?php endif; ?>
        
    </div>
    <!-- /wp:group -->
    
</div>
<!-- /wp:group -->