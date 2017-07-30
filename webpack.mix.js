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

 mix.browserSync({
    proxy: 'localhost:8000'
})

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css'); 
  

mix.copy('resources/assets/js/plugin/js/*', 'public/build/js/');
mix.copy('resources/assets/js/plugin/css/*', 'public/build/css');
mix.copy('resources/assets/js/plugin/fonts/*', 'public/build/fonts');
mix.copy('resources/assets/home/*', 'public/images/');
   