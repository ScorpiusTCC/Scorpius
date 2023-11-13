import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                ...Object.keys(import.meta.glob('./resources/css/*.css')).map(
                    key => `./${key}`
                ),
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});