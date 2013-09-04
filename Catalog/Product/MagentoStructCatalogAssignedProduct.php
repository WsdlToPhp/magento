<?php
/**
 * File for class MagentoStructCatalogAssignedProduct
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogAssignedProduct originally named catalogAssignedProduct
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogAssignedProduct extends MagentoWsdlClass
{
	/**
	 * The product_id
	 * @var MagentoStructInt
	 */
	public $product_id;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The set
	 * @var MagentoStructInt
	 */
	public $set;
	/**
	 * The sku
	 * @var MagentoStructString
	 */
	public $sku;
	/**
	 * The position
	 * @var MagentoStructInt
	 */
	public $position;
	/**
	 * Constructor method for catalogAssignedProduct
	 * @see parent::__construct()
	 * @param MagentoStructInt $_product_id
	 * @param MagentoStructString $_type
	 * @param MagentoStructInt $_set
	 * @param MagentoStructString $_sku
	 * @param MagentoStructInt $_position
	 * @return MagentoStructCatalogAssignedProduct
	 */
	public function __construct($_product_id = NULL,$_type = NULL,$_set = NULL,$_sku = NULL,$_position = NULL)
	{
		parent::__construct(array('product_id'=>$_product_id,'type'=>$_type,'set'=>$_set,'sku'=>$_sku,'position'=>$_position));
	}
	/**
	 * Get product_id value
	 * @return MagentoStructInt|null
	 */
	public function getProduct_id()
	{
		return $this->product_id;
	}
	/**
	 * Set product_id value
	 * @param MagentoStructInt $_product_id the product_id
	 * @return MagentoStructInt
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
	 * @return MagentoStructInt|null
	 */
	public function getSet()
	{
		return $this->set;
	}
	/**
	 * Set set value
	 * @param MagentoStructInt $_set the set
	 * @return MagentoStructInt
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
	 * @return MagentoStructInt|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructInt $_position the position
	 * @return MagentoStructInt
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogAssignedProduct
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