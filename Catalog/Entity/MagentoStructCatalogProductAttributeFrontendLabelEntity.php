<?php
/**
 * File for class MagentoStructCatalogProductAttributeFrontendLabelEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeFrontendLabelEntity originally named catalogProductAttributeFrontendLabelEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeFrontendLabelEntity extends MagentoWsdlClass
{
	/**
	 * The store_id
	 * @var MagentoStructString
	 */
	public $store_id;
	/**
	 * The label
	 * @var MagentoStructString
	 */
	public $label;
	/**
	 * Constructor method for catalogProductAttributeFrontendLabelEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_store_id
	 * @param MagentoStructString $_label
	 * @return MagentoStructCatalogProductAttributeFrontendLabelEntity
	 */
	public function __construct($_store_id = NULL,$_label = NULL)
	{
		parent::__construct(array('store_id'=>$_store_id,'label'=>$_label));
	}
	/**
	 * Get store_id value
	 * @return MagentoStructString|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructString $_store_id the store_id
	 * @return MagentoStructString
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
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
	 * @return MagentoStructCatalogProductAttributeFrontendLabelEntity
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