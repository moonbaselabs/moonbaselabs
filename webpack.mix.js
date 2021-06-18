const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');

mix.jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/_assets/**/*.css'],
    })
    .postCss('source/_assets/css/main.css', 'css/main.css', [
        require('tailwindcss'),
    ])
    .js('source/_assets/js/goals.js', 'js/goals.js')
    .version();
