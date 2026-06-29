<?php
/**
 * Title: Meetups Recientes
 * Slug: wpgranada26/meetups-recientes
 * Categories: wpgranada
 * Description: Grid dinámico de meetups recientes del plugin Community Meetings.
 * Keywords: meetups, charlas, eventos, grid, dinámico
 */
?>
<!-- wp:group {"metadata":{"categories":["wpgranada"],"patternName":"wpgranada26/meetups-recientes","name":"Meetups Recientes"},"align":"full","className":"wpgranada-meetups-wrapper","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","bottom":"var:preset|spacing|100"},"blockGap":"var:preset|spacing|70"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wpgranada-meetups-wrapper has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-accent-color has-text-color has-body-font-family has-x-small-font-size is-label","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"accent","fontSize":"x-small"} -->
<p class="has-accent-color has-text-color has-body-font-family has-x-small-font-size is-label" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Últimas publicaciones</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"huge","fontFamily":"heading"} -->
<h2 class="wp-block-heading has-heading-font-family has-huge-font-size">Revive nuestras MeetUps</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"base","textColor":"contrast","className":"meetups-ver-todas","style":{"border":{"radius":"100px"}}} -->
<div class="wp-block-button meetups-ver-todas"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background wp-element-button" href="/meeting" style="border-radius:100px">Ver todas las charlas →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"metgs_meeting","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"meetups-grid","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"meetup-card has-border-color","style":{"spacing":{"blockGap":"0"},"border":{"radius":"12px","color":"#c7d1ff","width":"1px"}},"backgroundColor":"base"} -->
<div class="wp-block-group meetup-card has-border-color has-base-background-color has-background" style="border-color:#c7d1ff;border-width:1px;border-radius:12px"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"meetup-card__image"} /-->

<!-- wp:group {"className":"meetup-card__body","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group meetup-card__body" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"meetup-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group meetup-card__meta"><!-- wp:post-terms {"term":"metgs_speaker","className":"meetup-card__badge"} /-->

<!-- wp:post-date {"format":"M Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"muted","fontSize":"x-small","fontFamily":"body"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"700","lineHeight":"1.3"}},"fontSize":"x-large","fontFamily":"heading"} /-->

<!-- wp:read-more {"content":"Leer más →","style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"small","fontFamily":"body"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"has-muted-color has-text-color has-medium-font-size fw-medium","style":{"typography":{"fontWeight":"500"}},"textColor":"muted","fontSize":"medium"} -->
<p class="has-muted-color has-text-color has-medium-font-size fw-medium" style="font-weight:500">No hay meetups publicadas todavía.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
