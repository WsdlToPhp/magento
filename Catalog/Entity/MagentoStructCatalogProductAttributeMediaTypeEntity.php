<?php
/**
 * File for class MagentoStructCatalogProductAttributeMediaTypeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeMediaTypeEntity originally named catalogProductAttributeMediaTypeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeMediaTypeEntity extends MagentoWsdlClass
{
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The scope
	 * @var MagentoStructString
	 */
	public $scope;
	/**
	 * Constructor method for catalogProductAttributeMediaTypeEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_code
	 * @param MagentoStructString $_scope
	 * @return MagentoStructCatalogProductAttributeMediaTypeEntity
	 */
	public function __construct($_code = NULL,$_scope = NULL)
	{
		parent::__construct(array('code'=>$_code,'scope'=>$_scope));
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
	 * Get scope value
	 * @return MagentoStructString|null
	 */
	public function getScope()
	{
		return $this->scope;
	}
	/**
	 * Set scope value
	 * @param MagentoStructString $_scope the scope
	 * @return MagentoStructString
	 */
	public function setScope($_scope)
	{
		return ($this->scope = $_scope);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAttributeMediaTypeEntity
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