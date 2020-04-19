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

var public_path_js = 'public/js/';
var public_path_css = 'public/css/';

mix.copy('resources/assets/js/plugins/jquery/jquery.min.js', public_path_js + 'jquery.min.js');

mix.scripts([
    'resources/assets/js/plugins/popper/popper.min.js',
    'resources/assets/js/plugins/bootstrap/js/bootstrap.min.js',
    'resources/assets/js/plugins/sticky-kit-master/dist/sticky-kit.min.js',
    'resources/assets/js/plugins/sparkline/jquery.sparkline.min.js',
    'resources/assets/js/plugins/styleswitcher/jQuery.style.switcher.js',
    'resources/assets/js/materialpro/jquery.slimscroll.js',
    'resources/assets/js/materialpro/waves.js',
    'resources/assets/js/materialpro/sidebarmenu.js',
    'resources/assets/js/materialpro/custom.min.js'
],public_path_js + 'app.js');

mix.styles([
    'resources/assets/js/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/css/style.css',
    'resources/assets/css/colors/blue.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/spinners.css'
],public_path_css + 'app.css');

mix.scripts([
    'resources/assets/js/plugins/select2/dist/js/select2.full.js'
],public_path_js + 'form.js');

mix.styles([
    'resources/assets/js/plugins/select2/dist/css/select2.min.js'
],public_path_css + 'form.css');