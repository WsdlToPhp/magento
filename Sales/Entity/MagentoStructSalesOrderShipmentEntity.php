<?php
/**
 * File for class MagentoStructSalesOrderShipmentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderShipmentEntity originally named salesOrderShipmentEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderShipmentEntity extends MagentoWsdlClass
{
	/**
	 * The increment_id
	 * @var MagentoStructString
	 */
	public $increment_id;
	/**
	 * The parent_id
	 * @var MagentoStructString
	 */
	public $parent_id;
	/**
	 * The store_id
	 * @var MagentoStructString
	 */
	public $store_id;
	/**
	 * The created_at
	 * @var MagentoStructString
	 */
	public $created_at;
	/**
	 * The updated_at
	 * @var MagentoStructString
	 */
	public $updated_at;
	/**
	 * The is_active
	 * @var MagentoStructString
	 */
	public $is_active;
	/**
	 * The shipping_address_id
	 * @var MagentoStructString
	 */
	public $shipping_address_id;
	/**
	 * The shipping_firstname
	 * @var MagentoStructString
	 */
	public $shipping_firstname;
	/**
	 * The shipping_lastname
	 * @var MagentoStructString
	 */
	public $shipping_lastname;
	/**
	 * The order_id
	 * @var MagentoStructString
	 */
	public $order_id;
	/**
	 * The order_increment_id
	 * @var MagentoStructString
	 */
	public $order_increment_id;
	/**
	 * The order_created_at
	 * @var MagentoStructString
	 */
	public $order_created_at;
	/**
	 * The total_qty
	 * @var MagentoStructString
	 */
	public $total_qty;
	/**
	 * The shipment_id
	 * @var MagentoStructString
	 */
	public $shipment_id;
	/**
	 * The items
	 * @var salesOrderShipmentItemEntityArray
	 */
	public $items;
	/**
	 * The tracks
	 * @var salesOrderShipmentTrackEntityArray
	 */
	public $tracks;
	/**
	 * The comments
	 * @var salesOrderShipmentCommentEntityArray
	 */
	public $comments;
	/**
	 * Constructor method for salesOrderShipmentEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_increment_id
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_is_active
	 * @param MagentoStructString $_shipping_address_id
	 * @param MagentoStructString $_shipping_firstname
	 * @param MagentoStructString $_shipping_lastname
	 * @param MagentoStructString $_order_id
	 * @param MagentoStructString $_order_increment_id
	 * @param MagentoStructString $_order_created_at
	 * @param MagentoStructString $_total_qty
	 * @param MagentoStructString $_shipment_id
	 * @param salesOrderShipmentItemEntityArray $_items
	 * @param salesOrderShipmentTrackEntityArray $_tracks
	 * @param salesOrderShipmentCommentEntityArray $_comments
	 * @return MagentoStructSalesOrderShipmentEntity
	 */
	public function __construct($_increment_id = NULL,$_parent_id = NULL,$_store_id = NULL,$_created_at = NULL,$_updated_at = NULL,$_is_active = NULL,$_shipping_address_id = NULL,$_shipping_firstname = NULL,$_shipping_lastname = NULL,$_order_id = NULL,$_order_increment_id = NULL,$_order_created_at = NULL,$_total_qty = NULL,$_shipment_id = NULL,$_items = NULL,$_tracks = NULL,$_comments = NULL)
	{
		parent::__construct(array('increment_id'=>$_increment_id,'parent_id'=>$_parent_id,'store_id'=>$_store_id,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'is_active'=>$_is_active,'shipping_address_id'=>$_shipping_address_id,'shipping_firstname'=>$_shipping_firstname,'shipping_lastname'=>$_shipping_lastname,'order_id'=>$_order_id,'order_increment_id'=>$_order_increment_id,'order_created_at'=>$_order_created_at,'total_qty'=>$_total_qty,'shipment_id'=>$_shipment_id,'items'=>$_items,'tracks'=>$_tracks,'comments'=>$_comments));
	}
	/**
	 * Get increment_id value
	 * @return MagentoStructString|null
	 */
	public function getIncrement_id()
	{
		return $this->increment_id;
	}
	/**
	 * Set increment_id value
	 * @param MagentoStructString $_increment_id the increment_id
	 * @return MagentoStructString
	 */
	public function setIncrement_id($_increment_id)
	{
		return ($this->increment_id = $_increment_id);
	}
	/**
	 * Get parent_id value
	 * @return MagentoStructString|null
	 */
	public function getParent_id()
	{
		return $this->parent_id;
	}
	/**
	 * Set parent_id value
	 * @param MagentoStructString $_parent_id the parent_id
	 * @return MagentoStructString
	 */
	public function setParent_id($_parent_id)
	{
		return ($this->parent_id = $_parent_id);
	}
	/**
	 * Get store_id value
	 * @return MagentoStructString|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructString $_store_id the store_id
	 * @return MagentoStructString
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
	}
	/**
	 * Get created_at value
	 * @return MagentoStructString|null
	 */
	public function getCreated_at()
	{
		return $this->created_at;
	}
	/**
	 * Set created_at value
	 * @param MagentoStructString $_created_at the created_at
	 * @return MagentoStructString
	 */
	public function setCreated_at($_created_at)
	{
		return ($this->created_at = $_created_at);
	}
	/**
	 * Get updated_at value
	 * @return MagentoStructString|null
	 */
	public function getUpdated_at()
	{
		return $this->updated_at;
	}
	/**
	 * Set updated_at value
	 * @param MagentoStructString $_updated_at the updated_at
	 * @return MagentoStructString
	 */
	public function setUpdated_at($_updated_at)
	{
		return ($this->updated_at = $_updated_at);
	}
	/**
	 * Get is_active value
	 * @return MagentoStructString|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructString $_is_active the is_active
	 * @return MagentoStructString
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Get shipping_address_id value
	 * @return MagentoStructString|null
	 */
	public function getShipping_address_id()
	{
		return $this->shipping_address_id;
	}
	/**
	 * Set shipping_address_id value
	 * @param MagentoStructString $_shipping_address_id the shipping_address_id
	 * @return MagentoStructString
	 */
	public function setShipping_address_id($_shipping_address_id)
	{
		return ($this->shipping_address_id = $_shipping_address_id);
	}
	/**
	 * Get shipping_firstname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_firstname()
	{
		return $this->shipping_firstname;
	}
	/**
	 * Set shipping_firstname value
	 * @param MagentoStructString $_shipping_firstname the shipping_firstname
	 * @return MagentoStructString
	 */
	public function setShipping_firstname($_shipping_firstname)
	{
		return ($this->shipping_firstname = $_shipping_firstname);
	}
	/**
	 * Get shipping_lastname value
	 * @return MagentoStructString|null
	 */
	public function getShipping_lastname()
	{
		return $this->shipping_lastname;
	}
	/**
	 * Set shipping_lastname value
	 * @param MagentoStructString $_shipping_lastname the shipping_lastname
	 * @return MagentoStructString
	 */
	public function setShipping_lastname($_shipping_lastname)
	{
		return ($this->shipping_lastname = $_shipping_lastname);
	}
	/**
	 * Get order_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_id()
	{
		return $this->order_id;
	}
	/**
	 * Set order_id value
	 * @param MagentoStructString $_order_id the order_id
	 * @return MagentoStructString
	 */
	public function setOrder_id($_order_id)
	{
		return ($this->order_id = $_order_id);
	}
	/**
	 * Get order_increment_id value
	 * @return MagentoStructString|null
	 */
	public function getOrder_increment_id()
	{
		return $this->order_increment_id;
	}
	/**
	 * Set order_increment_id value
	 * @param MagentoStructString $_order_increment_id the order_increment_id
	 * @return MagentoStructString
	 */
	public function setOrder_increment_id($_order_increment_id)
	{
		return ($this->order_increment_id = $_order_increment_id);
	}
	/**
	 * Get order_created_at value
	 * @return MagentoStructString|null
	 */
	public function getOrder_created_at()
	{
		return $this->order_created_at;
	}
	/**
	 * Set order_created_at value
	 * @param MagentoStructString $_order_created_at the order_created_at
	 * @return MagentoStructString
	 */
	public function setOrder_created_at($_order_created_at)
	{
		return ($this->order_created_at = $_order_created_at);
	}
	/**
	 * Get total_qty value
	 * @return MagentoStructString|null
	 */
	public function getTotal_qty()
	{
		return $this->total_qty;
	}
	/**
	 * Set total_qty value
	 * @param MagentoStructString $_total_qty the total_qty
	 * @return MagentoStructString
	 */
	public function setTotal_qty($_total_qty)
	{
		return ($this->total_qty = $_total_qty);
	}
	/**
	 * Get shipment_id value
	 * @return MagentoStructString|null
	 */
	public function getShipment_id()
	{
		return $this->shipment_id;
	}
	/**
	 * Set shipment_id value
	 * @param MagentoStructString $_shipment_id the shipment_id
	 * @return MagentoStructString
	 */
	public function setShipment_id($_shipment_id)
	{
		return ($this->shipment_id = $_shipment_id);
	}
	/**
	 * Get items value
	 * @return salesOrderShipmentItemEntityArray|null
	 */
	public function getItems()
	{
		return $this->items;
	}
	/**
	 * Set items value
	 * @param salesOrderShipmentItemEntityArray $_items the items
	 * @return salesOrderShipmentItemEntityArray
	 */
	public function setItems($_items)
	{
		return ($this->items = $_items);
	}
	/**
	 * Get tracks value
	 * @return salesOrderShipmentTrackEntityArray|null
	 */
	public function getTracks()
	{
		return $this->tracks;
	}
	/**
	 * Set tracks value
	 * @param salesOrderShipmentTrackEntityArray $_tracks the tracks
	 * @return salesOrderShipmentTrackEntityArray
	 */
	public function setTracks($_tracks)
	{
		return ($this->tracks = $_tracks);
	}
	/**
	 * Get comments value
	 * @return salesOrderShipmentCommentEntityArray|null
	 */
	public function getComments()
	{
		return $this->comments;
	}
	/**
	 * Set comments value
	 * @param salesOrderShipmentCommentEntityArray $_comments the comments
	 * @return salesOrderShipmentCommentEntityArray
	 */
	public function setComments($_comments)
	{
		return ($this->comments = $_comments);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderShipmentEntity
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>