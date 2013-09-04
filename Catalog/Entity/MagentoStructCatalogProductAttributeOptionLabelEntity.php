<?php
/**
 * File for class MagentoStructCatalogProductAttributeOptionLabelEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeOptionLabelEntity originally named catalogProductAttributeOptionLabelEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeOptionLabelEntity extends MagentoWsdlClass
{
	/**
	 * The store_id
	 * @var ArrayOfString
	 */
	public $store_id;
	/**
	 * The value
	 * @var MagentoStructString
	 */
	public $value;
	/**
	 * Constructor method for catalogProductAttributeOptionLabelEntity
	 * @see parent::__construct()
	 * @param ArrayOfString $_store_id
	 * @param MagentoStructString $_value
	 * @return MagentoStructCatalogProductAttributeOptionLabelEntity
	 */
	public function __construct($_store_id = NULL,$_value = NULL)
	{
		parent::__construct(array('store_id'=>$_store_id,'value'=>$_value));
	}
	/**
	 * Get store_id value
	 * @return ArrayOfString|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param ArrayOfString $_store_id the store_id
	 * @return ArrayOfString
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
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
	 * @return MagentoStructCatalogProductAttributeOptionLabelEntity
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