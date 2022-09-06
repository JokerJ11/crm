mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .version();

    .copy('node_modules/admin-lte/dist/img', 'public/dist/img');