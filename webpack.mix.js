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

mix.scripts([
        'resources/assets/js/vendor/jquery-3.2.0.slim.min.js',
        'resources/assets/js/vendor/tether.min.js',
        'resources/assets/js/vendor/bootstrap.js'
    ], 'public/js/app.js')

    .styles([
        'resources/assets/css/vendor/tether.min.css',
        'resources/assets/css/vendor/bootstrap.css'
    ], 'public/css/app.css')

    .version();
