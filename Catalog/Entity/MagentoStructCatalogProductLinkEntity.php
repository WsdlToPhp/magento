<?php
/**
 * File for class MagentoStructCatalogProductLinkEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductLinkEntity originally named catalogProductLinkEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductLinkEntity extends MagentoWsdlClass
{
	/**
	 * The product_id
	 * @var MagentoStructString
	 */
	public $product_id;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The set
	 * @var MagentoStructString
	 */
	public $set;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The position
	 * @var MagentoStructString
	 */
	public $position;
	/**
	 * The qty
	 * @var MagentoStructString
	 */
	public $qty;
	/**
	 * Constructor method for catalogProductLinkEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_product_id
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_set
	 * @param MagentoStructString $_sku
	 * @param MagentoStructString $_position
	 * @param MagentoStructString $_qty
	 * @return MagentoStructCatalogProductLinkEntity
	 */
	public function __construct($_product_id = NULL,$_type = NULL,$_set = NULL,$_sku = NULL,$_position = NULL,$_qty = NULL)
	{
		parent::__construct(array('product_id'=>$_product_id,'type'=>$_type,'set'=>$_set,'sku'=>$_sku,'position'=>$_position,'qty'=>$_qty));
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
	 * Get type value
	 * @return MagentoStructString|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param MagentoStructString $_type the type
	 * @return MagentoStructString
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get set value
	 * @return MagentoStructString|null
	 */
	public function getSet()
	{
		return $this->set;
	}
	/**
	 * Set set value
	 * @param MagentoStructString $_set the set
	 * @return MagentoStructString
	 */
	public function setSet($_set)
	{
		return ($this->set = $_set);
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
	 * Get position value
	 * @return MagentoStructString|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructString $_position the position
	 * @return MagentoStructString
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductLinkEntity
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