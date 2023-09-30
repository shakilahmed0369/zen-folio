import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/Assets/admin/assets/modules/jquery.min.js',
                'resources/js/Assets/admin/assets/modules/popper.js',
                'resources/js/Assets/admin/assets/modules/tooltip.js',
                'resources/js/Assets/admin/assets/modules/bootstrap/js/bootstrap.min.js',
                'resources/js/Assets/admin/assets/modules/nicescroll/jquery.nicescroll.min.js',
                'resources/js/Assets/admin/assets/js/stisla.js',
                'resources/js/Assets/admin/assets/modules/summernote/summernote-bs4.js',
                'resources/js/Assets/admin/assets/js/scripts.js',
                'resources/js/Assets/admin/assets/js/custom.js',


                'resources/js/Assets/admin/assets/modules/bootstrap/css/bootstrap.min.css',
                'resources/js/Assets/admin/assets/modules/fontawesome/css/all.min.css',
                'resources/js/Assets/admin/assets/modules/summernote/summernote-bs4.css',
                'resources/js/Assets/admin/assets/css/style.css',
                'resources/js/Assets/admin/assets/css/components.css',

            ],
            ssr: 'resources/js/ssr.js',
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
