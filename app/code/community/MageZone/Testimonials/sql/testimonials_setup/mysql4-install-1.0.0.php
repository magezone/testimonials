<?php
/**
 * @copyright	Copyright (c) 2013 MageZone (http://www.magezone.com). All rights reserved.
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Testimonials install
 *
 * @category	MageZone
 * @package		MageZone_Testimonials
 * @author		MageZone (admin@magezone.com)
 */

/** @var $installer Mage_Customer_Model_Entity_Setup */
$installer	= $this;

$installer->startSetup();

$installer->run("
-- DROP TABLE IF EXISTS {$installer->getTable('magezone_testimonials')};
CREATE TABLE {$installer->getTable('magezone_testimonials')} (
	`testimonial_id`		int(11) unsigned NOT NULL auto_increment,
	`name`				varchar(255) NOT NULL DEFAULT '',
	`description`		text NOT NULL DEFAULT '',
	`status`			smallint(6) NOT NULL DEFAULT 0,
	`created_time`		datetime NULL,
	`updated_time`		datetime NULL,
	
	PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
");

$installer->endSetup();