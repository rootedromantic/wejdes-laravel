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
/*
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css'); */

   //Foundation stuff
   mix.sass('resources/assets/sass/app.scss', 'public/css')
   .js('resources/assets/js/app.js', 'public/js');
    /*mix.copy('vendor/components/jquery/jquery.min.js', 'public/js');
    mix.copy('vendor/zurb/foundation/dist/js/foundation.min.js', 'public/js');

    mix.autoload({
        jquery: ['$', 'window.jQuery']
     });
    
    //Off cavas
    mix.scripts([   'vendor/zurb/foundation/js/foundation.util.core.js',
                    'vendor/zurb/foundation/js/foundation.util.keyboard.js',
                    'vendor/zurb/foundation/js/foundation.util.mediaQuery.js',
                    'vendor/zurb/foundation/js/foundation.util.trigger.js',
                    'vendor/zurb/foundation/js/foundation.offcanvas.js'], 'public/js/offcanvas.js');

    //dropdown menu
    mix.scripts([   'vendor/zurb/foundation/js/foundation.util.core.js',
                    'vendor/zurb/foundation/js/foundation.util.keyboard.js',
                    'vendor/zurb/foundation/js/foundation.util.box.js',
                    'vendor/zurb/foundation/js/foundation.util.nest.js',
                    'vendor/zurb/foundation/js/foundation.dropdownMenu.js'], 'public/js/dropdown.js'); 
    
    */