<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_navigation menu="" menu_class="" menu_id="" container="" container_class="" container_id="" before="" after="" link_before="" link_after="" echo="" depth="" walker="" theme_locations="" item_wrap=""]
if ( ! function_exists ( 'oxsn_navigation_shortcode' ) ) {

	add_shortcode('oxsn_navigation', 'oxsn_navigation_shortcode');
	function oxsn_navigation_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'menu' => '',
			'menu_class' => '',
			'menu_id' => '',
			'container' => 'nav',
			'container_class' => '',
			'container_id' => '',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => '',
			'walker' => '',
			'theme_location' => '',
		), $atts );

		$oxsn_menu = esc_attr($a['menu']);
		$oxsn_menu_class = esc_attr($a['menu_class']);
		$oxsn_menu_id = esc_attr($a['menu_id']);
		$oxsn_container = esc_attr($a['container']);
		$oxsn_container_class = esc_attr($a['container_class']);
		$oxsn_container_id = esc_attr($a['container_id']);
		$oxsn_before = esc_attr($a['before']);
		$oxsn_after = esc_attr($a['after']);
		$oxsn_link_before = esc_attr($a['link_before']);
		$oxsn_link_after = esc_attr($a['link_after']);
		$oxsn_depth = esc_attr($a['depth']);
		$oxsn_walker = esc_attr($a['walker']);
		$oxsn_theme_location = esc_attr($a['theme_location']);

		return wp_nav_menu( 
			array( 
				'menu' => $oxsn_menu,
				'menu_class' => $oxsn_menu_class,
				'menu_id' => $oxsn_menu_id,
				'container' => $oxsn_container,
				'container_id' => $oxsn_container_id,
				'container_class' => $oxsn_container_class,
				'fallback_cb' => false,
				'before' => $oxsn_before,
				'after' => $oxsn_after,
				'link_before' => $oxsn_link_before,
				'link_after' => $oxsn_link_after,
				'echo' => false,
				'depth' => $oxsn_depth,
				'walker' => $oxsn_walker,
				'theme_location' => $oxsn_theme_location,
			) 
		);

	}

}


?>