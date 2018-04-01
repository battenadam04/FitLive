let mix = require('laravel-mix');
/*var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.livereload();
});*/


mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/styles.scss', 'public/css');



mix.browserSync("http://localhost:8000");

