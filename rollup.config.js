// rollup.config.js
import css from 'rollup-plugin-css-only';

export default {
  input: 'resources/js/app.js',
  output: {
    file: 'public/js/app.js',
    format: 'iife'
  },
  plugins: [
    css({ output: 'public/css/app.css' })
  ]
};
