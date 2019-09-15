const webpack = require('webpack');
const path = require('path');

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
    entry: ['./src/js/app.js', './src/css/app.scss'],
    output: {
        filename: './dist/js/main.min.js',
        path: path.resolve(__dirname)
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            },
            {
                test: /\.(sass|scss)$/,
                use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', 'sass-loader']
            },
        ]
    },
    plugins: [
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,
            proxy: 'http://localhost/wp/hub2/'
        }),
        new MiniCssExtractPlugin({
            filename: './dist/css/main.min.css'
        }),
    ],
    optimization: {
        minimizer: [
            // enable the js minification plugin
            new UglifyJSPlugin({
                cache: true,
                parallel: true
            }),
            // enable the css minification plugin
            new OptimizeCSSAssetsPlugin({})
        ]
    },
};