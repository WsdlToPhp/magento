<?php
/**
 * File for class MagentoStructCatalogProductTypeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductTypeEntity originally named catalogProductTypeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductTypeEntity extends MagentoWsdlClass
{
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The label
	 * @var MagentoStructString
	 */
	public $label;
	/**
	 * Constructor method for catalogProductTypeEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_label
	 * @return MagentoStructCatalogProductTypeEntity
	 */
	public function __construct($_type = NULL,$_label = NULL)
	{
		parent::__construct(array('type'=>$_type,'label'=>$_label));
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
	 * Get label value
	 * @return MagentoStructString|null
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set label value
	 * @param MagentoStructString $_label the label
	 * @return MagentoStructString
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductTypeEntity
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