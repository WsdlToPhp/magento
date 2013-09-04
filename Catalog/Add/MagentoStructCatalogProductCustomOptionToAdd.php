<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionToAdd
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionToAdd originally named catalogProductCustomOptionToAdd
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionToAdd extends MagentoWsdlClass
{
	/**
	 * The title
	 * @var MagentoStructString
	 */
	public $title;
	/**
	 * The type
	 * @var MagentoStructString
	 */
	public $type;
	/**
	 * The sort_order
	 * @var MagentoStructString
	 */
	public $sort_order;
	/**
	 * The is_require
	 * @var MagentoStructInt
	 */
	public $is_require;
	/**
	 * The additional_fields
	 * @var catalogProductCustomOptionAdditionalFieldsArray
	 */
	public $additional_fields;
	/**
	 * Constructor method for catalogProductCustomOptionToAdd
	 * @see parent::__construct()
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_sort_order
	 * @param MagentoStructInt $_is_require
	 * @param catalogProductCustomOptionAdditionalFieldsArray $_additional_fields
	 * @return MagentoStructCatalogProductCustomOptionToAdd
	 */
	public function __construct($_title = NULL,$_type = NULL,$_sort_order = NULL,$_is_require = NULL,$_additional_fields = NULL)
	{
		parent::__construct(array('title'=>$_title,'type'=>$_type,'sort_order'=>$_sort_order,'is_require'=>$_is_require,'additional_fields'=>$_additional_fields));
	}
	/**
	 * Get title value
	 * @return MagentoStructString|null
	 */
	public function getTitle()
	{
		return $this->title;
	}
	/**
	 * Set title value
	 * @param MagentoStructString $_title the title
	 * @return MagentoStructString
	 */
	public function setTitle($_title)
	{
		return ($this->title = $_title);
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
	 * Get sort_order value
	 * @return MagentoStructString|null
	 */
	public function getSort_order()
	{
		return $this->sort_order;
	}
	/**
	 * Set sort_order value
	 * @param MagentoStructString $_sort_order the sort_order
	 * @return MagentoStructString
	 */
	public function setSort_order($_sort_order)
	{
		return ($this->sort_order = $_sort_order);
	}
	/**
	 * Get is_require value
	 * @return MagentoStructInt|null
	 */
	public function getIs_require()
	{
		return $this->is_require;
	}
	/**
	 * Set is_require value
	 * @param MagentoStructInt $_is_require the is_require
	 * @return MagentoStructInt
	 */
	public function setIs_require($_is_require)
	{
		return ($this->is_require = $_is_require);
	}
	/**
	 * Get additional_fields value
	 * @return catalogProductCustomOptionAdditionalFieldsArray|null
	 */
	public function getAdditional_fields()
	{
		return $this->additional_fields;
	}
	/**
	 * Set additional_fields value
	 * @param catalogProductCustomOptionAdditionalFieldsArray $_additional_fields the additional_fields
	 * @return catalogProductCustomOptionAdditionalFieldsArray
	 */
	public function setAdditional_fields($_additional_fields)
	{
		return ($this->additional_fields = $_additional_fields);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionToAdd
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