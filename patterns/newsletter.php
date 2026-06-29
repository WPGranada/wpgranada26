<?php
/**
 * Title: Newsletter
 * Slug: wpgranada26/newsletter
 * Categories: wpgranada
 * Description: Sección de suscripción al newsletter con formulario de Gravity Forms.
 * Keywords: newsletter, suscripción, email, formulario
 */

$gf_shortcode = '';
if ( class_exists( 'GFAPI' ) ) {
	$forms = GFAPI::get_forms();
	foreach ( $forms as $form ) {
		if ( $form['title'] === 'Newsletter' ) {
			$gf_shortcode = '[gravityforms id="' . $form['id'] . '" title="false" description="false" ajax="true"]';
			break;
		}
	}
}
?>
<!-- wp:group {"metadata":{"categories":["wpgranada"],"patternName":"wpgranada26/newsletter","name":"Newsletter"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|100","right":"var:preset|spacing|100"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wpgranada-newsletter-wrapper">

<!-- wp:group {"className":"alignwide newsletter-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|90","right":"var:preset|spacing|90"}},"border":{"radius":"40px"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide newsletter-section has-primary-background-color has-background">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|90"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center newsletter-col">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary-muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-x-small-font-size is-label">Newsletter · Es gratis</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"1.15"}},"textColor":"base","fontSize":"huge","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-heading-font-family has-huge-font-size fw-extrabold">No te pierdas la <mark>próxima</mark> MeetUp de la comunidad</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"primary-muted","fontSize":"small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-small-font-size lh-relaxed">Recibe un email solo cuando hay novedades con las próximas charlas y el resumen de cada meetup. Cero spam.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center newsletter-col">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

<!-- wp:shortcode -->
<?php echo $gf_shortcode ?: '[gravityforms name="Newsletter" title="false" description="false" ajax="true"]'; ?>
<!-- /wp:shortcode -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"primary-muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-x-small-font-size lh-normal">Al enviar aceptas la <a href="/politica-de-privacidad/">política de privacidad</a>. Te puedes dar de baja en un clic.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
