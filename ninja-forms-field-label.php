<?php

/*
Plugin Name: NF Field Label
*/

function nf_field_label_func($atts)
{
	if ( ! isset( $atts['id'] ) ) return null;

	$target_field = null;
	$all_fields = ninja_forms_get_all_fields();

	foreach ($all_fields as $key => $field) {
		
		if( $atts['id'] == $field['id'] ) {
			return $field['data']['label'];
		}
	}
}

add_shortcode('nf_field_label', 'nf_field_label_func');
