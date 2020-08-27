const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/static/webfonts');

mix.js('resources/static/js/app.js', 'public/static/js')
    .sass('resources/static/sass/app.scss', 'public/static/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });