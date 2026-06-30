<?php
/**
 * Title: Manifiesto comunidad
 * Slug: wpgranada26/manifest-comunidad
 * Categories: wpgranada
 * Description: Sección de dos columnas con texto a la izquierda e imagen a la derecha.
 * Keywords: comunidad, manifiesto, dos columnas, imagen
 */
?>
<!-- wp:columns {"metadata":{"categories":["wpgranada"],"patternName":"wpgranada26/manifest-comunidad","name":"Manifiesto comunidad"},"className":"alignwide manifest-section","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns alignwide manifest-section" style="padding-top:4rem;padding-bottom:4rem;padding-left:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"center","width":"45%","className":"manifest-col-text"} -->
<div class="wp-block-column is-vertically-aligned-center manifest-col-text" style="flex-basis:45%"><!-- wp:paragraph {"className":"is-style-textos-secundarios"} -->
<p class="is-style-textos-secundarios">¿Qué es WordPress Granada?</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Una comunidad local para aprender y compartir experiencias reales en WordPress</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"manifest-col-image"} -->
<div class="wp-block-column is-vertically-aligned-center manifest-col-image" style="flex-basis:55%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"has-custom-border wpgranada-img-tilted","style":{"border":{"radius":"20px"}}} -->
<figure class="wp-block-image size-full has-custom-border wpgranada-img-tilted"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-hero.png" alt="Comunidad WordPress Granada" style="border-radius:20px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
