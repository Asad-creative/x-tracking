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
   'webix': './node_modules/webix/'}

mix.js('resources/js/app.js', 'public/js')
   //.sass('resources/sass/app.scss', 'public/css');
   /*mix.js([
      paths.webix + 'webix.js',
  ], 'public/js/webix.js');*/
  mix.copy(paths.webix + 'webix.js', 'public/js/webix.js');
  mix.copy(paths.webix + 'fonts', 'public/css/fonts');

   mix.sass('resources/sass/app.scss', 'public/css')
   .options({
        postCss: [
            require('postcss-css-variables')()
        ]
   });

   mix.styles([
      paths.webix + 'webix.css',
  ], 'public/css/webix.css');