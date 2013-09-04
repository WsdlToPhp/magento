<?php
/**
 * File for class MagentoStructOrderItemIdQty
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructOrderItemIdQty originally named orderItemIdQty
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructOrderItemIdQty extends MagentoWsdlClass
{
	/**
	 * The order_item_id
	 * @var MagentoStructInt
	 */
	public $order_item_id;
	/**
	 * The qty
	 * @var MagentoStructDouble
	 */
	public $qty;
	/**
	 * Constructor method for orderItemIdQty
	 * @see parent::__construct()
	 * @param MagentoStructInt $_order_item_id
	 * @param MagentoStructDouble $_qty
	 * @return MagentoStructOrderItemIdQty
	 */
	public function __construct($_order_item_id = NULL,$_qty = NULL)
	{
		parent::__construct(array('order_item_id'=>$_order_item_id,'qty'=>$_qty));
	}
	/**
	 * Get order_item_id value
	 * @return MagentoStructInt|null
	 */
	public function getOrder_item_id()
	{
		return $this->order_item_id;
	}
	/**
	 * Set order_item_id value
	 * @param MagentoStructInt $_order_item_id the order_item_id
	 * @return MagentoStructInt
	 */
	public function setOrder_item_id($_order_item_id)
	{
		return ($this->order_item_id = $_order_item_id);
	}
	/**
	 * Get qty value
	 * @return MagentoStructDouble|null
	 */
	public function getQty()
	{
		return $this->qty;
	}
	/**
	 * Set qty value
	 * @param MagentoStructDouble $_qty the qty
	 * @return MagentoStructDouble
	 */
	public function setQty($_qty)
	{
		return ($this->qty = $_qty);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructOrderItemIdQty
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