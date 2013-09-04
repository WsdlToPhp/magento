<?php
/**
 * File for class MagentoStructCatalogCategoryInfo
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for MagentoStructCatalogCategoryInfo originally named catalogCategoryInfo
 * @package Magento
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class MagentoStructCatalogCategoryInfo extends MagentoWsdlClass
{
	/**
	 * The category_id
	 * @var MagentoStructString
	 */
	public $category_id;
	/**
	 * The is_active
	 * @var MagentoStructInt
	 */
	public $is_active;
	/**
	 * The position
	 * @var MagentoStructString
	 */
	public $position;
	/**
	 * The level
	 * @var MagentoStructString
	 */
	public $level;
	/**
	 * The parent_id
	 * @var MagentoStructString
	 */
	public $parent_id;
	/**
	 * The all_children
	 * @var MagentoStructString
	 */
	public $all_children;
	/**
	 * The children
	 * @var MagentoStructString
	 */
	public $children;
	/**
	 * The created_at
	 * @var MagentoStructString
	 */
	public $created_at;
	/**
	 * The updated_at
	 * @var MagentoStructString
	 */
	public $updated_at;
	/**
	 * The name
	 * @var MagentoStructString
	 */
	public $name;
	/**
	 * The url_key
	 * @var MagentoStructString
	 */
	public $url_key;
	/**
	 * The description
	 * @var MagentoStructString
	 */
	public $description;
	/**
	 * The meta_title
	 * @var MagentoStructString
	 */
	public $meta_title;
	/**
	 * The meta_keywords
	 * @var MagentoStructString
	 */
	public $meta_keywords;
	/**
	 * The meta_description
	 * @var MagentoStructString
	 */
	public $meta_description;
	/**
	 * The path
	 * @var MagentoStructString
	 */
	public $path;
	/**
	 * The url_path
	 * @var MagentoStructString
	 */
	public $url_path;
	/**
	 * The children_count
	 * @var MagentoStructInt
	 */
	public $children_count;
	/**
	 * The display_mode
	 * @var MagentoStructString
	 */
	public $display_mode;
	/**
	 * The is_anchor
	 * @var MagentoStructInt
	 */
	public $is_anchor;
	/**
	 * The available_sort_by
	 * @var ArrayOfString
	 */
	public $available_sort_by;
	/**
	 * The custom_design
	 * @var MagentoStructString
	 */
	public $custom_design;
	/**
	 * The custom_design_apply
	 * @var MagentoStructString
	 */
	public $custom_design_apply;
	/**
	 * The custom_design_from
	 * @var MagentoStructString
	 */
	public $custom_design_from;
	/**
	 * The custom_design_to
	 * @var MagentoStructString
	 */
	public $custom_design_to;
	/**
	 * The page_layout
	 * @var MagentoStructString
	 */
	public $page_layout;
	/**
	 * The custom_layout_update
	 * @var MagentoStructString
	 */
	public $custom_layout_update;
	/**
	 * The default_sort_by
	 * @var MagentoStructString
	 */
	public $default_sort_by;
	/**
	 * The landing_page
	 * @var MagentoStructInt
	 */
	public $landing_page;
	/**
	 * Constructor method for catalogCategoryInfo
	 * @see parent::__construct()
	 * @param MagentoStructString $_category_id
	 * @param MagentoStructInt $_is_active
	 * @param MagentoStructString $_position
	 * @param MagentoStructString $_level
	 * @param MagentoStructString $_parent_id
	 * @param MagentoStructString $_all_children
	 * @param MagentoStructString $_children
	 * @param MagentoStructString $_created_at
	 * @param MagentoStructString $_updated_at
	 * @param MagentoStructString $_name
	 * @param MagentoStructString $_url_key
	 * @param MagentoStructString $_description
	 * @param MagentoStructString $_meta_title
	 * @param MagentoStructString $_meta_keywords
	 * @param MagentoStructString $_meta_description
	 * @param MagentoStructString $_path
	 * @param MagentoStructString $_url_path
	 * @param MagentoStructInt $_children_count
	 * @param MagentoStructString $_display_mode
	 * @param MagentoStructInt $_is_anchor
	 * @param ArrayOfString $_available_sort_by
	 * @param MagentoStructString $_custom_design
	 * @param MagentoStructString $_custom_design_apply
	 * @param MagentoStructString $_custom_design_from
	 * @param MagentoStructString $_custom_design_to
	 * @param MagentoStructString $_page_layout
	 * @param MagentoStructString $_custom_layout_update
	 * @param MagentoStructString $_default_sort_by
	 * @param MagentoStructInt $_landing_page
	 * @return MagentoStructCatalogCategoryInfo
	 */
	public function __construct($_category_id = NULL,$_is_active = NULL,$_position = NULL,$_level = NULL,$_parent_id = NULL,$_all_children = NULL,$_children = NULL,$_created_at = NULL,$_updated_at = NULL,$_name = NULL,$_url_key = NULL,$_description = NULL,$_meta_title = NULL,$_meta_keywords = NULL,$_meta_description = NULL,$_path = NULL,$_url_path = NULL,$_children_count = NULL,$_display_mode = NULL,$_is_anchor = NULL,$_available_sort_by = NULL,$_custom_design = NULL,$_custom_design_apply = NULL,$_custom_design_from = NULL,$_custom_design_to = NULL,$_page_layout = NULL,$_custom_layout_update = NULL,$_default_sort_by = NULL,$_landing_page = NULL)
	{
		parent::__construct(array('category_id'=>$_category_id,'is_active'=>$_is_active,'position'=>$_position,'level'=>$_level,'parent_id'=>$_parent_id,'all_children'=>$_all_children,'children'=>$_children,'created_at'=>$_created_at,'updated_at'=>$_updated_at,'name'=>$_name,'url_key'=>$_url_key,'description'=>$_description,'meta_title'=>$_meta_title,'meta_keywords'=>$_meta_keywords,'meta_description'=>$_meta_description,'path'=>$_path,'url_path'=>$_url_path,'children_count'=>$_children_count,'display_mode'=>$_display_mode,'is_anchor'=>$_is_anchor,'available_sort_by'=>$_available_sort_by,'custom_design'=>$_custom_design,'custom_design_apply'=>$_custom_design_apply,'custom_design_from'=>$_custom_design_from,'custom_design_to'=>$_custom_design_to,'page_layout'=>$_page_layout,'custom_layout_update'=>$_custom_layout_update,'default_sort_by'=>$_default_sort_by,'landing_page'=>$_landing_page));
	}
	/**
	 * Get category_id value
	 * @return MagentoStructString|null
	 */
	public function getCategory_id()
	{
		return $this->category_id;
	}
	/**
	 * Set category_id value
	 * @param MagentoStructString $_category_id the category_id
	 * @return MagentoStructString
	 */
	public function setCategory_id($_category_id)
	{
		return ($this->category_id = $_category_id);
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
	 * @return MagentoStructString|null
	 */
	public function getPosition()
	{
		return $this->position;
	}
	/**
	 * Set position value
	 * @param MagentoStructString $_position the position
	 * @return MagentoStructString
	 */
	public function setPosition($_position)
	{
		return ($this->position = $_position);
	}
	/**
	 * Get level value
	 * @return MagentoStructString|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param MagentoStructString $_level the level
	 * @return MagentoStructString
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
	}
	/**
	 * Get parent_id value
	 * @return MagentoStructString|null
	 */
	public function getParent_id()
	{
		return $this->parent_id;
	}
	/**
	 * Set parent_id value
	 * @param MagentoStructString $_parent_id the parent_id
	 * @return MagentoStructString
	 */
	public function setParent_id($_parent_id)
	{
		return ($this->parent_id = $_parent_id);
	}
	/**
	 * Get all_children value
	 * @return MagentoStructString|null
	 */
	public function getAll_children()
	{
		return $this->all_children;
	}
	/**
	 * Set all_children value
	 * @param MagentoStructString $_all_children the all_children
	 * @return MagentoStructString
	 */
	public function setAll_children($_all_children)
	{
		return ($this->all_children = $_all_children);
	}
	/**
	 * Get children value
	 * @return MagentoStructString|null
	 */
	public function getChildren()
	{
		return $this->children;
	}
	/**
	 * Set children value
	 * @param MagentoStructString $_children the children
	 * @return MagentoStructString
	 */
	public function setChildren($_children)
	{
		return ($this->children = $_children);
	}
	/**
	 * Get created_at value
	 * @return MagentoStructString|null
	 */
	public function getCreated_at()
	{
		return $this->created_at;
	}
	/**
	 * Set created_at value
	 * @param MagentoStructString $_created_at the created_at
	 * @return MagentoStructString
	 */
	public function setCreated_at($_created_at)
	{
		return ($this->created_at = $_created_at);
	}
	/**
	 * Get updated_at value
	 * @return MagentoStructString|null
	 */
	public function getUpdated_at()
	{
		return $this->updated_at;
	}
	/**
	 * Set updated_at value
	 * @param MagentoStructString $_updated_at the updated_at
	 * @return MagentoStructString
	 */
	public function setUpdated_at($_updated_at)
	{
		return ($this->updated_at = $_updated_at);
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
	 * Get url_key value
	 * @return MagentoStructString|null
	 */
	public function getUrl_key()
	{
		return $this->url_key;
	}
	/**
	 * Set url_key value
	 * @param MagentoStructString $_url_key the url_key
	 * @return MagentoStructString
	 */
	public function setUrl_key($_url_key)
	{
		return ($this->url_key = $_url_key);
	}
	/**
	 * Get description value
	 * @return MagentoStructString|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param MagentoStructString $_description the description
	 * @return MagentoStructString
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get meta_title value
	 * @return MagentoStructString|null
	 */
	public function getMeta_title()
	{
		return $this->meta_title;
	}
	/**
	 * Set meta_title value
	 * @param MagentoStructString $_meta_title the meta_title
	 * @return MagentoStructString
	 */
	public function setMeta_title($_meta_title)
	{
		return ($this->meta_title = $_meta_title);
	}
	/**
	 * Get meta_keywords value
	 * @return MagentoStructString|null
	 */
	public function getMeta_keywords()
	{
		return $this->meta_keywords;
	}
	/**
	 * Set meta_keywords value
	 * @param MagentoStructString $_meta_keywords the meta_keywords
	 * @return MagentoStructString
	 */
	public function setMeta_keywords($_meta_keywords)
	{
		return ($this->meta_keywords = $_meta_keywords);
	}
	/**
	 * Get meta_description value
	 * @return MagentoStructString|null
	 */
	public function getMeta_description()
	{
		return $this->meta_description;
	}
	/**
	 * Set meta_description value
	 * @param MagentoStructString $_meta_description the meta_description
	 * @return MagentoStructString
	 */
	public function setMeta_description($_meta_description)
	{
		return ($this->meta_description = $_meta_description);
	}
	/**
	 * Get path value
	 * @return MagentoStructString|null
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set path value
	 * @param MagentoStructString $_path the path
	 * @return MagentoStructString
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get url_path value
	 * @return MagentoStructString|null
	 */
	public function getUrl_path()
	{
		return $this->url_path;
	}
	/**
	 * Set url_path value
	 * @param MagentoStructString $_url_path the url_path
	 * @return MagentoStructString
	 */
	public function setUrl_path($_url_path)
	{
		return ($this->url_path = $_url_path);
	}
	/**
	 * Get children_count value
	 * @return MagentoStructInt|null
	 */
	public function getChildren_count()
	{
		return $this->children_count;
	}
	/**
	 * Set children_count value
	 * @param MagentoStructInt $_children_count the children_count
	 * @return MagentoStructInt
	 */
	public function setChildren_count($_children_count)
	{
		return ($this->children_count = $_children_count);
	}
	/**
	 * Get display_mode value
	 * @return MagentoStructString|null
	 */
	public function getDisplay_mode()
	{
		return $this->display_mode;
	}
	/**
	 * Set display_mode value
	 * @param MagentoStructString $_display_mode the display_mode
	 * @return MagentoStructString
	 */
	public function setDisplay_mode($_display_mode)
	{
		return ($this->display_mode = $_display_mode);
	}
	/**
	 * Get is_anchor value
	 * @return MagentoStructInt|null
	 */
	public function getIs_anchor()
	{
		return $this->is_anchor;
	}
	/**
	 * Set is_anchor value
	 * @param MagentoStructInt $_is_anchor the is_anchor
	 * @return MagentoStructInt
	 */
	public function setIs_anchor($_is_anchor)
	{
		return ($this->is_anchor = $_is_anchor);
	}
	/**
	 * Get available_sort_by value
	 * @return ArrayOfString|null
	 */
	public function getAvailable_sort_by()
	{
		return $this->available_sort_by;
	}
	/**
	 * Set available_sort_by value
	 * @param ArrayOfString $_available_sort_by the available_sort_by
	 * @return ArrayOfString
	 */
	public function setAvailable_sort_by($_available_sort_by)
	{
		return ($this->available_sort_by = $_available_sort_by);
	}
	/**
	 * Get custom_design value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design()
	{
		return $this->custom_design;
	}
	/**
	 * Set custom_design value
	 * @param MagentoStructString $_custom_design the custom_design
	 * @return MagentoStructString
	 */
	public function setCustom_design($_custom_design)
	{
		return ($this->custom_design = $_custom_design);
	}
	/**
	 * Get custom_design_apply value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design_apply()
	{
		return $this->custom_design_apply;
	}
	/**
	 * Set custom_design_apply value
	 * @param MagentoStructString $_custom_design_apply the custom_design_apply
	 * @return MagentoStructString
	 */
	public function setCustom_design_apply($_custom_design_apply)
	{
		return ($this->custom_design_apply = $_custom_design_apply);
	}
	/**
	 * Get custom_design_from value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design_from()
	{
		return $this->custom_design_from;
	}
	/**
	 * Set custom_design_from value
	 * @param MagentoStructString $_custom_design_from the custom_design_from
	 * @return MagentoStructString
	 */
	public function setCustom_design_from($_custom_design_from)
	{
		return ($this->custom_design_from = $_custom_design_from);
	}
	/**
	 * Get custom_design_to value
	 * @return MagentoStructString|null
	 */
	public function getCustom_design_to()
	{
		return $this->custom_design_to;
	}
	/**
	 * Set custom_design_to value
	 * @param MagentoStructString $_custom_design_to the custom_design_to
	 * @return MagentoStructString
	 */
	public function setCustom_design_to($_custom_design_to)
	{
		return ($this->custom_design_to = $_custom_design_to);
	}
	/**
	 * Get page_layout value
	 * @return MagentoStructString|null
	 */
	public function getPage_layout()
	{
		return $this->page_layout;
	}
	/**
	 * Set page_layout value
	 * @param MagentoStructString $_page_layout the page_layout
	 * @return MagentoStructString
	 */
	public function setPage_layout($_page_layout)
	{
		return ($this->page_layout = $_page_layout);
	}
	/**
	 * Get custom_layout_update value
	 * @return MagentoStructString|null
	 */
	public function getCustom_layout_update()
	{
		return $this->custom_layout_update;
	}
	/**
	 * Set custom_layout_update value
	 * @param MagentoStructString $_custom_layout_update the custom_layout_update
	 * @return MagentoStructString
	 */
	public function setCustom_layout_update($_custom_layout_update)
	{
		return ($this->custom_layout_update = $_custom_layout_update);
	}
	/**
	 * Get default_sort_by value
	 * @return MagentoStructString|null
	 */
	public function getDefault_sort_by()
	{
		return $this->default_sort_by;
	}
	/**
	 * Set default_sort_by value
	 * @param MagentoStructString $_default_sort_by the default_sort_by
	 * @return MagentoStructString
	 */
	public function setDefault_sort_by($_default_sort_by)
	{
		return ($this->default_sort_by = $_default_sort_by);
	}
	/**
	 * Get landing_page value
	 * @return MagentoStructInt|null
	 */
	public function getLanding_page()
	{
		return $this->landing_page;
	}
	/**
	 * Set landing_page value
	 * @param MagentoStructInt $_landing_page the landing_page
	 * @return MagentoStructInt
	 */
	public function setLanding_page($_landing_page)
	{
		return ($this->landing_page = $_landing_page);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see MagentoWsdlClass::__set_state()
	 * @uses MagentoWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return MagentoStructCatalogCategoryInfo
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