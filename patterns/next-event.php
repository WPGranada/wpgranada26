<?php
/**
 * Title: Próximo Evento
 * Slug: wpgranada26/next-event
 * Categories: wpgranada
 * Description: Sección de próximo evento con tarjeta horizontal que incluye imagen y contenido.
 * Keywords: evento, meetup, próximo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|100","right":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
		<p class="has-primary-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.1em">PRÓXIMO EVENTO</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"huge","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-heading-font-family has-huge-font-size">No te lo pierdas</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:media-text {"align":"","mediaPosition":"left","mediaType":"image","mediaWidth":46,"verticalAlignment":"center","imageFill":true,"className":"next-event-card"} -->
	<div class="wp-block-media-text is-stacked-on-mobile is-vertically-aligned-center is-image-fill next-event-card">
		<figure class="wp-block-media-text__media" style="background-image:url();background-position:50% 50%"><img src="" alt="<?php esc_attr_e( 'Imagen del próximo evento', 'wpgranada26' ); ?>" /></figure>
		<div class="wp-block-media-text__content">

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.625rem","bottom":"0.625rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;padding-top:0.625rem;padding-right:1.25rem;padding-bottom:0.625rem;padding-left:1.25rem">
					<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} -->
					<p class="has-base-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700">15 MAR 2026 • 19:00</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large","fontFamily":"heading"} -->
				<h3 class="wp-block-heading has-heading-font-family has-xx-large-font-size" style="line-height:1.2">Las ventajas de tener una IA Local</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-tertiary-color has-text-color has-body-font-family has-medium-font-size" style="line-height:1.6">Descubre cómo implementar y aprovechar modelos de inteligencia artificial directamente en local para tus proyectos WordPress, sin depender de servicios externos.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}},"border":{"radius":"8px"},"typography":{"fontWeight":"600"}},"fontSize":"medium","fontFamily":"body"} -->
					<div class="wp-block-button has-custom-font-size has-body-font-family has-medium-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:8px;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem;font-weight:600">Registrarse en Meetup →</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->

		</div>
	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
