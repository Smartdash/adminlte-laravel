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
//
mix.options({
    terser: {
        extractComments: false,
        terserOptions: {
            output: {
                comments: false,
            },
        },
    }
});

mix.js('resources/js/adminlte.js', 'public/dist/js')
    .sass('resources/scss/adminlte.scss', 'public/dist/css')
    .minify('public/dist/css/adminlte.css', 'public/dist/css')
    .sourceMaps()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
