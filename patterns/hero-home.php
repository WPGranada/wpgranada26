<?php
/**
 * Title: Hero Home
 * Slug: wpgranada26/hero-home
 * Categories: wpgranada
 * Description: Hero principal con dos columnas: mensaje de comunidad y próximo evento dinámico.
 * Keywords: hero, portada, comunidad, evento
 */
?>
<!-- wp:group {"metadata":{"categories":["wpgranada"],"patternName":"wpgranada26/hero-home","name":"Hero Home"},"align":"full","className":"hero-home-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"base"} -->
<div class="wp-block-group alignfull hero-home-section has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--80)"><!-- wp:columns {"isStackedOnMobile":false,"verticalAlignment":"center","className":"alignwide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile are-vertically-aligned-center alignwide"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase">Comunidad Local · Open Web · Granada</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.92","fontWeight":"900","textTransform":"uppercase"}},"textColor":"contrast","fontSize":"colossal","fontFamily":"heading"} -->
<h1 class="wp-block-heading has-contrast-color has-text-color has-heading-font-family has-colossal-font-size" style="font-weight:900;line-height:0.92;text-transform:uppercase">WordPress Granada</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"}},"textColor":"primary","fontSize":"xx-large","fontFamily":"heading"} -->
<p class="has-primary-color has-text-color has-heading-font-family has-xx-large-font-size" style="font-weight:700;line-height:1.2">Aprende WordPress.<br>Comparte experiencia.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"tertiary","fontSize":"medium","fontFamily":"body"} -->
<p class="has-tertiary-color has-text-color has-body-font-family has-medium-font-size" style="line-height:1.6">Una comunidad abierta de personas que quieren aprender, crear proyectos web y compartir conocimiento sobre WordPress: diseño, desarrollo, negocios y tecnología.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}}},"fontSize":"medium","fontFamily":"body"} -->
<div class="wp-block-button has-custom-font-size has-body-font-family has-medium-font-size"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background wp-element-button" href="https://www.meetup.com/es-ES/wordpress-granada/" style="border-radius:100px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">Únete a las Meetup</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}}},"fontSize":"medium","fontFamily":"body"} -->
<div class="wp-block-button is-style-outline has-custom-font-size has-body-font-family has-medium-font-size"><a class="wp-block-button__link wp-element-button" href="/actividades" style="border-radius:100px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">Ver actividades</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:query {"queryId":20,"query":{"perPage":1,"pages":0,"offset":0,"postType":"meetings","order":"asc","orderBy":"date","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"hero-event-card","style":{"spacing":{"blockGap":"0"},"border":{"radius":"16px","color":"var(--wp--preset--color--primary-muted)","width":"1px"}},"backgroundColor":"base"} -->
<div class="wp-block-group hero-event-card has-base-background-color has-background has-border-color" style="border-color:var(--wp--preset--color--primary-muted);border-width:1px;border-radius:16px"><!-- wp:post-featured-image {"isLink":false,"aspectRatio":"16/9","style":{"border":{"radius":"16px 16px 0px 0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"primary-light","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.35em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-primary-color has-text-color has-body-font-family has-x-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Próxima Meetup ·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"j M","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary","fontSize":"x-small","fontFamily":"body"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":false,"style":{"typography":{"fontWeight":"700","lineHeight":"1.2"}},"fontSize":"x-large","fontFamily":"heading"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":25,"style":{"typography":{"lineHeight":"1.5"}},"textColor":"tertiary","fontSize":"small","fontFamily":"body"} /-->

<!-- wp:group {"className":"hero-event-card__location","style":{"spacing":{"blockGap":"0.4em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group hero-event-card__location"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"textColor":"muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-muted-color has-text-color has-body-font-family has-x-small-font-size" style="font-size:0.8rem">📍 Granada · Cámara de Comercio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"¡Inscríbete! Es gratis 🎫","className":"hero-event-card__cta","style":{"border":{"radius":"100px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"accent","textColor":"base","fontSize":"medium","fontFamily":"body"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size">No hay eventos próximos programados. ¡Vuelve pronto!</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
