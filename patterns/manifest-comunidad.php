<?php
/**
 * Title: Manifiesto comunidad
 * Slug: wpgranada26/manifest-comunidad
 * Categories: wpgranada
 * Description: Sección de dos columnas con texto a la izquierda e imagen a la derecha.
 * Keywords: comunidad, manifiesto, dos columnas, imagen
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"},"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns alignwide manifest-section">

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center manifest-col-text">

        <!-- wp:paragraph {"className":"is-style-textos-secundarios"} -->
        <p class="is-style-textos-secundarios">¿Qué es WordPress Granada?</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading -->
        <h2 class="wp-block-heading">Una comunidad local para aprender y compartir experiencias reales en WordPress</h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center manifest-col-image">

        <!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"20px"}}} -->
        <figure class="wp-block-image size-full has-custom-border wpgranada-img-tilted"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/comunidad-local.webp" alt="Comunidad WordPress Granada"/></figure>
        <!-- /wp:image -->

    </div>
    <!-- /wp:column -->

</div>
<!-- /wp:columns -->
