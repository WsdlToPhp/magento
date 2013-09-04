<?php
/**
 * File for class MagentoStructCatalogProductAttributeEntityToCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogProductAttributeEntityToCreate originally named catalogProductAttributeEntityToCreate
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogProductAttributeEntityToCreate extends MagentoWsdlClass
{
	/**
	 * The attribute_code
	 * @var MagentoStructString
	 */
	public $attribute_code;
	/**
	 * The frontend_input
	 * @var MagentoStructString
	 */
	public $frontend_input;
	/**
	 * The scope
	 * @var MagentoStructString
	 */
	public $scope;
	/**
	 * The default_value
	 * @var MagentoStructString
	 */
	public $default_value;
	/**
	 * The is_unique
	 * @var MagentoStructInt
	 */
	public $is_unique;
	/**
	 * The is_required
	 * @var MagentoStructInt
	 */
	public $is_required;
	/**
	 * The apply_to
	 * @var ArrayOfString
	 */
	public $apply_to;
	/**
	 * The is_configurable
	 * @var MagentoStructInt
	 */
	public $is_configurable;
	/**
	 * The is_searchable
	 * @var MagentoStructInt
	 */
	public $is_searchable;
	/**
	 * The is_visible_in_advanced_search
	 * @var MagentoStructInt
	 */
	public $is_visible_in_advanced_search;
	/**
	 * The is_comparable
	 * @var MagentoStructInt
	 */
	public $is_comparable;
	/**
	 * The is_used_for_promo_rules
	 * @var MagentoStructInt
	 */
	public $is_used_for_promo_rules;
	/**
	 * The is_visible_on_front
	 * @var MagentoStructInt
	 */
	public $is_visible_on_front;
	/**
	 * The used_in_product_listing
	 * @var MagentoStructInt
	 */
	public $used_in_product_listing;
	/**
	 * The additional_fields
	 * @var associativeArray
	 */
	public $additional_fields;
	/**
	 * The frontend_label
	 * @var catalogProductAttributeFrontendLabelArray
	 */
	public $frontend_label;
	/**
	 * Constructor method for catalogProductAttributeEntityToCreate
	 * @see parent::__construct()
	 * @param MagentoStructString $_attribute_code
	 * @param MagentoStructString $_frontend_input
	 * @param MagentoStructString $_scope
	 * @param MagentoStructString $_default_value
	 * @param MagentoStructInt $_is_unique
	 * @param MagentoStructInt $_is_required
	 * @param ArrayOfString $_apply_to
	 * @param MagentoStructInt $_is_configurable
	 * @param MagentoStructInt $_is_searchable
	 * @param MagentoStructInt $_is_visible_in_advanced_search
	 * @param MagentoStructInt $_is_comparable
	 * @param MagentoStructInt $_is_used_for_promo_rules
	 * @param MagentoStructInt $_is_visible_on_front
	 * @param MagentoStructInt $_used_in_product_listing
	 * @param associativeArray $_additional_fields
	 * @param catalogProductAttributeFrontendLabelArray $_frontend_label
	 * @return MagentoStructCatalogProductAttributeEntityToCreate
	 */
	public function __construct($_attribute_code = NULL,$_frontend_input = NULL,$_scope = NULL,$_default_value = NULL,$_is_unique = NULL,$_is_required = NULL,$_apply_to = NULL,$_is_configurable = NULL,$_is_searchable = NULL,$_is_visible_in_advanced_search = NULL,$_is_comparable = NULL,$_is_used_for_promo_rules = NULL,$_is_visible_on_front = NULL,$_used_in_product_listing = NULL,$_additional_fields = NULL,$_frontend_label = NULL)
	{
		parent::__construct(array('attribute_code'=>$_attribute_code,'frontend_input'=>$_frontend_input,'scope'=>$_scope,'default_value'=>$_default_value,'is_unique'=>$_is_unique,'is_required'=>$_is_required,'apply_to'=>$_apply_to,'is_configurable'=>$_is_configurable,'is_searchable'=>$_is_searchable,'is_visible_in_advanced_search'=>$_is_visible_in_advanced_search,'is_comparable'=>$_is_comparable,'is_used_for_promo_rules'=>$_is_used_for_promo_rules,'is_visible_on_front'=>$_is_visible_on_front,'used_in_product_listing'=>$_used_in_product_listing,'additional_fields'=>$_additional_fields,'frontend_label'=>$_frontend_label));
	}
	/**
	 * Get attribute_code value
	 * @return MagentoStructString|null
	 */
	public function getAttribute_code()
	{
		return $this->attribute_code;
	}
	/**
	 * Set attribute_code value
	 * @param MagentoStructString $_attribute_code the attribute_code
	 * @return MagentoStructString
	 */
	public function setAttribute_code($_attribute_code)
	{
		return ($this->attribute_code = $_attribute_code);
	}
	/**
	 * Get frontend_input value
	 * @return MagentoStructString|null
	 */
	public function getFrontend_input()
	{
		return $this->frontend_input;
	}
	/**
	 * Set frontend_input value
	 * @param MagentoStructString $_frontend_input the frontend_input
	 * @return MagentoStructString
	 */
	public function setFrontend_input($_frontend_input)
	{
		return ($this->frontend_input = $_frontend_input);
	}
	/**
	 * Get scope value
	 * @return MagentoStructString|null
	 */
	public function getScope()
	{
		return $this->scope;
	}
	/**
	 * Set scope value
	 * @param MagentoStructString $_scope the scope
	 * @return MagentoStructString
	 */
	public function setScope($_scope)
	{
		return ($this->scope = $_scope);
	}
	/**
	 * Get default_value value
	 * @return MagentoStructString|null
	 */
	public function getDefault_value()
	{
		return $this->default_value;
	}
	/**
	 * Set default_value value
	 * @param MagentoStructString $_default_value the default_value
	 * @return MagentoStructString
	 */
	public function setDefault_value($_default_value)
	{
		return ($this->default_value = $_default_value);
	}
	/**
	 * Get is_unique value
	 * @return MagentoStructInt|null
	 */
	public function getIs_unique()
	{
		return $this->is_unique;
	}
	/**
	 * Set is_unique value
	 * @param MagentoStructInt $_is_unique the is_unique
	 * @return MagentoStructInt
	 */
	public function setIs_unique($_is_unique)
	{
		return ($this->is_unique = $_is_unique);
	}
	/**
	 * Get is_required value
	 * @return MagentoStructInt|null
	 */
	public function getIs_required()
	{
		return $this->is_required;
	}
	/**
	 * Set is_required value
	 * @param MagentoStructInt $_is_required the is_required
	 * @return MagentoStructInt
	 */
	public function setIs_required($_is_required)
	{
		return ($this->is_required = $_is_required);
	}
	/**
	 * Get apply_to value
	 * @return ArrayOfString|null
	 */
	public function getApply_to()
	{
		return $this->apply_to;
	}
	/**
	 * Set apply_to value
	 * @param ArrayOfString $_apply_to the apply_to
	 * @return ArrayOfString
	 */
	public function setApply_to($_apply_to)
	{
		return ($this->apply_to = $_apply_to);
	}
	/**
	 * Get is_configurable value
	 * @return MagentoStructInt|null
	 */
	public function getIs_configurable()
	{
		return $this->is_configurable;
	}
	/**
	 * Set is_configurable value
	 * @param MagentoStructInt $_is_configurable the is_configurable
	 * @return MagentoStructInt
	 */
	public function setIs_configurable($_is_configurable)
	{
		return ($this->is_configurable = $_is_configurable);
	}
	/**
	 * Get is_searchable value
	 * @return MagentoStructInt|null
	 */
	public function getIs_searchable()
	{
		return $this->is_searchable;
	}
	/**
	 * Set is_searchable value
	 * @param MagentoStructInt $_is_searchable the is_searchable
	 * @return MagentoStructInt
	 */
	public function setIs_searchable($_is_searchable)
	{
		return ($this->is_searchable = $_is_searchable);
	}
	/**
	 * Get is_visible_in_advanced_search value
	 * @return MagentoStructInt|null
	 */
	public function getIs_visible_in_advanced_search()
	{
		return $this->is_visible_in_advanced_search;
	}
	/**
	 * Set is_visible_in_advanced_search value
	 * @param MagentoStructInt $_is_visible_in_advanced_search the is_visible_in_advanced_search
	 * @return MagentoStructInt
	 */
	public function setIs_visible_in_advanced_search($_is_visible_in_advanced_search)
	{
		return ($this->is_visible_in_advanced_search = $_is_visible_in_advanced_search);
	}
	/**
	 * Get is_comparable value
	 * @return MagentoStructInt|null
	 */
	public function getIs_comparable()
	{
		return $this->is_comparable;
	}
	/**
	 * Set is_comparable value
	 * @param MagentoStructInt $_is_comparable the is_comparable
	 * @return MagentoStructInt
	 */
	public function setIs_comparable($_is_comparable)
	{
		return ($this->is_comparable = $_is_comparable);
	}
	/**
	 * Get is_used_for_promo_rules value
	 * @return MagentoStructInt|null
	 */
	public function getIs_used_for_promo_rules()
	{
		return $this->is_used_for_promo_rules;
	}
	/**
	 * Set is_used_for_promo_rules value
	 * @param MagentoStructInt $_is_used_for_promo_rules the is_used_for_promo_rules
	 * @return MagentoStructInt
	 */
	public function setIs_used_for_promo_rules($_is_used_for_promo_rules)
	{
		return ($this->is_used_for_promo_rules = $_is_used_for_promo_rules);
	}
	/**
	 * Get is_visible_on_front value
	 * @return MagentoStructInt|null
	 */
	public function getIs_visible_on_front()
	{
		return $this->is_visible_on_front;
	}
	/**
	 * Set is_visible_on_front value
	 * @param MagentoStructInt $_is_visible_on_front the is_visible_on_front
	 * @return MagentoStructInt
	 */
	public function setIs_visible_on_front($_is_visible_on_front)
	{
		return ($this->is_visible_on_front = $_is_visible_on_front);
	}
	/**
	 * Get used_in_product_listing value
	 * @return MagentoStructInt|null
	 */
	public function getUsed_in_product_listing()
	{
		return $this->used_in_product_listing;
	}
	/**
	 * Set used_in_product_listing value
	 * @param MagentoStructInt $_used_in_product_listing the used_in_product_listing
	 * @return MagentoStructInt
	 */
	public function setUsed_in_product_listing($_used_in_product_listing)
	{
		return ($this->used_in_product_listing = $_used_in_product_listing);
	}
	/**
	 * Get additional_fields value
	 * @return associativeArray|null
	 */
	public function getAdditional_fields()
	{
		return $this->additional_fields;
	}
	/**
	 * Set additional_fields value
	 * @param associativeArray $_additional_fields the additional_fields
	 * @return associativeArray
	 */
	public function setAdditional_fields($_additional_fields)
	{
		return ($this->additional_fields = $_additional_fields);
	}
	/**
	 * Get frontend_label value
	 * @return catalogProductAttributeFrontendLabelArray|null
	 */
	public function getFrontend_label()
	{
		return $this->frontend_label;
	}
	/**
	 * Set frontend_label value
	 * @param catalogProductAttributeFrontendLabelArray $_frontend_label the frontend_label
	 * @return catalogProductAttributeFrontendLabelArray
	 */
	public function setFrontend_label($_frontend_label)
	{
		return ($this->frontend_label = $_frontend_label);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogProductAttributeEntityToCreate
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