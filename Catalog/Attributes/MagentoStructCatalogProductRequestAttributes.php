<?php
/**
 * File for class MagentoStructCatalogProductRequestAttributes
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductRequestAttributes originally named catalogProductRequestAttributes
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductRequestAttributes extends MagentoWsdlClass
{
	/**
	 * The attributes
	 * @var ArrayOfString
	 */
	public $attributes;
	/**
	 * The additional_attributes
	 * @var ArrayOfString
	 */
	public $additional_attributes;
	/**
	 * Constructor method for catalogProductRequestAttributes
	 * @see parent::__construct()
	 * @param ArrayOfString $_attributes
	 * @param ArrayOfString $_additional_attributes
	 * @return MagentoStructCatalogProductRequestAttributes
	 */
	public function __construct($_attributes = NULL,$_additional_attributes = NULL)
	{
		parent::__construct(array('attributes'=>$_attributes,'additional_attributes'=>$_additional_attributes));
	}
	/**
	 * Get attributes value
	 * @return ArrayOfString|null
	 */
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	 * Set attributes value
	 * @param ArrayOfString $_attributes the attributes
	 * @return ArrayOfString
	 */
	public function setAttributes($_attributes)
	{
		return ($this->attributes = $_attributes);
	}
	/**
	 * Get additional_attributes value
	 * @return ArrayOfString|null
	 */
	public function getAdditional_attributes()
	{
		return $this->additional_attributes;
	}
	/**
	 * Set additional_attributes value
	 * @param ArrayOfString $_additional_attributes the additional_attributes
	 * @return ArrayOfString
	 */
	public function setAdditional_attributes($_additional_attributes)
	{
		return ($this->additional_attributes = $_additional_attributes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductRequestAttributes
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