/**
 * Webpack configuration file
 */

import TerserPlugin from 'terser-webpack-plugin'
import path, { dirname } from 'node:path'
import { fileURLToPath } from 'node:url'

const __dirname = dirname( fileURLToPath( import.meta.url ) )

export default {
	entry: {
		blocks: [
			path.resolve( __dirname, './src/js/block.js' ),
		],
	},
	mode: 'production',
	output: {
		path: path.resolve( __dirname, './dist' ),
		filename: '[name].min.js',
	},
	optimization: {
		minimize: true,
		minimizer: [
			new TerserPlugin(
				{
					extractComments: false,
					terserOptions: {
						output: {
							comments: false,
						},
					},
				}
			),
		],
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
				},
			},
		],
	},
}
