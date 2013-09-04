<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionValueInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionValueInfoEntity originally named catalogProductCustomOptionValueInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionValueInfoEntity extends MagentoWsdlClass
{
	/**
	 * The value_id
	 * @var MagentoStructString
	 */
	public $value_id;
	/**
	 * The option_id
	 * @var MagentoStructString
	 */
	public $option_id;
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
	 * The default_price
	 * @var MagentoStructString
	 */
	public $default_price;
	/**
	 * The default_price_type
	 * @var MagentoStructString
	 */
	public $default_price_type;
	/**
	 * The store_price
	 * @var MagentoStructString
	 */
	public $store_price;
	/**
	 * The store_price_type
	 * @var MagentoStructString
	 */
	public $store_price_type;
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
	 * The default_title
	 * @var MagentoStructString
	 */
	public $default_title;
	/**
	 * The store_title
	 * @var MagentoStructString
	 */
	public $store_title;
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * Constructor method for catalogProductCustomOptionValueInfoEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_value_id
	 * @param MagentoStructString $_option_id
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_sort_order
	 * @param MagentoStructString $_default_price
	 * @param MagentoStructString $_default_price_type
	 * @param MagentoStructString $_store_price
	 * @param MagentoStructString $_store_price_type
	 * @param MagentoStructString $_price
	 * @param MagentoStructString $_price_type
	 * @param MagentoStructString $_default_title
	 * @param MagentoStructString $_store_title
	 * @param MagentoStructString $_title
	 * @return MagentoStructCatalogProductCustomOptionValueInfoEntity
	 */
	public function __construct($_value_id = NULL,$_option_id = NULL,$_sku = NULL,$_sort_order = NULL,$_default_price = NULL,$_default_price_type = NULL,$_store_price = NULL,$_store_price_type = NULL,$_price = NULL,$_price_type = NULL,$_default_title = NULL,$_store_title = NULL,$_title = NULL)
	{
		parent::__construct(array('value_id'=>$_value_id,'option_id'=>$_option_id,'sku'=>$_sku,'sort_order'=>$_sort_order,'default_price'=>$_default_price,'default_price_type'=>$_default_price_type,'store_price'=>$_store_price,'store_price_type'=>$_store_price_type,'price'=>$_price,'price_type'=>$_price_type,'default_title'=>$_default_title,'store_title'=>$_store_title,'title'=>$_title));
	}
	/**
	 * Get value_id value
	 * @return MagentoStructString|null
	 */
	public function getValue_id()
	{
		return $this->value_id;
	}
	/**
	 * Set value_id value
	 * @param MagentoStructString $_value_id the value_id
	 * @return MagentoStructString
	 */
	public function setValue_id($_value_id)
	{
		return ($this->value_id = $_value_id);
	}
	/**
	 * Get option_id value
	 * @return MagentoStructString|null
	 */
	public function getOption_id()
	{
		return $this->option_id;
	}
	/**
	 * Set option_id value
	 * @param MagentoStructString $_option_id the option_id
	 * @return MagentoStructString
	 */
	public function setOption_id($_option_id)
	{
		return ($this->option_id = $_option_id);
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
	 * Get default_price value
	 * @return MagentoStructString|null
	 */
	public function getDefault_price()
	{
		return $this->default_price;
	}
	/**
	 * Set default_price value
	 * @param MagentoStructString $_default_price the default_price
	 * @return MagentoStructString
	 */
	public function setDefault_price($_default_price)
	{
		return ($this->default_price = $_default_price);
	}
	/**
	 * Get default_price_type value
	 * @return MagentoStructString|null
	 */
	public function getDefault_price_type()
	{
		return $this->default_price_type;
	}
	/**
	 * Set default_price_type value
	 * @param MagentoStructString $_default_price_type the default_price_type
	 * @return MagentoStructString
	 */
	public function setDefault_price_type($_default_price_type)
	{
		return ($this->default_price_type = $_default_price_type);
	}
	/**
	 * Get store_price value
	 * @return MagentoStructString|null
	 */
	public function getStore_price()
	{
		return $this->store_price;
	}
	/**
	 * Set store_price value
	 * @param MagentoStructString $_store_price the store_price
	 * @return MagentoStructString
	 */
	public function setStore_price($_store_price)
	{
		return ($this->store_price = $_store_price);
	}
	/**
	 * Get store_price_type value
	 * @return MagentoStructString|null
	 */
	public function getStore_price_type()
	{
		return $this->store_price_type;
	}
	/**
	 * Set store_price_type value
	 * @param MagentoStructString $_store_price_type the store_price_type
	 * @return MagentoStructString
	 */
	public function setStore_price_type($_store_price_type)
	{
		return ($this->store_price_type = $_store_price_type);
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
	 * Get default_title value
	 * @return MagentoStructString|null
	 */
	public function getDefault_title()
	{
		return $this->default_title;
	}
	/**
	 * Set default_title value
	 * @param MagentoStructString $_default_title the default_title
	 * @return MagentoStructString
	 */
	public function setDefault_title($_default_title)
	{
		return ($this->default_title = $_default_title);
	}
	/**
	 * Get store_title value
	 * @return MagentoStructString|null
	 */
	public function getStore_title()
	{
		return $this->store_title;
	}
	/**
	 * Set store_title value
	 * @param MagentoStructString $_store_title the store_title
	 * @return MagentoStructString
	 */
	public function setStore_title($_store_title)
	{
		return ($this->store_title = $_store_title);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionValueInfoEntity
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