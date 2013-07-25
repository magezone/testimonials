<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonials Adminhtml left menu
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_Block_Adminhtml_Testimonial_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs {

	public function __construct() {
		parent::__construct();
		$this->setId('testimonial_tabs');
		$this->setDestElementId('edit_form');
		$this->setTitle(Mage::helper('testimonials')->__('Testimonial Information'));
	}

	protected function _beforeToHtml() {
		$this->addTab('form_section', array(
			'label'		=> Mage::helper('testimonials')->__('General'),
			'title'		=> Mage::helper('testimonials')->__('General'),
			'content'	=> $this->getLayout()->createBlock('testimonials/adminhtml_testimonial_edit_tab_general')->toHtml(),
		));

		return parent::_beforeToHtml();
	}
}