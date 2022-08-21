/**
 * Reservoir Levels Gulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 *
 * @package caweb
 */


module.exports = {
	ReservoirLevelsCSS: [ // Reservoir Levels CSS
		'node_modules/@cagov/*/src/index.scss',
		'assets/css/*'
	], 
	ReservoirLevelsJS: [ // Reservoir Levels JS
		'node_modules/@cagov/*/dist/index.js',
		'assets/js/*'
	]
};