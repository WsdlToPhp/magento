<?php
/**
 * File for class MagentoStructStoreEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructStoreEntity originally named storeEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructStoreEntity extends MagentoWsdlClass
{
	/**
	 * The store_id
	 * @var MagentoStructInt
	 */
	public $store_id;
	/**
	 * The code
	 * @var MagentoStructString
	 */
	public $code;
	/**
	 * The website_id
	 * @var MagentoStructInt
	 */
	public $website_id;
	/**
	 * The group_id
	 * @var MagentoStructInt
	 */
	public $group_id;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The sort_order
	 * @var MagentoStructInt
	 */
	public $sort_order;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * Constructor method for storeEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_store_id
	 * @param MagentoStructString $_code
	 * @param MagentoStructInt $_website_id
	 * @param MagentoStructInt $_group_id
	 * @param MagentoStructString $_name
	 * @param MagentoStructInt $_sort_order
	 * @param MagentoStructInt $_is_active
	 * @return MagentoStructStoreEntity
	 */
	public function __construct($_store_id = NULL,$_code = NULL,$_website_id = NULL,$_group_id = NULL,$_name = NULL,$_sort_order = NULL,$_is_active = NULL)
	{
		parent::__construct(array('store_id'=>$_store_id,'code'=>$_code,'website_id'=>$_website_id,'group_id'=>$_group_id,'name'=>$_name,'sort_order'=>$_sort_order,'is_active'=>$_is_active));
	}
	/**
	 * Get store_id value
	 * @return MagentoStructInt|null
	 */
	public function getStore_id()
	{
		return $this->store_id;
	}
	/**
	 * Set store_id value
	 * @param MagentoStructInt $_store_id the store_id
	 * @return MagentoStructInt
	 */
	public function setStore_id($_store_id)
	{
		return ($this->store_id = $_store_id);
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
	 * Get website_id value
	 * @return MagentoStructInt|null
	 */
	public function getWebsite_id()
	{
		return $this->website_id;
	}
	/**
	 * Set website_id value
	 * @param MagentoStructInt $_website_id the website_id
	 * @return MagentoStructInt
	 */
	public function setWebsite_id($_website_id)
	{
		return ($this->website_id = $_website_id);
	}
	/**
	 * Get group_id value
	 * @return MagentoStructInt|null
	 */
	public function getGroup_id()
	{
		return $this->group_id;
	}
	/**
	 * Set group_id value
	 * @param MagentoStructInt $_group_id the group_id
	 * @return MagentoStructInt
	 */
	public function setGroup_id($_group_id)
	{
		return ($this->group_id = $_group_id);
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
	 * Get sort_order value
	 * @return MagentoStructInt|null
	 */
	public function getSort_order()
	{
		return $this->sort_order;
	}
	/**
	 * Set sort_order value
	 * @param MagentoStructInt $_sort_order the sort_order
	 * @return MagentoStructInt
	 */
	public function setSort_order($_sort_order)
	{
		return ($this->sort_order = $_sort_order);
	}
	/**
	 * Get is_active value
	 * @return MagentoStructInt|null
	 */
	public function getIs_active()
	{
		return $this->is_active;
	}
	/**
	 * Set is_active value
	 * @param MagentoStructInt $_is_active the is_active
	 * @return MagentoStructInt
	 */
	public function setIs_active($_is_active)
	{
		return ($this->is_active = $_is_active);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructStoreEntity
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