<?php
/**
 * File for class MagentoStructCatalogProductAttributeOptionEntityToAdd
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeOptionEntityToAdd originally named catalogProductAttributeOptionEntityToAdd
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeOptionEntityToAdd extends MagentoWsdlClass
{
	/**
	 * The label
	 * @var catalogProductAttributeOptionLabelArray
	 */
	public $label;
	/**
	 * The order
	 * @var MagentoStructInt
	 */
	public $order;
	/**
	 * The is_default
	 * @var MagentoStructInt
	 */
	public $is_default;
	/**
	 * Constructor method for catalogProductAttributeOptionEntityToAdd
	 * @see parent::__construct()
	 * @param catalogProductAttributeOptionLabelArray $_label
	 * @param MagentoStructInt $_order
	 * @param MagentoStructInt $_is_default
	 * @return MagentoStructCatalogProductAttributeOptionEntityToAdd
	 */
	public function __construct($_label = NULL,$_order = NULL,$_is_default = NULL)
	{
		parent::__construct(array('label'=>$_label,'order'=>$_order,'is_default'=>$_is_default));
	}
	/**
	 * Get label value
	 * @return catalogProductAttributeOptionLabelArray|null
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set label value
	 * @param catalogProductAttributeOptionLabelArray $_label the label
	 * @return catalogProductAttributeOptionLabelArray
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get order value
	 * @return MagentoStructInt|null
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set order value
	 * @param MagentoStructInt $_order the order
	 * @return MagentoStructInt
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get is_default value
	 * @return MagentoStructInt|null
	 */
	public function getIs_default()
	{
		return $this->is_default;
	}
	/**
	 * Set is_default value
	 * @param MagentoStructInt $_is_default the is_default
	 * @return MagentoStructInt
	 */
	public function setIs_default($_is_default)
	{
		return ($this->is_default = $_is_default);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAttributeOptionEntityToAdd
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