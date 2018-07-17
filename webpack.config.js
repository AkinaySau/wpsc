const webpackModeBoolean = process.env.NODE_ENV !== 'production';
const webpackMode = webpackModeBoolean !== 'production' ?
	'development' :
	'production';
const miniCssExtractPlugin = require('mini-css-extract-plugin');
const uglifyJsPlugin = require('uglifyjs-webpack-plugin');
const optimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const cleanWebpackPlugin = require('clean-webpack-plugin');
const vueLoaderPlugin = require('vue-loader/lib/plugin');
const webpack = require('webpack');

let path = require('path');
let autoPrefixer = require('autoprefixer');

let plugins = {
	autoPrefixer() {
		return autoPrefixer({
			browsers: [
				'Android 2.3',
				'Android >= 4',
				'Chrome >= 20',
				'Firefox >= 24',
				'Explorer >= 8',
				'iOS >= 6',
				'Opera >= 12',
				'Safari >= 6',
			],
		});
	},
	miniCssExtractPlugin: new miniCssExtractPlugin({
		filename: '/../css/[name].css',
	}),
	cleanWebpackPlugin: new cleanWebpackPlugin('dist', {}),
	vueLoaderPlugin: new vueLoaderPlugin(),
	providerPlugin: new webpack.ProvidePlugin({
		'$': 'jquery',
		// 'Sau': ['/var/www/html/sau/vue/nicGen/lib/Sau.js'],
	}),
};

let modules = {
	js() {
		return {
			test: /\.js$/,
			// use: {
				loader: 'babel-loader',
				// options: {
				// 	// presets: ['es2015'],
				// },
			// },
			exclude: /node_modules/,
		};
	},
	style() {
		return {
			test: /\.(sa|sc|c)ss$/,
			use: [
				'style-loader',
				miniCssExtractPlugin.loader,
				'css-loader',
				{
					loader: 'postcss-loader',
					options: {
						plugins: [
							plugins.autoPrefixer(),
						],
						sourceMap: true,
					},
				},
				'sass-loader',
			],
		};
	},
	vue() {
		return {
			test: /\.vue$/,
			loader: 'vue-loader',
		};
	},
	images() {
		return {
			test: /\.(png|jpe?g|gif|svg)(\?.*)?$/,
			use: [
				{
					loader: 'file-loader',
					options: {
						name: '[name].[ext]',
						publicPath: '../images/',
						outputPath: '../images/',
					},
				},
			],
		};
	},
	media() {
		return {
			test: /\.(mp4|webm|ogg|mp3|wav|flac|aac)(\?.*)?$/,
			use: [
				{
					loader: 'file-loader',
					options: {
						name: '[name].[ext]',
						publicPath: '../media/',
						outputPath: '../media/',
					},
				},
			],
		};
	},
	fonts() {
		return {
			test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
			use: [
				{
					loader: 'file-loader',
					options: {
						name: '[name].[ext]',
						publicPath: '../fonts/',
						outputPath: '../fonts/',
					},
				},
			],
		};
	},

};
module.exports = {
	cache: true,
	target: 'web',
	mode: webpackMode,
	entry: {
		'admin_config': path.join(__dirname, 'dev/admin_config.js'),
		'admin_editor': path.join(__dirname, 'dev/admin_editor.js'),
	},
	optimization: {
		minimizer: [
			new uglifyJsPlugin({
				cache: true,
				parallel: true,
				sourceMap: true, // set to true if you want JS source maps
			}),
			new optimizeCSSAssetsPlugin({}),
		],
	},
	output: {
		path: path.join(__dirname, '/assets/js'),
		publicPath: '/assets/',
		filename: '[name].min.js',
		library: '[name]',
	},
	module: {
		rules: [
			modules.vue(),
			modules.js(),
			modules.style(),

			modules.images(),
			modules.media(),
			modules.fonts(),
		],
	},
	plugins: [
		plugins.cleanWebpackPlugin,
		plugins.miniCssExtractPlugin,
		plugins.vueLoaderPlugin,
		plugins.providerPlugin,
	],
};