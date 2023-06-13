const staticCacheName = 'site-static';
const assets = [
    '/',
    '/login',
    'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
];

//install service worker
self.addEventListener('install', evt => {
        //console.log('service worker has been installed');
        evt.waitUntil(
            caches.open(staticCacheName).then(cache => {
                console.log('caching assets');
                cache.addAll(assets);
            })
        );
    }
);

//active event
self.addEventListener('activate', evt => {
    //console.log('service worker has been activated');
})

//fetch event
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt);
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request);
        })
    );
})
