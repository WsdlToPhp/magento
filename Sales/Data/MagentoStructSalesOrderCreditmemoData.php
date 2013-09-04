<?php
/**
 * File for class MagentoStructSalesOrderCreditmemoData
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructSalesOrderCreditmemoData originally named salesOrderCreditmemoData
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructSalesOrderCreditmemoData extends MagentoWsdlClass
{
	/**
	 * The qtys
	 * @var orderItemIdQtyArray
	 */
	public $qtys;
	/**
	 * The shipping_amount
	 * @var MagentoStructDouble
	 */
	public $shipping_amount;
	/**
	 * The adjustment_positive
	 * @var MagentoStructDouble
	 */
	public $adjustment_positive;
	/**
	 * The adjustment_negative
	 * @var MagentoStructDouble
	 */
	public $adjustment_negative;
	/**
	 * Constructor method for salesOrderCreditmemoData
	 * @see parent::__construct()
	 * @param orderItemIdQtyArray $_qtys
	 * @param MagentoStructDouble $_shipping_amount
	 * @param MagentoStructDouble $_adjustment_positive
	 * @param MagentoStructDouble $_adjustment_negative
	 * @return MagentoStructSalesOrderCreditmemoData
	 */
	public function __construct($_qtys = NULL,$_shipping_amount = NULL,$_adjustment_positive = NULL,$_adjustment_negative = NULL)
	{
		parent::__construct(array('qtys'=>$_qtys,'shipping_amount'=>$_shipping_amount,'adjustment_positive'=>$_adjustment_positive,'adjustment_negative'=>$_adjustment_negative));
	}
	/**
	 * Get qtys value
	 * @return orderItemIdQtyArray|null
	 */
	public function getQtys()
	{
		return $this->qtys;
	}
	/**
	 * Set qtys value
	 * @param orderItemIdQtyArray $_qtys the qtys
	 * @return orderItemIdQtyArray
	 */
	public function setQtys($_qtys)
	{
		return ($this->qtys = $_qtys);
	}
	/**
	 * Get shipping_amount value
	 * @return MagentoStructDouble|null
	 */
	public function getShipping_amount()
	{
		return $this->shipping_amount;
	}
	/**
	 * Set shipping_amount value
	 * @param MagentoStructDouble $_shipping_amount the shipping_amount
	 * @return MagentoStructDouble
	 */
	public function setShipping_amount($_shipping_amount)
	{
		return ($this->shipping_amount = $_shipping_amount);
	}
	/**
	 * Get adjustment_positive value
	 * @return MagentoStructDouble|null
	 */
	public function getAdjustment_positive()
	{
		return $this->adjustment_positive;
	}
	/**
	 * Set adjustment_positive value
	 * @param MagentoStructDouble $_adjustment_positive the adjustment_positive
	 * @return MagentoStructDouble
	 */
	public function setAdjustment_positive($_adjustment_positive)
	{
		return ($this->adjustment_positive = $_adjustment_positive);
	}
	/**
	 * Get adjustment_negative value
	 * @return MagentoStructDouble|null
	 */
	public function getAdjustment_negative()
	{
		return $this->adjustment_negative;
	}
	/**
	 * Set adjustment_negative value
	 * @param MagentoStructDouble $_adjustment_negative the adjustment_negative
	 * @return MagentoStructDouble
	 */
	public function setAdjustment_negative($_adjustment_negative)
	{
		return ($this->adjustment_negative = $_adjustment_negative);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructSalesOrderCreditmemoData
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