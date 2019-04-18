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

var paths = {
   TinyMCE: "./node_modules/tinymce/",
};


mix.browserSync('http://127.0.0.1:8000');
mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

   mix.copy(paths.TinyMCE + "tinymce.min.js", "public/js/tinymce.min.js");
   mix.copy(paths.TinyMCE + "themes", "public/js/themes");
