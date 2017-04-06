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

let js_resource  = 'resources/assets/js/';
let css_resource = 'resources/assets/css/';

mix
   .js(js_resource + 'app.js', 'public/js')
   .js(js_resource + 'admin.js', 'public/js/admin.js')
   .js([
   		js_resource + 'tether.min.js',
   		js_resource + 'jquery-scrollTo/jquery.scrollTo.js',
   		js_resource + 'plugins/jquery-1.11.1.min.js',
   		js_resource + 'plugins/jquery-migrate-1.2.1.min.js',
   		js_resource + 'plugins/jquery.easing.1.3.js',
   		js_resource + 'plugins/jquery-scrollTo/jquery.scrollTo.min.js',
   		js_resource + 'plugins/prism/prism.js',
         js_resource + 'remodal.min.js',
   		js_resource + 'main.js'
   	],'public/js/vendor.js')
   .styles([
      css_resource + 'remodal-default-theme.css',
      css_resource + 'remodal.css',
   ],'public/css/remodal.css')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/main.scss','public/css/vendor.css')
   .sass('resources/assets/sass/admin.scss', 'public/css/admin.css')
   .copy('node_modules/pikaday/css/pikaday.css', 'public/libraries/pikaday/pikaday.css')
   .copy('node_modules/pikaday/pikaday.js', 'public/libraries/pikaday/pikaday.js')
   .version();
