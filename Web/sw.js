const staticAssets = [
    './',
    './app.js',
    'index.html'
];


self.addEventListener('install', async event => {
    const cache = await caches.open('new-static');
    cache.addAll(staticAssets);
});

self.addEventListener('fetch', event => {
    const req = event.request;
    const url = new URL(req.url);

    if(url.origin === location.origin) {
        event.respondWith(cacheFist(req));
    } else {
        event.respondWith(networkFirst(req));
    }   
});

async function cacheFist(req) {
    const cacheResponse = await caches.match(req);
    return cacheResponse || fetch(req);
}
async function networkFirst(req) {
    const cache = await caches.open('news-dynamic');

    try  {
        const res = await fetch(req);
        cache.put(req, res.clone());
        return res;
    } catch(error) {
        return await cache.match(req);
    }
    
}
