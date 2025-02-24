import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/leaflet.js', // Compilé mais non chargé globalement
                'resources/js/area-business-map.js', // Compilé mais non chargé globalement
                'resources/css/app.css',
            ],
            refresh: true,
        }),
    ],
    css: {
        postcss: 'postcss.config.js',
    }
});

