const mix = require('laravel-mix');

mix.postCss('src/styles/main.css', 'dist/main.css', [
	require('postcss-import'),
  require('tailwindcss'),
  require('postcss-nested'),
  require('autoprefixer'),
])
// .options({
// 	processCssUrls: false
// });

mix.js('src/js/main.js', '/dist')
mix.js('src/js/watchlist.js', '/dist')
mix.js('src/js/slider.js', '/dist')
mix.js('src/js/backend.js', '/dist')