/* It is a Service Worker */

/* self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('the-magic-cache').then(function(cache) {
            return cache.addAll([
                '/',
                '/index.html',
                '/style.css',
                '/resize.css',
                '/pages.css',
                '/manifest.json',
                '/logo.png',
                '/preview-image.webp',
                '/script.js'
            ]);
        });
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
          return response || fetch(event.request);
        });
    );
}); */
