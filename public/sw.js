const staticCacheName = 'site-static';
const assets = [
    '/',
    '/css/style.css',
    '/login',
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
})
