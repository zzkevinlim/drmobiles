/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

let mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix.options({
  processCssUrls: false,
  postCss: [
    require('tailwindcss'),
    require('autoprefixer'),
  ],
});

mix.webpackConfig({
  devtool: 'source-map',
});

// mix.browserSync({
//   proxy: 'drmobiles.test',
//   files: [
//     'assets/js/*.{js,vue}',
//     'assets/js/**/*.{js,vue}',
//     'assets/sass/*.scss',
//     'assets/sass/**/*.scss',
//     '*.php',
//     '**/*.php',
//   ],
// });

mix.setPublicPath('dist');

mix.js('assets/js/theme.js', 'dist/js/theme.min.js')
  .sass('assets/sass/style.scss', 'dist/css/theme.css')
  .sass('assets/sass/woocommerce.scss', 'dist/css');

mix.sass('assets/sass/app.scss', 'dist/css/app.css');
mix.js('assets/js/app.js', 'dist/js/app.js').vue();

mix.js('assets/js/contact.js', 'dist/js/contact.js').vue();
