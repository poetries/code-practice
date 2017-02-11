var path = require('path');
var webpack = require('webpack');

module.exports = {
  entry: ['webpack/hot/dev-server',path.resolve(__dirname, './es6/main.js')],
  output: {
    path: path.resolve(__dirname, "build"),
    filename: "all.js"
  },
  module: {
    loaders: [
      {
        test: /\.js|\.jsx|\.es6$/,
        loader: 'babel',
        exclude: /node_modules/,
        query: {
            presets: ['es2015', 'stage-3']
        }
      }
    ]
  },
  plugins: [
    new webpack.HotModuleReplacementPlugin()
  ]
}