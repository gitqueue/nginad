<?php
/**
 * NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2016 NginAd Foundation. All Rights Reserved
 * @license GPLv3
 */

namespace _factory;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\Feature;


class PmpDealPublisherWebsiteToInsertionOrder extends \_factory\CachedTableRead
{

	static protected $instance = null;

	public static function get_instance() {

		if (self::$instance == null):
			self::$instance = new \_factory\PmpDealPublisherWebsiteToInsertionOrder();
		endif;
		return self::$instance;
	}


    function __construct() {

            $this->table = 'PmpDealPublisherWebsiteToInsertionOrder';
            $this->featureSet = new Feature\FeatureSet();
            $this->featureSet->addFeature(new Feature\GlobalAdapterFeature());
            $this->initialize();
    }

    /**
     * Query database and return a row of results.
     * 
     * @param string $params
     * @return Ambigous <\Zend\Db\ResultSet\ResultSet, NULL, \Zend\Db\ResultSet\ResultSetInterface>|NULL
     */
    public function get_row($params = null) {
        // http://files.zend.com/help/Zend-Framework/zend.db.select.html

        $obj_list = array();

        $resultSet = $this->select(function (\Zend\Db\Sql\Select $select) use ($params) {
        	foreach ($params as $name => $value):
        	$select->where(
        			$select->where->equalTo($name, $value)
        	);
        	endforeach;
        	$select->limit(1, 0);
        	$select->order('PmpDealPublisherWebsiteToInsertionOrderID');

        }
        	);

    	    foreach ($resultSet as $obj):
    	         return $obj;
    	    endforeach;

        	return null;
    }

    /**
     * Query database and return results.
     * 
     * @param string $params
     * @return multitype:Ambigous <\Zend\Db\ResultSet\ResultSet, NULL, \Zend\Db\ResultSet\ResultSetInterface>
     */
    public function get($params = null) {
        	// http://files.zend.com/help/Zend-Framework/zend.db.select.html

        $obj_list = array();

    	$resultSet = $this->select(function (\Zend\Db\Sql\Select $select) use ($params) {
        		foreach ($params as $name => $value):
        		$select->where(
        				$select->where->equalTo($name, $value)
        		);
        		endforeach;
        		//$select->limit(10, 0);
        		$select->order('PmpDealPublisherWebsiteToInsertionOrderID');

        	}
    	);

    	    foreach ($resultSet as $obj):
    	        $obj_list[] = $obj;
    	    endforeach;

    		return $obj_list;
    }

    public function savePmpDealPublisherWebsiteToInsertionOrder(\model\PmpDealPublisherWebsiteToInsertionOrder $PmpDealPublisherWebsiteToInsertionOrder) {
    	$data = array(
    			'InsertionOrderID'					=> $PmpDealPublisherWebsiteToInsertionOrder->InsertionOrderID,
    			'PublisherWebsiteID'				=> $PmpDealPublisherWebsiteToInsertionOrder->PublisherWebsiteID,
    			'PublisherWebsiteLocal'				=> $PmpDealPublisherWebsiteToInsertionOrder->PublisherWebsiteLocal,
    			'PublisherWebsiteDescription'		=> $PmpDealPublisherWebsiteToInsertionOrder->PublisherWebsiteDescription,
    			'Enabled'							=> $PmpDealPublisherWebsiteToInsertionOrder->Enabled,
    			'DateUpdated'        				=> $PmpDealPublisherWebsiteToInsertionOrder->DateUpdated
    	);
    	
    	$pmp_deal_publisher_website_to_io_id = (int)$PmpDealPublisherWebsiteToInsertionOrder->PmpDealPublisherWebsiteToInsertionOrderID;
    	if ($pmp_deal_publisher_website_to_io_id === 0):
	    	$data['DateCreated'] 				= $PmpDealPublisherWebsiteToInsertionOrder->DateCreated;
	    	$this->insert($data);
	    	return $this->getLastInsertValue();
    	else:
	    	$this->update($data, array('PmpDealPublisherWebsiteToInsertionOrderID' => $pmp_deal_publisher_website_to_io_id));
	    	return $pmp_deal_publisher_website_to_io_id;
    	endif;
    }
    
    public function deletePmpDealPublisherWebsiteToInsertionOrderByInsertionOrderID($insertion_order_id) {
    	$this->delete(array('InsertionOrderID' => $insertion_order_id));
    }
    
};
?>