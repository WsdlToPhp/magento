<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionTypesEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionTypesEntity originally named catalogProductCustomOptionTypesEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionTypesEntity extends MagentoWsdlClass
{
	/**
	 * The label
	 * @var MagentoStructString
	 */
	public $label;
	/**
	 * The value
	 * @var MagentoStructString
	 */
	public $value;
	/**
	 * Constructor method for catalogProductCustomOptionTypesEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_label
	 * @param MagentoStructString $_value
	 * @return MagentoStructCatalogProductCustomOptionTypesEntity
	 */
	public function __construct($_label = NULL,$_value = NULL)
	{
		parent::__construct(array('label'=>$_label,'value'=>$_value));
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
	 * Get value value
	 * @return MagentoStructString|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param MagentoStructString $_value the value
	 * @return MagentoStructString
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionTypesEntity
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