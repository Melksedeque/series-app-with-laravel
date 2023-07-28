const mix = require('laravel-mix');

mix
    .sass('resources/css/app.scss', 'pubick/css')
    .js('resources/js/app.js', 'public/js')
;
