<?php
/**
 * Title: Marquee de texto
 * Slug: wpgranada26/marquee-texto
 * Categories: wpgranada
 * Description: Banda de texto infinito con palabras clave de la comunidad.
 * Keywords: marquee, texto, banda, animación
 */

$item = 'OPEN WEB <span class="wpgranada-marquee-dot">•</span> WORDPRESS <span class="wpgranada-marquee-dot">•</span> GRANADA <span class="wpgranada-marquee-dot">•</span> DISEÑO <span class="wpgranada-marquee-dot">•</span> CÓDIGO <span class="wpgranada-marquee-dot">•</span> COMUNIDAD <span class="wpgranada-marquee-dot">•</span> ';
$copy = str_repeat( $item, 2 );
?>
<!-- wp:group {"align":"full","className":"wpgranada-marquee-section","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull wpgranada-marquee-section">

    <!-- wp:html -->
    <div class="wpgranada-marquee">
        <span class="wpgranada-marquee-content"><?php echo $copy; ?></span>
        <span class="wpgranada-marquee-content" aria-hidden="true"><?php echo $copy; ?></span>
    </div>
    <script>
    (function () {
        function startMarquee() {
            var track = document.querySelector('.wpgranada-marquee');
            if (!track) return;
            var copy = track.querySelector('.wpgranada-marquee-content');
            if (!copy) return;

            var copyWidth = copy.offsetWidth;
            var pos = 0;
            var lastTime = null;
            var pxPerMs = 80 / 1000; /* 80px por segundo */

            function tick(timestamp) {
                if (lastTime === null) lastTime = timestamp;
                var delta = timestamp - lastTime;
                lastTime = timestamp;
                pos -= pxPerMs * delta;
                if (pos <= -copyWidth) pos += copyWidth;
                track.style.transform = 'translateX(' + pos + 'px)';
                requestAnimationFrame(tick);
            }

            requestAnimationFrame(tick);
        }

        if (document.readyState === 'complete') {
            startMarquee();
        } else {
            window.addEventListener('load', startMarquee);
        }
    })();
    </script>
    <!-- /wp:html -->

</div>
<!-- /wp:group -->
