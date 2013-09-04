<?php
/**
 * File for class MagentoStructCatalogCategoryEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogCategoryEntity originally named catalogCategoryEntity
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogCategoryEntity extends MagentoWsdlClass
{
	/**
	 * The category_id
	 * @var MagentoStructInt
	 */
	public $category_id;
	/**
	 * The parent_id
	 * @var MagentoStructInt
	 */
	public $parent_id;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * The position
	 * @var MagentoStructInt
	 */
	public $position;
	/**
	 * The level
	 * @var MagentoStructInt
	 */
	public $level;
	/**
	 * The children
	 * @var ArrayOfCatalogCategoryEntities
	 */
	public $children;
	/**
	 * Constructor method for catalogCategoryEntity
	 * @see parent::__construct()
	 * @param MagentoStructInt $_category_id
	 * @param MagentoStructInt $_parent_id
	 * @param MagentoStructString $_name
	 * @param MagentoStructInt $_is_active
	 * @param MagentoStructInt $_position
	 * @param MagentoStructInt $_level
	 * @param ArrayOfCatalogCategoryEntities $_children
	 * @return MagentoStructCatalogCategoryEntity
	 */
	public function __construct($_category_id = NULL,$_parent_id = NULL,$_name = NULL,$_is_active = NULL,$_position = NULL,$_level = NULL,$_children = NULL)
	{
		parent::__construct(array('category_id'=>$_category_id,'parent_id'=>$_parent_id,'name'=>$_name,'is_active'=>$_is_active,'position'=>$_position,'level'=>$_level,'children'=>$_children));
	}
	/**
	 * Get category_id value
	 * @return MagentoStructInt|null
	 */
	public function getCategory_id()
	{
		return $this->category_id;
	}
	/**
	 * Set category_id value
	 * @param MagentoStructInt $_category_id the category_id
	 * @return MagentoStructInt
	 */
	public function setCategory_id($_category_id)
	{
		return ($this->category_id = $_category_id);
	}
	/**
	 * Get parent_id value
	 * @return MagentoStructInt|null
	 */
	public function getParent_id()
	{
		return $this->parent_id;
	}
	/**
	 * Set parent_id value
	 * @param MagentoStructInt $_parent_id the parent_id
	 * @return MagentoStructInt
	 */
	public function setParent_id($_parent_id)
	{
		return ($this->parent_id = $_parent_id);
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
	 * Get position value
	 * @return MagentoStructInt|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructInt $_position the position
	 * @return MagentoStructInt
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get level value
	 * @return MagentoStructInt|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param MagentoStructInt $_level the level
	 * @return MagentoStructInt
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get children value
	 * @return ArrayOfCatalogCategoryEntities|null
	 */
	public function getChildren()
	{
		return $this->children;
	}
	/**
	 * Set children value
	 * @param ArrayOfCatalogCategoryEntities $_children the children
	 * @return ArrayOfCatalogCategoryEntities
	 */
	public function setChildren($_children)
	{
		return ($this->children = $_children);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogCategoryEntity
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