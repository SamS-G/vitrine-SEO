import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '127.0.0.1', // Force l'utilisation de l'IPv4
        port: 5173,
        proxy: {
            '/': {
                target: 'http://127.0.0.1:8000', // URL de Laravel
                changeOrigin: true,
                secure: false,
            },
        },
    },
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
    },
});
