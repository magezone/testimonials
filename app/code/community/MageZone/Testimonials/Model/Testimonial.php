<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonial model
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_Model_Testimonial extends Mage_Core_Model_Abstract {

	public function _construct() {
		parent::_construct();
		$this->_init('testimonials/testimonial');
	}

	public function getActiveTestimonialsOption() {
		$collection = Mage::getModel('testimonials/testimonial')
						->getCollection()
						->addFieldToFilter('status', array('eq' => '1'))
		;

		$options	= array();
		foreach ($collection as $testimonial) {
			$options[$testimonial->getTestimonialId()]	= $testimonial->getName();
		}

		return $options;
	}
}