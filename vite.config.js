import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/leaflet.css',
                'resources/js/app.js',
                'resources/js/leaflet.js',
                'resources/js/area-business-map.js'
            ],
            refresh: true,
        }),
    ],
//    build: {
//        manifest: true, // Génère le manifest.json
    //      outDir: 'public/build', // Répertoire de sortie
    //    rollupOptions: {
    //      input: 'resources/js/app.js',
    //    styles: 'resources/css/app.css'
    // },
    //assetsDir: 'assets',
    // },
});

