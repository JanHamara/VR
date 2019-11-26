const path = require('path');

module.exports = {
    mode: "development",
    entry: {
        index: './src/main.js',
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
            {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, loader: 'url-loader'},
            {test: /\.(png|jpg|gif)$/, loader: 'file-loader'}
        ]
    },
}