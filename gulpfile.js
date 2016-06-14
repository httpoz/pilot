var elixir = require('laravel-elixir');

elixir.config.assetsPath = 'assets';

elixir(function(mix){
  // watch the sass files and compile them
  mix.sass('app.scss');
  mix.sass('dashboard.scss');

  // copy the nav walker into the project
  mix.copy('bower_components/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php', 'wp_bootstrap_navwalker.php');

  // copy bootstrap files to where they can be managed
  mix.copy('bower_components/bootstrap/dist/js/bootstrap.min.js', 'assets/js/bootstrap.min.js');
  
  mix.scripts([
    'bootstrap.min.js',
    'app.js'
  ]);
});
