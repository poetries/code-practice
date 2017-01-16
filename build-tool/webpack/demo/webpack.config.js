var webpack = require('webpack');
module.exports = {
	entry: './app/main.js',
	output: {
		filename: 'bundle.js',
		path:'./dist'
	},
	plugins:[
        // ȥ��������ڵĸ澯���
        new webpack.optimize.UglifyJsPlugin({
          compress: {
            warnings: false
          }
        }),
        // ���ȿ���ʹ������ģ�飬��Ϊ���Ƿ�����С��ID
        new webpack.optimize.OccurenceOrderPlugin()
    ]
}