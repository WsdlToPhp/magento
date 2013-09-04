<?php
/**
 * File for class MagentoStructCatalogProductAttributeSetEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeSetEntity originally named catalogProductAttributeSetEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeSetEntity extends MagentoWsdlClass
{
	/**
	 * The set_id
	 * @var MagentoStructInt
	 */
	public $set_id;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * Constructor method for catalogProductAttributeSetEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_set_id
	 * @param MagentoStructString $_name
	 * @return MagentoStructCatalogProductAttributeSetEntity
	 */
	public function __construct($_set_id = NULL,$_name = NULL)
	{
		parent::__construct(array('set_id'=>$_set_id,'name'=>$_name));
	}
	/**
	 * Get set_id value
	 * @return MagentoStructInt|null
	 */
	public function getSet_id()
	{
		return $this->set_id;
	}
	/**
	 * Set set_id value
	 * @param MagentoStructInt $_set_id the set_id
	 * @return MagentoStructInt
	 */
	public function setSet_id($_set_id)
	{
		return ($this->set_id = $_set_id);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAttributeSetEntity
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