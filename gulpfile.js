var elixir = require('laravel-elixir');

config.assetsPath = 'assets';

elixir(function(mix){
  // watch the sass files and compile them
  mix.sass('app.scss');

  // copy the nav walker into the project
  mix.copy('bower_components/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php', 'wp_bootstrap_navwalker.php');

  // copy bootstrap files to where they can be managed
  mix.copy('bower_components/jquery/dist/jquery.min.js', 'assets/js/jquery.min.js');
  mix.copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'assets/js/bootstrap.min.js');
  mix.scripts([
    'jquery.min.js',
    'bootstrap.min.js',
    'app.js'
  ]);
});
