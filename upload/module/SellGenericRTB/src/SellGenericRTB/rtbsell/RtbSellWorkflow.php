<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace rtbsell;

abstract class RtbSellWorkflow {
	
	protected $rtb_provider = "none";
	public static $rtb_child_class_name = "none";
	
	// singleton
	private static $_instance;
	
	public static function get_instance() {
		if (self::$_instance == null):
		self::$_instance = new self::$rtb_child_class_name();
		endif;
		return self::$_instance;
	}
	
}
