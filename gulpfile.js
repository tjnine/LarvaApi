var elixir = require('laravel-elixir');



elixir(function(mix) {
    mix.sass('app.scss')
    .browserify('main.js');
});


