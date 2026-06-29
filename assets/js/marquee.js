function wpgranadaInitMarquee(section) {
    if (!section) return;
    if (section.dataset.marqueeInit) return;

    var itemsGroup = section.querySelector('.wpgranada-marquee-items');
    if (!itemsGroup) return;

    var paragraphs = itemsGroup.querySelectorAll('p');
    if (!paragraphs.length) return;

    var texts = Array.from(paragraphs)
        .map(function (p) { return p.textContent.trim(); })
        .filter(Boolean);

    if (!texts.length) return;

    section.dataset.marqueeInit = '1';

    var dot = '<span class="wpgranada-marquee-dot">•</span>';
    var sequence = texts.map(function (t) { return t + ' ' + dot + ' '; }).join('');
    var oneCopy = sequence + sequence;

    var track = document.createElement('div');
    track.className = 'wpgranada-marquee';
    track.innerHTML =
        '<span class="wpgranada-marquee-content">' + oneCopy + '</span>' +
        '<span class="wpgranada-marquee-content" aria-hidden="true">' + oneCopy + '</span>';

    itemsGroup.style.cssText = 'display:none!important';
    section.appendChild(track);

    var copyEl = track.querySelector('.wpgranada-marquee-content');
    var copyWidth = copyEl.offsetWidth;
    if (!copyWidth) return;

    var pos = 0;
    var lastTime = null;
    var pxPerMs = 80 / 1000;

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

function wpgranadaInitAllMarquees() {
    document.querySelectorAll('.wpgranada-marquee-section').forEach(wpgranadaInitMarquee);
}

if (document.readyState === 'complete') {
    wpgranadaInitAllMarquees();
} else {
    window.addEventListener('load', wpgranadaInitAllMarquees);
}
