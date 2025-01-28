import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Génère le manifest.json
        outDir: 'public/build', // Répertoire de sortie
        rollupOptions: {
            input: 'resources/js/app.js',
        },
        assetsDir: 'assets',
    },
});
