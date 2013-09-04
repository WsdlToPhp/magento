<?php
/**
 * File for class MagentoStructCatalogProductTagUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTagUpdateEntity originally named catalogProductTagUpdateEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTagUpdateEntity extends MagentoWsdlClass
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
	 * Constructor method for catalogProductTagUpdateEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_status
	 * @param MagentoStructString $_base_popularity
	 * @return MagentoStructCatalogProductTagUpdateEntity
	 */
	public function __construct($_name = NULL,$_status = NULL,$_base_popularity = NULL)
	{
		parent::__construct(array('name'=>$_name,'status'=>$_status,'base_popularity'=>$_base_popularity));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTagUpdateEntity
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