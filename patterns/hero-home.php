<?php
/**
 * Title: Hero Home
 * Slug: wpgranada26/hero-home
 * Categories: wpgranada
 * Description: Hero principal con dos columnas: mensaje de comunidad y próximo evento dinámico.
 * Keywords: hero, portada, comunidad, evento
 */
?>
<!-- wp:group {"metadata":{"categories":["wpgranada"],"patternName":"wpgranada26/hero-home","name":"Hero Home"},"align":"full","className":"hero-home-section","backgroundColor":"base"} -->
<div class="wp-block-group alignfull hero-home-section has-base-background-color has-background"><!-- wp:columns {"verticalAlignment":"top","isStackedOnMobile":false,"className":"alignwide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-top is-not-stacked-on-mobile alignwide"><!-- wp:column {"verticalAlignment":"top","className":"hero-home-col-text"} -->
<div class="wp-block-column is-vertically-aligned-top hero-home-col-text"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"hero-home-label","textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
<p class="hero-home-label has-primary-color has-text-color has-body-font-family has-x-small-font-size">Comunidad Local · Open Web · Granada</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-home-title","textColor":"contrast","fontFamily":"heading"} -->
<h1 class="wp-block-heading hero-home-title has-contrast-color has-text-color has-heading-font-family">WordPress Granada</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-home-tagline","textColor":"primary","fontSize":"xx-large","fontFamily":"heading"} -->
<p class="hero-home-tagline has-primary-color has-text-color has-heading-font-family has-xx-large-font-size">Aprende WordPress.<br>Comparte experiencia.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"hero-home-desc","fontSize":"medium","fontFamily":"body"} -->
<p class="hero-home-desc has-body-font-family has-medium-font-size">Una comunidad abierta de personas que quieren aprender, crear proyectos web y compartir conocimiento sobre WordPress: diseño, desarrollo, negocios y tecnología.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"base","className":"hero-home-btn","fontSize":"medium","fontFamily":"body"} -->
<div class="wp-block-button hero-home-btn"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background has-body-font-family has-medium-font-size has-custom-font-size wp-element-button" href="https://www.meetup.com/es-ES/wordpress-granada/">Únete a las Meetup</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"primary","textColor":"base","className":"hero-home-btn","fontSize":"medium","fontFamily":"body"} -->
<div class="wp-block-button hero-home-btn"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-body-font-family has-medium-font-size has-custom-font-size wp-element-button" href="/actividades">Ver actividades</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"hero-home-col-card"} -->
<div class="wp-block-column is-vertically-aligned-top hero-home-col-card"><!-- wp:query {"queryId":20,"query":{"perPage":1,"pages":0,"offset":0,"postType":"metgs_meeting","order":"desc","orderBy":"date","inherit":false,"sticky":"","parents":[],"format":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"className":"hero-event-card","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"base"} -->
<div class="wp-block-group hero-event-card has-base-background-color has-background"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"className":"hero-event-card__body","backgroundColor":"primary-light","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
<div class="wp-block-group hero-event-card__body has-primary-light-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"0.35em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"hero-event-card__label","textColor":"primary","fontSize":"x-small","fontFamily":"body"} -->
<p class="hero-event-card__label has-primary-color has-text-color has-body-font-family has-x-small-font-size">Próxima Meetup ·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"j M","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"className":"hero-event-card__date","textColor":"primary","fontSize":"x-small","fontFamily":"body"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large","fontFamily":"heading"} /-->

<!-- wp:post-excerpt {"moreText":"","excerptLength":25,"textColor":"tertiary","fontSize":"small","fontFamily":"body"} /-->

<!-- wp:group {"className":"hero-event-card__location","style":{"spacing":{"blockGap":"0.4em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group hero-event-card__location"><!-- wp:paragraph {"textColor":"muted","fontSize":"x-small","fontFamily":"body"} -->
<p class="has-muted-color has-text-color has-body-font-family has-x-small-font-size">📍 Granada · Cámara de Comercio</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"¡Inscríbete! Es gratis 🎫","className":"hero-event-card__cta","backgroundColor":"accent","textColor":"base","fontSize":"medium","fontFamily":"body"} /--></div>
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
