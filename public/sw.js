const staticCacheName = 'site-static-v1';
const assets = [
    '/',
    '/offline',
    'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
];

//cache size limit function
const limitCacheSize = (name, size) => {
    caches.open(name).then(cache => {
        cache.keys().then(keys => {
            if(keys.length > size) {
                cache.delete(keys[0]).then(limitCacheSize(name, size))
            }
        })
    })
};

//install service worker
self.addEventListener('install', evt => {
        //console.log('service worker has been installed');
        evt.waitUntil(
            caches.open(staticCacheName).then(cache => {
                cache.addAll(assets);
            })
        );
    }
);

//active event
self.addEventListener('activate', evt => {
    evt.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(keys
                .filter(key => key !== staticCacheName)
                .map(key => caches.delete(key))
            )
        })
    )
})

//fetch event
self.addEventListener('fetch', evt => {

})
