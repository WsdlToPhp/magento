<?php
/**
 * File for class MagentoStructCatalogProductLinkAttributeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductLinkAttributeEntity originally named catalogProductLinkAttributeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductLinkAttributeEntity extends MagentoWsdlClass
{
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * Constructor method for catalogProductLinkAttributeEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_type
	 * @return MagentoStructCatalogProductLinkAttributeEntity
	 */
	public function __construct($_code = NULL,$_type = NULL)
	{
		parent::__construct(array('code'=>$_code,'type'=>$_type));
	}
	/**
	 * Get code value
	 * @return MagentoStructString|null
	 */
	public function getCode()
	{
		return $this->code;
	}
	/**
	 * Set code value
	 * @param MagentoStructString $_code the code
	 * @return MagentoStructString
	 */
	public function setCode($_code)
	{
		return ($this->code = $_code);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductLinkAttributeEntity
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