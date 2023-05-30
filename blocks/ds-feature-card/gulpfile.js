/**
 * External Dependencies
 */
const { task, src, dest } = require( 'gulp' ); // Gulp of-course.

// CSS related plugins.
const sass = require( 'gulp-sass' )( require( 'sass' ) ); // Gulp plugin for Sass compilation.

// JS related plugins.
const uglify = require( 'gulp-uglify-es' ).default; // Minifies JS files.

// Utility related plugins.
const del = require( 'del' ); // Delete plugin
const lineec = require( 'gulp-line-ending-corrector' ); // Consistent Line Endings for non UNIX systems. Gulp Plugin for Line Ending Corrector (A utility that makes sure your files have consistent line endings).
const concat = require( 'gulp-concat' ); // Concatenates files.
var tap = require( 'gulp-tap' );
var log = require( 'fancy-log' );
var path = require( 'path' );
const fs = require( 'fs' ); // File System

/**
 * Internal Dependencies
 */
const { DsFeatureCardCSS, DsFeatureCardJS } = require( './wpgulp.config.js' );

/**
 * Task to build all Ds Feature Card CSS/JS
 */
task( 'build', async function () {
	del( [ 'js/*.js', 'css/*.css' ] );

	// build unminified files.
	buildDsFeatureCardCSS( false );
	buildDsFeatureCardJS( false );

	// build minified files.
	buildDsFeatureCardCSS();
	buildDsFeatureCardJS();
} );

/**
 * Build Ds Feature Card CSS file
 */
async function buildDsFeatureCardCSS( min = true ) {
	var buildOutputStyle = min ? 'compressed' : 'expanded';
	var minified = min ? '.min' : '';

	// Ds Feature Card Front End CSS
	if ( DsFeatureCardCSS.length ) {
		src( DsFeatureCardCSS )
			.pipe(
				sass( {
					outputStyle: buildOutputStyle,
				} )
			)
			.pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
			.pipe( concat( `ds-feature-card${ minified }.css` ) ) // compiled file
			.pipe(
				tap( function ( file ) {
					log(
						'[ ✅ DsFeatureCardCSS Frontend ' +
							( min ? 'Minified CSS ] ' : 'CSS ] ' ) +
							path.basename( file.path ) +
							' was created successfully.'
					);
				} )
			)
			.pipe( dest( 'css/' ) );
	}
}

/**
 * Build Ds Feature Card JS file
 */
async function buildDsFeatureCardJS( min = true ) {
	var minified = min ? '.min' : '';

	// Ds Feature Card Front End JS
	if ( DsFeatureCardJS.length ) {
		let js = src( DsFeatureCardJS );

		if ( min ) {
			js = js.pipe( uglify() );
		}

		js.pipe( lineec() ) // Consistent Line Endings for non UNIX systems.
			.pipe( concat( `ds-feature-card${ minified }.js` ) ) // compiled file
			.pipe(
				tap( function ( file ) {
					log(
						'[ ✅ Ds Feature Card Frontend ' +
							( min ? 'Minified JS ] ' : 'JS ] ' ) +
							path.basename( file.path ) +
							' was created successfully.'
					);
				} )
			)
			.pipe( dest( 'js/' ) );
	}
}
