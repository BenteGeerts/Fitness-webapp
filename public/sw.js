const staticCacheName = 'site-static-v1';
const dynamicCacheName = 'site-dynamic-v1';
const assets = [
    '/',
    '/offline',
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
    evt.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key))
            )
        })
    )
})

//fetch event
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt);
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request).then(fetchRes => {
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes.clone())
                    return fetchRes;
                })
            });
        }).catch(() => caches.match('/offline'))
    );
})
