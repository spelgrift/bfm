var debug = process.env.NODE_ENV !== "production",
path = require('path'),
webpack = require('webpack'),
autoprefixer = require('autoprefixer'),
ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
  context: __dirname,
  devtool: debug ? "inline-sourcemap" : null,
  entry: {
    'public': ["./js/public.js"]
    // 'admin': ["./js/admin.js"]
  },
  output: {
    path: __dirname + "/public/",
    publicPath: "../", // For CSS url()'s
    filename: "js/[name].min.js"
  },
  plugins: debug ? [ new ExtractTextPlugin("./css/styles.css")] : [
    new webpack.optimize.DedupePlugin(),
    new webpack.optimize.OccurenceOrderPlugin(),
    new webpack.optimize.UglifyJsPlugin({ mangle: false, sourcemap: false }),
  ],
  module: {
    preLoaders: [
      {
        test: /\.js$/,
        include: path.resolve(__dirname, "js/js"),
        loader: 'jshint-loader'
      }
    ],
    loaders: [
      {
        test: /\.less$/,
        exclude: /node_modules/,
        loader: ExtractTextPlugin.extract("style-loader", "css-loader!postcss-loader!less-loader")
      },
      { 
        test: /\.(jpg|png|gif)$/,
        exclude: /node_modules/,
        loader: "file-loader?name=images/[name].[ext]"
      },
      {
        test: /\.(svg|eot|ttf|woff|woff2)$/,
        exclude: /node_modules/,
        loader: 'url-loader?limit=30000&name=fonts/[name]-[hash].[ext]'
      }
    ]
  },
  postcss: function() {
    return [autoprefixer];
  }
};