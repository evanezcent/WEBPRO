/**
 * Shortcode Icons
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.4
 */
/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */

// Init handlers
jQuery(document).on('action.ready_trx_addons', function(e, container) {
	"use strict";

	if ( jQuery('a.sc_printbuttons_item').length > 0 ) {
		jQuery('a.sc_printbuttons_item:not(.init)')
			.addClass('init')
			.on('click', function (e) {
			var $this = jQuery(this);
			if ($this.hasClass('print_pdf')) {
				printJS($this.attr('href'));
				e.preventDefault();
			}
			if ($this.hasClass('print_img')) {
				printJS($this.attr('href'), 'image');
				e.preventDefault();
			}

		});
	}

});
