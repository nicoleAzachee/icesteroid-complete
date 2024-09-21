const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js") // Compiles the main Vue file
    .js("resources/js/three-interaction.js", "public/js") // Compiles the three.js interaction
    .vue()
    .postCss("resources/css/app.css", "public/css", [
        // Add any PostCSS plugins here
    ]);
