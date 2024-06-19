import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(), //calling vue function
        laravel({
            input: [
                'resources/css/app.css',
=======

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
>>>>>>> main
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
