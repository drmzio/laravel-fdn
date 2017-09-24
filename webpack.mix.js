let mix = require('laravel-mix');

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

mix.options({
    processCssUrls: false
});
mix.sass('resources/assets/sass/app.scss', 'public/assets/css');
mix.js('./node_modules/jquery/dist/jquery.min.js', 'public/assets/js/vendor'); // jQuery required for Foundation 6
mix.babel([
    './node_modules/foundation-sites/dist/js/foundation.js',
    /* Add more JS plugins here */
], 'public/assets/js/plugins.js');
mix.babel([
    './resources/assets/js/app.js'
], 'public/assets/js/app.js');

if (mix.inProduction()) {
    mix.version();
}
