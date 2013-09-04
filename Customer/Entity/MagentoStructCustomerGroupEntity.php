<?php
/**
 * File for class MagentoStructCustomerGroupEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCustomerGroupEntity originally named customerGroupEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCustomerGroupEntity extends MagentoWsdlClass
{
	/**
	 * The customer_group_id
	 * @var MagentoStructInt
	 */
	public $customer_group_id;
	/**
	 * The customer_group_code
	 * @var MagentoStructString
	 */
	public $customer_group_code;
	/**
	 * Constructor method for customerGroupEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_customer_group_id
	 * @param MagentoStructString $_customer_group_code
	 * @return MagentoStructCustomerGroupEntity
	 */
	public function __construct($_customer_group_id = NULL,$_customer_group_code = NULL)
	{
		parent::__construct(array('customer_group_id'=>$_customer_group_id,'customer_group_code'=>$_customer_group_code));
	}
	/**
	 * Get customer_group_id value
	 * @return MagentoStructInt|null
	 */
	public function getCustomer_group_id()
	{
		return $this->customer_group_id;
	}
	/**
	 * Set customer_group_id value
	 * @param MagentoStructInt $_customer_group_id the customer_group_id
	 * @return MagentoStructInt
	 */
	public function setCustomer_group_id($_customer_group_id)
	{
		return ($this->customer_group_id = $_customer_group_id);
	}
	/**
	 * Get customer_group_code value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_group_code()
	{
		return $this->customer_group_code;
	}
	/**
	 * Set customer_group_code value
	 * @param MagentoStructString $_customer_group_code the customer_group_code
	 * @return MagentoStructString
	 */
	public function setCustomer_group_code($_customer_group_code)
	{
		return ($this->customer_group_code = $_customer_group_code);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCustomerGroupEntity
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