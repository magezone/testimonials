<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonial entity resource model
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_Model_Mysql4_Testimonial extends Mage_Core_Model_Mysql4_Abstract {

	public function _construct() {
		$this->_init('testimonials/testimonial', 'testimonial_id');
	}
}