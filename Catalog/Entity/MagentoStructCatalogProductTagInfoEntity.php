<?php
/**
 * File for class MagentoStructCatalogProductTagInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTagInfoEntity originally named catalogProductTagInfoEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTagInfoEntity extends MagentoWsdlClass
{
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The status
	 * @var MagentoStructString
	 */
	public $status;
	/**
	 * The base_popularity
	 * @var MagentoStructString
	 */
	public $base_popularity;
	/**
	 * The products
	 * @var associativeArray
	 */
	public $products;
	/**
	 * Constructor method for catalogProductTagInfoEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_base_popularity
	 * @param associativeArray $_products
	 * @return MagentoStructCatalogProductTagInfoEntity
	 */
	public function __construct($_name = NULL,$_status = NULL,$_base_popularity = NULL,$_products = NULL)
	{
		parent::__construct(array('name'=>$_name,'status'=>$_status,'base_popularity'=>$_base_popularity,'products'=>$_products));
	}
	/**
	 * Get name value
	 * @return MagentoStructString|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param MagentoStructString $_name the name
	 * @return MagentoStructString
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get status value
	 * @return MagentoStructString|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param MagentoStructString $_status the status
	 * @return MagentoStructString
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get base_popularity value
	 * @return MagentoStructString|null
	 */
	public function getBase_popularity()
	{
		return $this->base_popularity;
	}
	/**
	 * Set base_popularity value
	 * @param MagentoStructString $_base_popularity the base_popularity
	 * @return MagentoStructString
	 */
	public function setBase_popularity($_base_popularity)
	{
		return ($this->base_popularity = $_base_popularity);
	}
	/**
	 * Get products value
	 * @return associativeArray|null
	 */
	public function getProducts()
	{
		return $this->products;
	}
	/**
	 * Set products value
	 * @param associativeArray $_products the products
	 * @return associativeArray
	 */
	public function setProducts($_products)
	{
		return ($this->products = $_products);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTagInfoEntity
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