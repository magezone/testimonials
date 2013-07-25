<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonials index controller
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */
class MageZone_Testimonials_IndexController extends Mage_Core_Controller_Front_Action {

	public function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}