/**
 * grunt-wp-boilerplate
 * https://github.com/fooplugins/grunt-wp-boilerplate
 *
 * Copyright (c) 2014 Brad Vincent, FooPlugins LLC
 * Licensed under the MIT License
 */

'use strict';

// Basic template description
exports.description = 'Create a WordPress plugin!';

// Template-specific notes to be displayed before question prompts.
exports.notes = 'The generated plugin is based off the WordPress Plugin Boilerplate created by Tom McFarlin.';

// Template-specific notes to be displayed after the question prompts.
exports.after = 'Your plugin has been generated. Enjoy!';

// Any existing file or directory matching this wildcard will cause a warning.
exports.warnOn = '*';

// The actual init template
exports.template = function( grunt, init, done ) {
	init.process( {}, [
		// Prompt for these values.
		init.prompt( 'title', 'Plugin title' ),
        init.prompt( 'slug', 'Plugin slug / textdomain (no spaces)' ),
        init.prompt( 'short_name' ),
		init.prompt( 'description', 'An awesome plugin that does awesome things' ),
        {
            name: 'version',
            message: 'Plugin Version',
            default: '0.0.1'
        },
		init.prompt( 'homepage', 'http://wordpress.org/plugins' ),
		init.prompt( 'author_name' ),
		init.prompt( 'author_email' ),
		init.prompt( 'author_url' ),
        init.prompt( 'github_repo' )
	], function( err, props ) {

        props.safe_name = props.short_name.replace(/[\W_]+/g, '_');
        props.short_name_lower = props.short_name.toLowerCase();
		props.short_name_files = props.short_name_lower.replace(/_+/g, '-');
		props.short_name_var = props.short_name_lower.replace(/-+/g, '_');

		// Files to copy and process
		var files = init.filesToCopy( props );

        //delete a file if necessary :
        //delete files[ 'public/assets/js/public.js'];
		
		console.log( files );
		
		// Actually copy and process files
		init.copyAndProcess( files, props, {noProcess: 'assets/**' } );
		
		// Generate package.json file
		//init.writePackageJSON( 'package.json', props );
		
		// Done!
		done();
	});
};