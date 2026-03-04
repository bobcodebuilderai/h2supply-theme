<?php
/**
 * Title: Hydrogen Hero
 * Slug: h2supply/hero-hydrogen
 * Categories: h2supply-hero
 * Viewport width: 1400
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.jpg","dimRatio":70,"overlayColor":"gray-900","minHeight":700,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"className":"hero-hydrogen"} -->
<div class="wp-block-cover alignfull hero-hydrogen" style="min-height:700px;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <span aria-hidden="true" class="wp-block-cover__background has-gray-900-background-color has-background-dim-70 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="Hydrogen facility" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-bg.jpg" data-object-fit="cover"/>
    
    <div class="wp-block-cover__inner-container">
        
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
        <div class="wp-block-group">
            
            <!-- wp:heading {"textAlign":"center","level":1,"style":{"color":{"text":"var:preset|color|white"},"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)","fontWeight":"700","lineHeight":"1.1"}},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}} -->
            <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:clamp(2.5rem, 5vw, 4rem);font-weight:700;line-height:1.1">Hydrogen on demand</h1>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|gray-200"},"typography":{"fontSize":"1.25rem","lineHeight":"1.6"}},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}} -->
            <p class="has-text-align-center has-gray-200-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:1.25rem;line-height:1.6">Sertifiserte hydrogen-generatorer for sone 1 og 2. Eliminer behovet for H2-flasker med on-demand produksjon.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"spacing":{"blockGap":"var:preset|spacing|30"}} -->
            <div class="wp-block-buttons">
                
                <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"0.5rem"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"typography":{"fontWeight":"600"}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill">
                    <a class="wp-block-button__link wp-element-button has-white-color has-primary-background-color has-text-color has-background" style="border-radius:0.5rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-weight:600">Utforsk løsninger</a>
                </div>
                <!-- /wp:button -->
                
                
                <!-- wp:button {"textColor":"white","style":{"border":{"radius":"0.5rem","width":"2px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"typography":{"fontWeight":"600"},"color":{"border":"var:preset|color|white"}},"className":"is-style-outline"} -->
                <div class="wp-block-button is-style-outline">
                    <a class="wp-block-button__link wp-element-button has-white-color has-text-color" style="border-width:2px;border-radius:0.5rem;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50);font-weight:600">Kontakt oss</a>
                </div>
                <!-- /wp:button -->
                
            </div>
            <!-- /wp:buttons -->
            
        </div>
        <!-- /wp:group -->
        
    </div>
</div>
<!-- /wp:cover -->