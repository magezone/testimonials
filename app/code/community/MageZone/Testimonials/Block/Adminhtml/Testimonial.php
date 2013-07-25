<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonial Adminhtml block
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_Block_Adminhtml_Testimonial extends Mage_Adminhtml_Block_Widget_Grid_Container {

	public function __construct() {
		$this->_controller		= 'adminhtml_testimonial';
		$this->_blockGroup		= 'testimonials';
		$this->_headerText		= Mage::helper('testimonials')->__('Manage Testimonials');
		$this->_addButtonLabel	= Mage::helper('testimonials')->__('Add New Testimonial');
		parent::__construct();
	}
}