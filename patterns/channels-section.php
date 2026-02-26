<?php
/**
 * Title: Canales de la Comunidad
 * Slug: wpgranada26/channels-section
 * Categories: wpgranada
 * Description: Grid de tres tarjetas con los canales de comunicación de la comunidad.
 * Keywords: canales, meetup, youtube, telegram, contacto
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|100","right":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
		<p class="has-primary-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.1em">ÚNETE A LA CONVERSACIÓN</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"fontSize":"huge","fontFamily":"heading"} -->
		<h2 class="wp-block-heading has-heading-font-family has-huge-font-size">Conecta con nosotros</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"#c7d1ff","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"},"className":"channel-card"} -->
			<div class="wp-block-group channel-card has-border-color has-base-background-color has-background" style="border-color:#c7d1ff;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:outermost/icon-block {"iconName":"","width":"40px","iconColorValue":"#3858e9"} -->
				<div class="wp-block-outermost-icon-block"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3858e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg></div>
				<!-- /wp:outermost/icon-block -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"x-large","fontFamily":"heading"} -->
				<h3 class="wp-block-heading has-heading-font-family has-x-large-font-size" style="font-weight:700">Meetup</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-tertiary-color has-text-color has-body-font-family has-medium-font-size" style="line-height:1.6">Regístrate en nuestros eventos y recibe notificaciones de cada meetup</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><a href="https://www.meetup.com/es-ES/wordpress-granada/">Ir a Meetup →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"#c7d1ff","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"},"className":"channel-card"} -->
			<div class="wp-block-group channel-card has-border-color has-base-background-color has-background" style="border-color:#c7d1ff;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:outermost/icon-block {"iconName":"","width":"40px","iconColorValue":"#3858e9"} -->
				<div class="wp-block-outermost-icon-block"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3858e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg></div>
				<!-- /wp:outermost/icon-block -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"x-large","fontFamily":"heading"} -->
				<h3 class="wp-block-heading has-heading-font-family has-x-large-font-size" style="font-weight:700">YouTube</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-tertiary-color has-text-color has-body-font-family has-medium-font-size" style="line-height:1.6">Revive las charlas y aprende con los vídeos de nuestros eventos pasados</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><a href="https://youtube.com/@wpgranada">Ver canal →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","left":"2.5rem","right":"2.5rem"},"blockGap":"var:preset|spacing|40"},"border":{"radius":"12px","color":"#c7d1ff","width":"1px"}},"backgroundColor":"base","layout":{"type":"default"},"className":"channel-card"} -->
			<div class="wp-block-group channel-card has-border-color has-base-background-color has-background" style="border-color:#c7d1ff;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
				<!-- wp:outermost/icon-block {"iconName":"","width":"40px","iconColorValue":"#3858e9"} -->
				<div class="wp-block-outermost-icon-block"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#3858e9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg></div>
				<!-- /wp:outermost/icon-block -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"x-large","fontFamily":"heading"} -->
				<h3 class="wp-block-heading has-heading-font-family has-x-large-font-size" style="font-weight:700">Telegram</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-tertiary-color has-text-color has-body-font-family has-medium-font-size" style="line-height:1.6">Únete a nuestro grupo para charlar y estar al día con la comunidad</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"medium","fontFamily":"body"} -->
				<p class="has-primary-color has-text-color has-body-font-family has-medium-font-size" style="font-weight:600"><a href="#">Unirse →</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
