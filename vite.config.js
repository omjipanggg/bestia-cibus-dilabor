import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
				'public/css/stylesheet.min.css',
                'resources/js/app.js',
                'public/js/predefined.min.js',
            ],
            refresh: true,
        }),
    ],
});
