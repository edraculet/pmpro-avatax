<?php

/**
 * Get the Avalara product category for a particular level.
 *
 * @param int $level_id to get category for
 * @return string product category
 */
function pmproava_get_product_category($level_id) {
	$pmproava_use_default_product_category = get_pmpro_membership_level_meta( $level_id, 'pmproava_use_default_product_category', true);
	if($pmproava_use_default_product_category == 'no') {
		$pmproava_product_category = get_pmpro_membership_level_meta( $level_id, 'pmproava_product_category', true);
	}
	return $pmproava_product_category ?: PMPROAVA_GENERAL_MERCHANDISE;
}