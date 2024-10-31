<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_navigation_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_navigation_quicktags' );
	function oxsn_navigation_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_navigation_quicktag', '[oxsn_navigation]', '[oxsn_navigation menu=""]', '', 'oxsn_navigation', 'Navigation', 201 );
			</script>

		<?php

		}

	}

}


?>