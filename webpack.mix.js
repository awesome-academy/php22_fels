const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
mix.styles([
    'resources/css/bootstrap-a.css',
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/ionicons.min.css',
    'resources/css/signup.css',
    'resources/css/style-a.css',
    'resources/css/style.css',
    ],'public/css/app.css');
