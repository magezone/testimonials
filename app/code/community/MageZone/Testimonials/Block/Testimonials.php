<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonials block
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_Block_Testimonials extends Mage_Core_Block_Template {

	public function _prepareLayout() {
		return parent::_prepareLayout();
	}

	public function getTestimonials() {
		return 'Testimonials will go here';
	}
}