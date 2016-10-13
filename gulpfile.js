const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(mix => {
    // watch the sass files and compile them
    mix.sass('app.scss')
        .sass('dashboard.scss')
        // copy the nav walker into the project
        .copy('bower_components/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php', 'wp_bootstrap_navwalker.php')
        .webpack('app.js');
});
