const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app2.css', 'public/css', [
        require("tailwindcss"),
    ]);

mix.js('resources/js/cookies.js', 'public/js');

mix.sass('resources/sass/homepage.scss', 'public/css');
mix.sass('resources/sass/generic.scss', 'public/css');

mix.sass('resources/sass/carousel.scss', 'public/css');
mix.sass('resources/sass/menu.scss', 'public/css');
// iboga
mix.sass('resources/sass/iboga/how-iboga-can-help-you.scss', 'public/css/iboga');
 mix.sass('resources/sass/iboga/bwiti-tradition.scss', 'public/css/iboga');
//ceremonies
mix.sass('resources/sass/ceremonies/retreat.scss', 'public/css/ceremonies');




