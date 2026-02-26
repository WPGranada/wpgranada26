<?php
/**
 * Title: Próximo Evento
 * Slug: wpgranada26/next-event
 * Categories: wpgranada
 * Description: Próximo evento del CPT meetings, dinámico, filtrando por fecha mayor a hoy.
 * Keywords: evento, meetup, próximo
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
		<p class="has-primary-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase">PRÓXIMO EVENTO</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"huge","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-heading-font-family has-huge-font-size">No te lo pierdas</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":10,"query":{"perPage":1,"postType":"meetings","order":"asc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"default"}} -->

			<!-- wp:group {"style":{"border":{"radius":"12px","color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dprimary)","width":"2px"},"spacing":{"blockGap":"0"}},"backgroundColor":"base","className":"next-event-card","layout":{"type":"default"}} -->
			<div class="wp-block-group next-event-card has-base-background-color has-background has-border-color" style="border-color:var(--wp--preset--color--primary);border-width:2px;border-radius:12px">

				<!-- wp:columns {"style":{"spacing":{"blockGap":"0"}}} -->
				<div class="wp-block-columns">

					<!-- wp:column {"width":"46%","className":"next-event-image-col"} -->
					<div class="wp-block-column next-event-image-col" style="flex-basis:46%">
						<!-- wp:post-featured-image {"style":{"border":{"radius":"0"}}} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical"}} -->
						<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

							<!-- wp:group {"style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.625rem","bottom":"0.625rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group has-primary-background-color has-background" style="border-radius:100px;padding-top:0.625rem;padding-right:1.25rem;padding-bottom:0.625rem;padding-left:1.25rem">
								<!-- wp:post-date {"format":"j M Y","style":{"typography":{"fontWeight":"700"}},"textColor":"base","fontSize":"x-small","fontFamily":"body"} /-->
							</div>
							<!-- /wp:group -->

							<!-- wp:post-title {"level":3,"isLink":false,"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large","fontFamily":"heading"} /-->

							<!-- wp:post-excerpt {"moreText":"","excerptLength":30,"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} /-->

							<!-- wp:read-more {"className":"has-custom-font-size has-body-font-family has-medium-font-size","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"2rem","right":"2rem"}},"border":{"radius":"8px"},"typography":{"fontWeight":"600"}},"fontSize":"medium","fontFamily":"body","content":"Registrarse en Meetup \u2192"} /-->

						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

				</div>
				<!-- /wp:columns -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
			<p class="has-text-align-center has-tertiary-color has-text-color has-body-font-family has-medium-font-size">No hay eventos próximos programados. ¡Vuelve pronto!</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
