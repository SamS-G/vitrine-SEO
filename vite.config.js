import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/accueil.css',
                'resources/css/services.css',
                'resources/css/photo-gallery.css',
                'resources/css/zone-intervention.css',
                'resources/js/app.js',
                'resources/js/area-business-map.js',
                'resources/js/form-validation.js',
                'resources/js/leaflet.js',
                'resources/js/heightUniformizer.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        postcss: 'postcss.config.js',
    }
});

