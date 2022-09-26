import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/img/apple-icon.png',
                'resources/css/nucleo-icons.css',
                'resources/css/nucleo-svg.css',
                'resources/css/nucleo-svg.css',
                'resources/css/argon-dashboard.css?v=2.0.4',
                'resources/js/core/popper.min.js',
                'resources/js/core/bootstrap.min.js',
                'resources/js/plugins/perfect-scrollbar.min.js',
                'resources/js/plugins/smooth-scrollbar.min.js',
                'resources/js/argon-dashboard.min.js?v=2.0.4',
            ],
            refresh: true,
        }),
    ],
});
