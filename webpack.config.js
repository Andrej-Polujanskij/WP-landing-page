const path = require(`path`);
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
// const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

module.exports = {
  entry: `./src/js/index.js`,
  output: {
    path: path.resolve(__dirname, `dist`),
    filename: `bundle.js`
  },
  module: {
    rules: [{
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: `babel-loader`,
          options: {
            presets: [`@babel/preset-env`]
          }
        }
      },
      {
        test: /\.scss$/,
        use: [{
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: `css-loader`,
          },
          {
            loader: `postcss-loader`
          },
          {
            loader: `sass-loader`,
            options: {
              implementation: require(`sass`)
            }
          }
        ]
      },
      {
        test: /\.css$/,
        use: [{
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: `css-loader`,
          },
          {
            loader: `postcss-loader`
          },
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        use: [{
          loader: "file-loader",
          options: {
            outputPath: 'images'
          }
        }]
      },
      {
        test: /\.(ttf|woff|woff2|eot)$/,
        use: [{
          loader: "file-loader",
          options: {
            outputPath: 'fonts'
          }
        }]
      },
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "bundle.css"
    }),
    // new BrowserSyncPlugin({
    //   proxy: 'http://landingas.local/', // Chang to your local server hostname
    //   files: './**/*.php',
    // }),
    new CleanWebpackPlugin(),
  ],
  mode: `development`
};