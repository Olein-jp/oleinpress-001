<?php
use Inc2734\WP_Customizer_Framework\Framework;

$theme_link = sprintf(
	'<a href="https://olein-design.com" target="_blank">%s</a>',
	__( 'Olein Design', 'op001' )
);

$wordpress_link = sprintf(
	'<a href="https://wordpress.org/" target="_blank">%s</a>',
	__( 'WordPress', 'op001' )
);

$theme_by = sprintf(
	__( 'Theme: OleinPress 001 - Just Blog by %s', 'op001' ),
	$theme_link
);

$powered_by = sprintf(
	__( 'Powered by %s', 'op001' ),
	$wordpress_link
);

$copyright = $theme_by . ' ' . $powered_by;

Framework::control(
	'text',
	'copyright',
	[
		'label'       => __( 'Copyright', 'op001' ),
		'description' => __( 'HTML available', 'op001' ),
		'default'     => $copyright,
	]
);

if ( ! is_customize_preview() ) {
	return;
}

$section = Framework::get_section( 'title_tagline' );
$control = Framework::get_control( 'copyright' );

$control->join( $section );