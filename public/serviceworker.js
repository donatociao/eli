var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/css/app.css',
    '/js/app.js',
    '/images/icons/icon-72x72.png',
    '/images/icons/icon-96x96.png',
    '/images/icons/icon-128x128.png',
    '/images/icons/icon-144x144.png',
    '/images/icons/icon-152x152.png',
    '/images/icons/icon-192x192.png',
    '/images/icons/icon-384x384.png',
    '/images/icons/icon-512x512.png',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            return cache.addAll(filesToCache);
        })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                .filter(cacheName => (cacheName.startsWith("pwa-")))
                .filter(cacheName => (cacheName !== staticCacheName))
                .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
        .then(response => {
            return response || fetch(event.request);
        })
        .catch(() => {
            return caches.match('offline');
        })
    )
});


export const pwaTrackingListeners = () => {
    const fireAddToHomeScreenImpression = event => {
        fireTracking("Add to homescreen shown");
        //will not work for chrome, untill fixed
        event.userChoice.then(choiceResult => {
            fireTracking(`User clicked ${choiceResult}`);
        });
        //This is to prevent `beforeinstallprompt` event that triggers again on `Add` or `Cancel` click
        window.removeEventListener(
            "beforeinstallprompt",
            fireAddToHomeScreenImpression
        );
    };
    window.addEventListener("beforeinstallprompt", fireAddToHomeScreenImpression);

    //Track web app install by user
    window.addEventListener("appinstalled", event => {
        fireTracking("PWA app installed by user!!! Hurray");
    });

    //Track from where your web app has been opened/browsed
    window.addEventListener("load", () => {
        let trackText;
        if (navigator && navigator.standalone) {
            trackText = "Launched: Installed (iOS)";
        } else if (matchMedia("(display-mode: standalone)").matches) {
            trackText = "Launched: Installed";
        } else {
            trackText = "Launched: Browser Tab";
        }
        fireTracking(track);
    });
};