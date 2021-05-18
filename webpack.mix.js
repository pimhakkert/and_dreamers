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
    .js('resources/js/website/hatstory.js', 'public/js/website')
    .js('resources/js/website/page-flip.js', 'public/js/website')
    .js('resources/js/dashboard/edit-create.js', 'public/js/dashboard')
    .css('resources/css/tooltip.css', 'public/css')
    .postCss('resources/css/tailwind.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
])
    .options({
        "processCssUrls": false
    })

if (mix.inProduction()) {
    mix.version();
}
