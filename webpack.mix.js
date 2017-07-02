const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/auth.scss', 'public/css/auth.css')
    .sass('resources/assets/sass/app.scss', 'public/css/style.css')
    .sass('resources/assets/sass/admin.scss', 'public/css/admin.css')
    .sass('resources/assets/sass/home.scss', 'public/css/home.css')
    .sass('resources/assets/sass/pages.scss', 'public/css/pages.css')
    .options({
        processCssUrls: false
    });
