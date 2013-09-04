<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionValueUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionValueUpdateEntity originally named catalogProductCustomOptionValueUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionValueUpdateEntity extends MagentoWsdlClass
{
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The price
	 * @var MagentoStructString
	 */
	public $price;
	/**
	 * The price_type
	 * @var MagentoStructString
	 */
	public $price_type;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The sort_order
	 * @var MagentoStructString
	 */
	public $sort_order;
	/**
	 * Constructor method for catalogProductCustomOptionValueUpdateEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_price_type
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_sort_order
	 * @return MagentoStructCatalogProductCustomOptionValueUpdateEntity
	 */
	public function __construct($_title = NULL,$_price = NULL,$_price_type = NULL,$_sku = NULL,$_sort_order = NULL)
	{
		parent::__construct(array('title'=>$_title,'price'=>$_price,'price_type'=>$_price_type,'sku'=>$_sku,'sort_order'=>$_sort_order));
	}
	/**
	 * Get title value
	 * @return MagentoStructString|null
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set title value
	 * @param MagentoStructString $_title the title
	 * @return MagentoStructString
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
	}
	/**
	 * Get price value
	 * @return MagentoStructString|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param MagentoStructString $_price the price
	 * @return MagentoStructString
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Get price_type value
	 * @return MagentoStructString|null
	 */
	public function getPrice_type()
	{
		return $this->price_type;
	}
	/**
	 * Set price_type value
	 * @param MagentoStructString $_price_type the price_type
	 * @return MagentoStructString
	 */
	public function setPrice_type($_price_type)
	{
		return ($this->price_type = $_price_type);
	}
	/**
	 * Get sku value
	 * @return MagentoStructString|null
	 */
	public function getSku()
	{
		return $this->sku;
	}
	/**
	 * Set sku value
	 * @param MagentoStructString $_sku the sku
	 * @return MagentoStructString
	 */
	public function setSku($_sku)
	{
		return ($this->sku = $_sku);
	}
	/**
	 * Get sort_order value
	 * @return MagentoStructString|null
	 */
	public function getSort_order()
	{
		return $this->sort_order;
	}
	/**
	 * Set sort_order value
	 * @param MagentoStructString $_sort_order the sort_order
	 * @return MagentoStructString
	 */
	public function setSort_order($_sort_order)
	{
		return ($this->sort_order = $_sort_order);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionValueUpdateEntity
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