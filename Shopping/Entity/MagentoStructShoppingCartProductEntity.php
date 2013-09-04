<?php
/**
 * File for class MagentoStructShoppingCartProductEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructShoppingCartProductEntity originally named shoppingCartProductEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructShoppingCartProductEntity extends MagentoWsdlClass
{
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The qty
	 * @var MagentoStructDouble
	 */
	public $qty;
	/**
	 * The options
	 * @var associativeArray
	 */
	public $options;
	/**
	 * The bundle_option
	 * @var associativeArray
	 */
	public $bundle_option;
	/**
	 * The bundle_option_qty
	 * @var associativeArray
	 */
	public $bundle_option_qty;
	/**
	 * The links
	 * @var ArrayOfString
	 */
	public $links;
	/**
	 * Constructor method for shoppingCartProductEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_sku
	 * @param MagentoStructDouble $_qty
	 * @param associativeArray $_options
	 * @param associativeArray $_bundle_option
	 * @param associativeArray $_bundle_option_qty
	 * @param ArrayOfString $_links
	 * @return MagentoStructShoppingCartProductEntity
	 */
	public function __construct($_product_id = NULL,$_sku = NULL,$_qty = NULL,$_options = NULL,$_bundle_option = NULL,$_bundle_option_qty = NULL,$_links = NULL)
	{
		parent::__construct(array('product_id'=>$_product_id,'sku'=>$_sku,'qty'=>$_qty,'options'=>$_options,'bundle_option'=>$_bundle_option,'bundle_option_qty'=>$_bundle_option_qty,'links'=>$_links));
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
	 * Get options value
	 * @return associativeArray|null
	 */
	public function getOptions()
	{
		return $this->options;
	}
	/**
	 * Set options value
	 * @param associativeArray $_options the options
	 * @return associativeArray
	 */
	public function setOptions($_options)
	{
		return ($this->options = $_options);
	}
	/**
	 * Get bundle_option value
	 * @return associativeArray|null
	 */
	public function getBundle_option()
	{
		return $this->bundle_option;
	}
	/**
	 * Set bundle_option value
	 * @param associativeArray $_bundle_option the bundle_option
	 * @return associativeArray
	 */
	public function setBundle_option($_bundle_option)
	{
		return ($this->bundle_option = $_bundle_option);
	}
	/**
	 * Get bundle_option_qty value
	 * @return associativeArray|null
	 */
	public function getBundle_option_qty()
	{
		return $this->bundle_option_qty;
	}
	/**
	 * Set bundle_option_qty value
	 * @param associativeArray $_bundle_option_qty the bundle_option_qty
	 * @return associativeArray
	 */
	public function setBundle_option_qty($_bundle_option_qty)
	{
		return ($this->bundle_option_qty = $_bundle_option_qty);
	}
	/**
	 * Get links value
	 * @return ArrayOfString|null
	 */
	public function getLinks()
	{
		return $this->links;
	}
	/**
	 * Set links value
	 * @param ArrayOfString $_links the links
	 * @return ArrayOfString
	 */
	public function setLinks($_links)
	{
		return ($this->links = $_links);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructShoppingCartProductEntity
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