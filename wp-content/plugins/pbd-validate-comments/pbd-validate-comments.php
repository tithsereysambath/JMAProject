<?php
/**
 * Plugin Name: PBD Validate Comments
 * Plugin URI: http://www.problogdesign.com/
 * Description: Validate comments instantly with jQuery. Uses <a href="http://bassistance.de/jquery-plugins/jquery-plugin-validation/">jQuery Form Validation</a> plugin by Jörn Zaefferer.
 * Version: 0.2
 * Author: Pro Blog Design
 * Author URI: http://www.problogdesign.com/
 * License: GPLv2
 */
 
/**
 * Add jQuery Validation script on posts.
 */
function pbd_vc_scripts() {
	if(is_single() ) {
		wp_enqueue_script(
			'jquery-validate',
			plugin_dir_url( __FILE__ ) . 'js/jquery.validate.min.js',
			array('jquery'),
			'1.10.0',
			true
		);
		
		wp_enqueue_style(
			'jquery-validate',
			plugin_dir_url( __FILE__ ) . 'css/style.css',
			array(),
			'1.0'
		);
	}
}
add_action('template_redirect', 'pbd_vc_scripts');

/**
 * Initiate the script.
 * Calls the validation options on the comment form.
 */
function pbd_vc_init() { ?>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			
			$('#commentform').validate({
				rules: {
					author: {
						required: true,
						minlength: 2
					},
					
					email: {
						required: true,
						email: true
					},
					
					url: {
						url: true
					},
					
					comment: {
						required: true,
						minlength: 20
					}
				},
				
				messages: {
					author: "Please enter a valid name.",
					email: "Please enter a valid email address.",
					url: "Please use a valid website address.",
					comment: "Message must be at least 20 characters."
				}
			});
		});
	</script>
<?php }
add_action('wp_footer', 'pbd_vc_init', 999);

?>