<?php
/**
 * Fallback for classic WordPress
 * Block themes should use index.html, but this file is required as fallback
 *
 * @package H2_Supply
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Block themes use index.html, redirect to proper template
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p>Ingen innhold funnet.</p>
            <?php
        endif;
        ?>
        
    </main>
</div>

<?php
get_footer();
