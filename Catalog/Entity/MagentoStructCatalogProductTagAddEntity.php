<?php
/**
 * File for class MagentoStructCatalogProductTagAddEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTagAddEntity originally named catalogProductTagAddEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTagAddEntity extends MagentoWsdlClass
{
	/**
	 * The tag
	 * @var MagentoStructString
	 */
	public $tag;
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The customer_id
	 * @var MagentoStructString
	 */
	public $customer_id;
	/**
	 * The store
	 * @var MagentoStructString
	 */
	public $store;
	/**
	 * Constructor method for catalogProductTagAddEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_tag
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_customer_id
	 * @param MagentoStructString $_store
	 * @return MagentoStructCatalogProductTagAddEntity
	 */
	public function __construct($_tag = NULL,$_product_id = NULL,$_customer_id = NULL,$_store = NULL)
	{
		parent::__construct(array('tag'=>$_tag,'product_id'=>$_product_id,'customer_id'=>$_customer_id,'store'=>$_store));
	}
	/**
	 * Get tag value
	 * @return MagentoStructString|null
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set tag value
	 * @param MagentoStructString $_tag the tag
	 * @return MagentoStructString
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
	}
	/**
	 * Get product_id value
	 * @return MagentoStructString|null
	 */
	public function getProduct_id()
	{
		return $this->product_id;
	}
	/**
	 * Set product_id value
	 * @param MagentoStructString $_product_id the product_id
	 * @return MagentoStructString
	 */
	public function setProduct_id($_product_id)
	{
		return ($this->product_id = $_product_id);
	}
	/**
	 * Get customer_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_id()
	{
		return $this->customer_id;
	}
	/**
	 * Set customer_id value
	 * @param MagentoStructString $_customer_id the customer_id
	 * @return MagentoStructString
	 */
	public function setCustomer_id($_customer_id)
	{
		return ($this->customer_id = $_customer_id);
	}
	/**
	 * Get store value
	 * @return MagentoStructString|null
	 */
	public function getStore()
	{
		return $this->store;
	}
	/**
	 * Set store value
	 * @param MagentoStructString $_store the store
	 * @return MagentoStructString
	 */
	public function setStore($_store)
	{
		return ($this->store = $_store);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTagAddEntity
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