const mix = require('laravel-mix');

const themepath = 'app';
const distpath = 'web/dist';

// General
mix.setPublicPath('web')

// JS
mix.js(`${themepath}/scripts/app.js`, distpath)
.sourceMaps()
.webpackConfig({
    devtool: 'source-map'
})

// SASS
mix.sass(`${themepath}/styles/app.scss`, distpath, {
    sassOptions: {
        outputStyle: 'compressed'
    }
});

// Other assets
mix.copy(`${themepath}/images`, `${distpath}/images`)
    .copy(`${themepath}/fonts`, `${distpath}/fonts`)

// Browsersync
mix.browserSync({
    proxy: 'http://craft-components.local',
    files: [
        `${distpath}/app.css`,
        `${distpath}/app.js`,
        `${themepath}/templates/**/*.html`
    ]
});