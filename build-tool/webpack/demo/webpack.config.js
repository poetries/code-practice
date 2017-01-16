var webpack = require('webpack');
module.exports = {
	entry: './app/index.js',
	output: {
		filename: 'bundle.js',
		path:'./dist'
	},
	plugins:[
        // 去除代码块内的告警语句
        new webpack.optimize.UglifyJsPlugin({
          compress: {
            warnings: false
          }
        }),
        // 优先考虑使用最多的模块，并为它们分配最小的ID
        new webpack.optimize.OccurenceOrderPlugin()
    ]
}