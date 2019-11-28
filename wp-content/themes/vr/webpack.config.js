const path = require('path');
var nodeExternals = require('webpack-node-externals');

module.exports = {
    mode: "development",
    target: 'node', // in order to ignore built-in modules like path, fs, etc.
    externals: [nodeExternals()], // in order to ignore all modules in node_modules folder
    entry: {
        index: './js/main.js',
    },
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
            {test: /\.css$/, loader: "style-loader!css-loader", exclude: /node_modules/},
            {test: /\.less$/, loader: "style-loader!css-loader!less-loader", exclude: /node_modules/},
            {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader', exclude: /node_modules/},
            {test: /\.(png|jpg|gif)$/, loader: 'url-loader', exclude: /node_modules/}
        ]
    },
}