const path    = require( 'path' );
const webpack = require( 'webpack' );

module.exports = ( env, options ) => {
    return {
        mode    : 'production',
        watch   : false,
        devtool : false,

        entry   : {
            script: './assets/js/index.js'
        },

        output: {
            path    : path.join(__dirname),
            filename: '[name].js'
        },

        module  : {
        },

        resolve: {
        },

        // plugins: [
        //     new webpack.ProvidePlugin({
        //         $               : 'jquery',
        //         jQuery          : 'jquery',
        //         'window.jQuery' : 'jquery',
        //         // _map            : ['lodash', 'map'],
        //     })
        // ],
    };
};
