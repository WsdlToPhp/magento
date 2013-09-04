<?php
/**
 * File for class MagentoStructCatalogProductTierPriceEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTierPriceEntity originally named catalogProductTierPriceEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTierPriceEntity extends MagentoWsdlClass
{
	/**
	 * The customer_group_id
	 * @var MagentoStructString
	 */
	public $customer_group_id;
	/**
	 * The website
	 * @var MagentoStructString
	 */
	public $website;
	/**
	 * The qty
	 * @var MagentoStructInt
	 */
	public $qty;
	/**
	 * The price
	 * @var MagentoStructDouble
	 */
	public $price;
	/**
	 * Constructor method for catalogProductTierPriceEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_customer_group_id
	 * @param MagentoStructString $_website
	 * @param MagentoStructInt $_qty
	 * @param MagentoStructDouble $_price
	 * @return MagentoStructCatalogProductTierPriceEntity
	 */
	public function __construct($_customer_group_id = NULL,$_website = NULL,$_qty = NULL,$_price = NULL)
	{
		parent::__construct(array('customer_group_id'=>$_customer_group_id,'website'=>$_website,'qty'=>$_qty,'price'=>$_price));
	}
	/**
	 * Get customer_group_id value
	 * @return MagentoStructString|null
	 */
	public function getCustomer_group_id()
	{
		return $this->customer_group_id;
	}
	/**
	 * Set customer_group_id value
	 * @param MagentoStructString $_customer_group_id the customer_group_id
	 * @return MagentoStructString
	 */
	public function setCustomer_group_id($_customer_group_id)
	{
		return ($this->customer_group_id = $_customer_group_id);
	}
	/**
	 * Get website value
	 * @return MagentoStructString|null
	 */
	public function getWebsite()
	{
		return $this->website;
	}
	/**
	 * Set website value
	 * @param MagentoStructString $_website the website
	 * @return MagentoStructString
	 */
	public function setWebsite($_website)
	{
		return ($this->website = $_website);
	}
	/**
	 * Get qty value
	 * @return MagentoStructInt|null
	 */
	public function getQty()
	{
		return $this->qty;
	}
	/**
	 * Set qty value
	 * @param MagentoStructInt $_qty the qty
	 * @return MagentoStructInt
	 */
	public function setQty($_qty)
	{
		return ($this->qty = $_qty);
	}
	/**
	 * Get price value
	 * @return MagentoStructDouble|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param MagentoStructDouble $_price the price
	 * @return MagentoStructDouble
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTierPriceEntity
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