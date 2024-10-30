import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import purge from '@erbelion/vite-plugin-laravel-purgecss'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'public/style.css', 
                'public/assets/css/all.min.css',
                'public/assets/css/animate.css',
                'public/assets/css/animations.css',
                'public/assets/css/bootstrap.min.css',
                'public/assets/css/custom-spacing.css',
                'public/assets/css/magnific-popup.css',
                'public/assets/css/owl.carousel.css',
                'public/assets/css/responsive.css',
                'public/assets/css/swiper.min.css',

            ],
            refresh: true,
        }),
        vue(),
        purge({
            templates: ['blade', 'vue'],
            paths: ['resources/views/*', 'resources/js/*'],
            safelist: {greedy: [/react-inner-menus$/]}
        })
    ],
});
