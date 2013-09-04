<?php
/**
 * File for class MagentoStructCatalogProductCustomOptionListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductCustomOptionListEntity originally named catalogProductCustomOptionListEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductCustomOptionListEntity extends MagentoWsdlClass
{
	/**
	 * The option_id
	 * @var MagentoStructString
	 */
	public $option_id;
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
	 * Constructor method for catalogProductCustomOptionListEntity
	 * @see parent::__construct()
	 * @param MagentoStructString $_option_id
	 * @param MagentoStructString $_title
	 * @param MagentoStructString $_type
	 * @param MagentoStructString $_sort_order
	 * @param MagentoStructInt $_is_require
	 * @return MagentoStructCatalogProductCustomOptionListEntity
	 */
	public function __construct($_option_id = NULL,$_title = NULL,$_type = NULL,$_sort_order = NULL,$_is_require = NULL)
	{
		parent::__construct(array('option_id'=>$_option_id,'title'=>$_title,'type'=>$_type,'sort_order'=>$_sort_order,'is_require'=>$_is_require));
	}
	/**
	 * Get option_id value
	 * @return MagentoStructString|null
	 */
	public function getOption_id()
	{
		return $this->option_id;
	}
	/**
	 * Set option_id value
	 * @param MagentoStructString $_option_id the option_id
	 * @return MagentoStructString
	 */
	public function setOption_id($_option_id)
	{
		return ($this->option_id = $_option_id);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductCustomOptionListEntity
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