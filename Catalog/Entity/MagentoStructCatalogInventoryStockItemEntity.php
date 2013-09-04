<?php
/**
 * File for class MagentoStructCatalogInventoryStockItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogInventoryStockItemEntity originally named catalogInventoryStockItemEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogInventoryStockItemEntity extends MagentoWsdlClass
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
	 * @var MagentoStructString
	 */
	public $qty;
	/**
	 * The is_in_stock
	 * @var MagentoStructString
	 */
	public $is_in_stock;
	/**
	 * Constructor method for catalogInventoryStockItemEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_qty
	 * @param MagentoStructString $_is_in_stock
	 * @return MagentoStructCatalogInventoryStockItemEntity
	 */
	public function __construct($_product_id = NULL,$_sku = NULL,$_qty = NULL,$_is_in_stock = NULL)
	{
		parent::__construct(array('product_id'=>$_product_id,'sku'=>$_sku,'qty'=>$_qty,'is_in_stock'=>$_is_in_stock));
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
	 * @return MagentoStructString|null
	 */
	public function getQty()
	{
		return $this->qty;
	}
	/**
	 * Set qty value
	 * @param MagentoStructString $_qty the qty
	 * @return MagentoStructString
	 */
	public function setQty($_qty)
	{
		return ($this->qty = $_qty);
	}
	/**
	 * Get is_in_stock value
	 * @return MagentoStructString|null
	 */
	public function getIs_in_stock()
	{
		return $this->is_in_stock;
	}
	/**
	 * Set is_in_stock value
	 * @param MagentoStructString $_is_in_stock the is_in_stock
	 * @return MagentoStructString
	 */
	public function setIs_in_stock($_is_in_stock)
	{
		return ($this->is_in_stock = $_is_in_stock);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogInventoryStockItemEntity
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