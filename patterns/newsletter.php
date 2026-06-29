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
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--100)">

<!-- wp:group {"className":"alignwide newsletter-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|90","right":"var:preset|spacing|90"}},"border":{"radius":"20px"}},"backgroundColor":"primary-dark","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide newsletter-section has-primary-dark-background-color has-background" style="border-radius:20px;padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--90)">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|90"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary-muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Newsletter · Es gratis</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"1.15"}},"textColor":"base","fontSize":"huge","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-heading-font-family has-huge-font-size" style="font-weight:800;line-height:1.15">No te pierdas la <mark style="background:transparent;color:var(--wp--preset--color--accent)">próxima</mark> MeetUp de la comunidad</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"primary-muted","fontSize":"small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-small-font-size" style="line-height:1.6">Recibe un email solo cuando hay novedades con las próximas charlas y el resumen de cada meetup. Cero spam.</p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">

<!-- wp:shortcode -->
<?php echo $gf_shortcode ?: '[gravityforms name="Newsletter" title="false" description="false" ajax="true"]'; ?>
<!-- /wp:shortcode -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"primary-muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-muted-color has-text-color has-body-font-family has-x-small-font-size" style="line-height:1.5">Al enviar aceptas la <a href="/politica-de-privacidad/">política de privacidad</a>. Te puedes dar de baja en un clic.</p>
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
