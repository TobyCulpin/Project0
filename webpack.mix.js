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
        .js('resources/js/side-bar.js', 'public/js')
        
        .sass('resources/sass/app.scss', 'public/css')
        .sass('resources/sass/top-bar.scss', 'public/css')
        .sass('resources/sass/side-bar.scss', 'public/css')
        .sass('resources/sass/_global-variables.scss', 'public/css')
        .sass('resources/sass/default-layout.scss', 'public/css')

        .sass('resources/sass/home.scss', 'public/css')
        .sass('resources/sass/videos.scss', 'public/css')
        .sass('resources/sass/members.scss', 'public/css')
        .sass('resources/sass/leaderboards.scss', 'public/css')
        .sass('resources/sass/tournaments.scss', 'public/css')
        .sass('resources/sass/about.scss', 'public/css');
